<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Bridges;
use App\Models\Contact;
use Carbon\Carbon;

class adminController extends Controller
{
    public function dashboard(Request $request)
    {
        $username = $request->session()->get('username');
        if ($username == '') {
            return redirect('admin-portal/login');
        }
        $data = [
            'username' => $username,
            'counter_bridges' => Bridges::count(),
            'counter_admin' => Account::where('level', '2')->orWhere('level', '3')->count(),
            'counter_user' => Account::where('level', '1')->count(),
            'contacts' => Contact::orderBy('id', 'DESC')->get(),
        ];

        $datetime = Carbon::now();

        foreach ($data['contacts'] as $contact) {
            $localtime = localtime(strtotime($contact['time']), true);

            if ($datetime->year - ($localtime['tm_year'] + 1900) == 1) {
                $contact['time'] = 'a year';
            } elseif ($datetime->year - ($localtime['tm_year'] + 1900) > 1) {
                $contact['time'] = $datetime->year - ($localtime['tm_year'] + 1900) . ' years';
            } elseif ($datetime->month - ($localtime['tm_mon'] + 1) == 1) {
                $contact['time'] = 'a month';
            } elseif ($datetime->month - ($localtime['tm_mon'] + 1) > 1) {
                $contact['time'] = $datetime->month - $localtime['tm_mon'] . ' months';
            } elseif ($datetime->day - ($localtime['tm_mday'] + 1) == 1) {
                $contact['time'] = 'a day';
            } elseif ($datetime->day - ($localtime['tm_mday'] + 1) > 1) {
                $contact['time'] = $datetime->day - $localtime['tm_mday'] . ' days';
            } elseif ($datetime->minute - $localtime['tm_min'] > 0) {
                $contact['time'] = 'a few minutes';
            } elseif ($datetime->second - $localtime['tm_sec'] > 0) {
                $contact['time'] = 'a few seconds';
            }
        }

        return view('admin/dashboard')->with($data);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username');
        $request->session()->forget('username_edit');
        return redirect('admin-portal/login');
    }

    public function login(Request $request)
    {
        if($request->session()->get('username')) {
            return redirect('admin-portal');
        }
        return view('admin/login');
    }

    public function register(Request $request)
    {
        if($request->session()->get('username')) {
            return redirect('admin-portal');
        }
        return view('admin/register');
    }
};

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\DB;

class accountManageController extends Controller
{
    public function home(Request $request)
    {
        $username = $request->session()->get('username');
        if ($username == '') {
            return redirect('admin-portal/login');
        }
        $request->session()->forget('username_edit');
        $request->session()->forget('col-id');
        $data = [
            'username' => $username,
            'profile' => Account::firstWhere('user_name', $username),
            'displayAdmin',
            'user' => DB::table('Account')->select('*')->Where('level', 1)->get(),
            'admin' => DB::table('Account')->select('*')->Where('level', 2)->orWhere('level', 3)->orderBy('level', 'DESC')->get(),
        ];

        if ($data['profile']['level'] == 2) {
            $data['displayAdmin'] = 'none';
        } else {
            $data['displayAdmin'] = 'block';
        }

        return view('admin/accountmanage')->with($data);
    }

    public function delete($username_acc)
    {
        Account::where('user_name', $username_acc)->delete();
        return redirect()->back();
    }
};

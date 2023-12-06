<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class countryController extends Controller
{
    public function home(Request $request)
    {
        $username = $request->session()->get('username');
        if($username == '') {
            return redirect('admin-portal/login');
        }
        $data = [
            'username' => $username,
            'country' => Country::All(),
        ];

        return view('admin/country')->with($data);
    }

    public function add(Request $request)
    {
        $name = $request->input('country_name_input');
        $data = [
            'name' => $name,
        ];
        Country::create($data);
        return redirect()->back();
    }

    public function delete($id)
    {
        Country::where('id', $id)->delete();
        return redirect()->back();
    }
};

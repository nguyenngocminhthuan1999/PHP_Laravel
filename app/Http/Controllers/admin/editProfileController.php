<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Country;
use App\Models\Level;

class editProfileController extends Controller
{
    public function home(Request $request)
    {
        $username_profile = $request->session()->get('username');
        if($username_profile == '') {
            return redirect('admin-portal/login');
        }
        $data = [
            'username' => $username_profile,
            'profile' => Account::find($username_profile),
            'country_name',
            'country',
            'hidden' => '',
        ];
        
        if($data['profile']['level'] == 2) {
            $data['hidden'] = 'hidden';
        }

        if($data['profile']['country']) {
            $data['country_name'] = (Country::join('account', 'account.country', '=', 'country.id')->where('country.id', $data['profile']['country'])->get('country.name'))[0]->name;
        } else {
            $data['country_name'] = '';
            $data['profile']['country'] = '';
        }
        $data['country'] = Country::where('id', '!=', $data['profile']['country'])->get();

        return view('admin/editProfile')->with($data);
    }

    public function information(Request $request)
    {
        $username_profile = $request->session()->get('username');

        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $email = $request->input('email');
        $country = $request->country;
        $data = [
            'full_name' => $name,
            'phone' => $phone,
            'country' => $country,
            'address' => $address,
            'email' => $email,
        ];
        Account::where('user_name', $username_profile)->update($data);

        return redirect()->back();
    }

    public function password(Request $request)
    {
        $username_profile = $request->session()->get('username');
        $password = $request->input('current_password');
        $data = [
            'profile' => Account::find($username_profile),
        ];

        if(!password_verify($password, $data['profile']['password'])) {
            $msg = 'sai mk';
        } else {
            $new_password = $request->input('new_pass');
            $re_en_new_password = $request->input('re_enter_new_password');
            if($new_password == $re_en_new_password) {
                $data = [
                    'password' => password_hash($new_password, PASSWORD_BCRYPT),
                ];
        
                Account::where('user_name', $username_profile)->update($data); 
            } else {

            }
            return redirect()->back();
        }
    }
};

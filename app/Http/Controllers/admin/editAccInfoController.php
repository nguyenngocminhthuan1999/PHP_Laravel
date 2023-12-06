<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Country;

class editAccInfoController extends Controller
{
    public function home(Request $request, $username_acc)
    {
        $username = $request->session()->get('username');
        if($username == '') {
            return redirect('admin-portal/login');
        }
        if ($username_acc == $username) {
            return redirect('admin-portal/edit-profile');
        }
        $data = [
            'username' => $username,
            'username_acc' => $username_acc,
            'profile' => Account::find($username_acc),
            'country_name',
            'country',
        ];

        if($data['profile']['country']) {
            $data['country_name'] = (Country::join('account', 'account.country', '=', 'country.id')->get('country.name'))[0]->name;
        } else {
            $data['country_name'] = '';
            $data['profile']['country'] = '';
        }
        

        $data['country'] = Country::where('id', '!=', $data['profile']['country'])->get();

        return view('admin/editAccInfo')->with($data);
    }

    public function information(Request $request, $username)
    {
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

        Account::where('user_name', $username)->update($data);
        
        return redirect()->back();
    }

    public function password(Request $request, $username)
    {
        $password = $request->input('current_password');
        $data = [
            'profile' => Account::find($username),
        ];

        if(!password_verify($password, $data['profile']['password'])) {
            $msg = 'sai mk';
            return redirect()->back();
        } else {
            $new_password = $request->input('new_pass');
            $re_en_new_password = $request->input('re_enter_new_password');
            $pattern = '/^[a-zA-Z0-9]{6,20}+$/i';
            if($new_password == $re_en_new_password && preg_match($pattern, $new_password)) {
                $data = [
                    'password' => password_hash($new_password, PASSWORD_BCRYPT),
                ];
        
                Account::where('user_name', $username)->update($data); 
            } else {

            }
            return redirect()->back();
        }
    }
};

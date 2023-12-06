<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class signUpController extends Controller
{
    public function register(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');

        $data = [
            'account' => Account::firstWhere('user_name', $username)
        ];

        $pattern = '/^[a-zA-Z0-9]{6,20}+$/i';
        $pattern_password = '/^.{6,20}+$/i';
        if (preg_match($pattern, $username) && $data['account'] == '' && preg_match($pattern_password, $password)) {
            $password = password_hash($password, PASSWORD_BCRYPT);
            $data = [
                'user_name' => $username,
                'password' => $password,
                'email' => $email,
                'level' => 2,
                'status' => 1,
            ];
            // Account::create($data);
            return redirect('/admin-portal/login');
        } else {
            return back();
        }
    }
};

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Account;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $data = [
            'account' => Account::firstWhere('user_name', $username)
        ];

        if ($data['account'] == '') {
            $msg = "Sai tài khoản";
        } else if ($pw = $data['account']['level'] == '1') {
            $msg = "Tài khoản user thì không được phép đăng nhập";
        } else if ($data['account']['status'] == 0) {
            $msg = "Tài khoản của bạn đã bị khóa";
        } else {
            $pw = $data['account']['password'];
            if (password_verify($password, $pw)) {
                $msg = 'Valid';
                $request->session()->put('username', $username);
                $request->session()->forget('password');
                return redirect('admin-portal');
            } else {
                $msg = 'Sai mật khẩu';
            }
        }
        echo $msg;
        return view('admin/login');
    }
};

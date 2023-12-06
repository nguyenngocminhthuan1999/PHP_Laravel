<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Accounts;
use App\Models\Information;
use App\Models\Profile;


class UserController extends Controller
{

    public function home(Request $request)
    {
        return view('user/login');
    }

    public function store(Request $request)
    {
        // $accounts = new Accounts;
        // $accounts->user_name = $request->user_name;
        // $accounts->email = $request->email;
        // $accounts->password = $request->password;
        // $accounts->save();
        // return redirect()->route('user.index');
    }


    public function showLoginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $user_name = $request->input('user_name');
        
        $password = $request->input('password');

        $data = [
            'account' => Account::firstWhere('user_name', $user_name)
        ];

        if ($data['account']['status'] == 0) {
            $msg = "Tài khoản của bạn đã bị khóa";
        } else {
            $pw = $data['account']['password'];
            if (password_verify($password, $pw)) {
                $msg = 'Valid';
                $request->session()->put('username_view', $user_name);
                $request->session()->put('account_id', $data['account']['id']);
                $request->session()->forget('password');
                return redirect($request->session()->get('task_url'));
                
            } else {
                $msg = 'Sai mật khẩu';
            }
        }
        // echo $msg;
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username_view');
        return redirect()->back();
    }

    public function showRegistrationForm()
    {
        return view('user.register');
    }

    public function create()
    {
        return view('user.create');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:account',
            'email' => 'required|email|unique:account',
            'password' => 'required|min:6',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // Accounts::create($validatedData);

        return redirect()->route('user.login')->with('success', 'Đăng ký thành công');
    }

    public function showChangePasswordForm()
    {
        return view('user.change_password');
    }

    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:account',
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        // $user = Accounts::where('user_name', '=', Auth::user()->user_name)->first();

        // if (Hash::check($validatedData['current_password'], $user->password)) {
        //     $user->password = bcrypt($validatedData['new_password']);
        //     $user->save();

        //     return redirect()->route('user.home')->with('success', 'Thay đổi mật khẩu thành công');
        // } else {
        //     return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không chính xác']);
        // }
    }
}

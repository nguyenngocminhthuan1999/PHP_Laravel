<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    public function home(Request $request)
    {
        $username = $request->session()->get('username');
        if($username == '') {
            return redirect('admin-portal/login');
        }
        $data = [
            'username' => $username,
            'category' => Category::All(),
        ];

        return view('admin/category')->with($data);
    }

    public function add(Request $request)
    {
        $name = $request->input('category_input');
        $data = [
            'name' => $name,
        ];
        Category::create($data);
        return redirect()->back();
    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->back();
    }
};

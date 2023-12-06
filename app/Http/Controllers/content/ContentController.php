<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\Bridges;
use App\Models\Bus;
use App\Models\Comment;
use App\Models\Plane;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function information(Request $request, $id)
    {
        $data = [
            'category' => Category::get(),
            'bus' => Bus::All()->where('bus_id', $id),
            'plane' => Plane::All()->where('plane_id', $id),
            'comment' => Comment::join('bridges', 'bridges.id', '=', 'comment.bridge_id')->join('account', 'account.id', '=', 'comment.account_id')->where('comment.bridge_id', $id)->get(),
            'bridges' => Bridges::find($id),
            'image' => Image::all()->where('image_id', $id),
            'imagecontent' => Image::all()->firstwhere('image_id', $id),
            'background' => Image::where('image_id', $id)->skip(1)->take(1)->first(),
            'login_display' => 'show',
            'logout_display' => 'show',
            'username_view' => '',
        ];

        if ($request->session()->get('username_view') != '') {
            $data['login_display'] = 'hidden';
            $data['username_view'] = $request->session()->get('username_view');
        } else {
            $data['logout_display'] = 'hidden';
        }

        $request->session()->put('task_url', request()->fullUrl());
        return view('content.content')->with($data);
    }
    public function category(Request $request, $category)
    {
        $id_category = Category::firstwhere('name', $category);
        $id = (Bridges::firstwhere('category_id',  $id_category->id))->id;

        $data = [
            'category' => Category::get(),
            'bus' => Bus::All()->where('bus_id', $id),
            'plane' => Plane::All()->where('plane_id', $id),
            'comment' => comment::get(),
            'bridges' => Bridges::find($id),
            'image' => Image::all()->where('image_id', $id),
            'imagecontent' => Image::all()->firstwhere('image_id', $id),
            'background' => Image::where('image_id', $id)->skip(1)->take(1)->first(),
            'login_display' => 'show',
            'logout_display' => 'show',
            'username_view' => '',
        ];
        
        if ($request->session()->get('username_view') != '') {
            $data['login_display'] = 'hidden';
            $data['username_view'] = $request->session()->get('username_view');
        } else {
            $data['logout_display'] = 'hidden';
        }

        $request->session()->put('task_url', request()->fullUrl());
        return view('content.content')->with($data);
    }

    public function save_comment(Request $request, $id)
    {
        if($request->input('message') != '') {
            $data = [
                'cmt' => $request->input('message'),
                'bridge_id' => $id,
                'account_id' => $request->session()->get('account_id'),
            ];
            Comment::create($data);
        }
        
        return redirect()->back();
    }
};

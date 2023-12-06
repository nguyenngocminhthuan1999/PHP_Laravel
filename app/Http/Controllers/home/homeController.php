<?php

namespace App\Http\Controllers\home;

use App\Models\Bridges;
use App\Models\Image;
use App\Models\Category;
use App\Models\Country;
use App\Models\Bus;
use App\Models\comment;
use App\Models\Plane;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class homeController extends Controller
{
    public function home()
    {
        $data = [
            'bridges' => Bridges::orderBy('name', 'DESC')->get()->take(6),
            // chi lay 6 cay cau
            'category' => Category::all(),
            'country' => Country::all(),
            'image' =>   Image::all(),

        ];

        for ($i = 0; $i < 6; $i++) {
            $data['bridges'][$i]['country'] = Country::find($data['bridges'][$i]['country_id'])['name'];
            $data['bridges'][$i]['image'] = Image::firstwhere('image_id', $data['bridges'][$i]['id'])['name'];
        }
        // firstwhere
        // print_r($data);
        return view('layouts/index')->with($data);
    }
    // public function information($id)
    // {
    //     $data = [
    //         'category'=> Category::get(),
    //         'bus' => Bus::All()->where('bus_id', $id),
    //         'plane' => Plane::All()->where('plane_id', $id),
    //         'comment' => comment::get(),
    //         'bridges' => Bridges::find($id),
    //         'image' => Image::all()->where('image_id', $id),
    //         'imagecontent'=> Image::all()->firstwhere('image_id', $id),
    //         'background'=> Image::where('image_id', $id)->skip(1)->take(1)->first()

    //     ];
    //      $data['bridges']['country'] = Country::find($data['bridges']['country_id'])['name'];

    // return view('content.content')->with($data);
    // }

    public function contact(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            
        ];
        Contact::create($data);
        return redirect()->back();
    }
};

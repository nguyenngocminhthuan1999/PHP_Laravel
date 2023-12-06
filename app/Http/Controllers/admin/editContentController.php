<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bridges;
use App\Models\Country;
use App\Models\Category;
use App\Models\Image;
use App\Models\Bus;
use App\Models\Plane;
use App\Models\Comment;
use Carbon\Carbon;

class editContentController extends Controller
{
    public function edit(Request $request, $id)
    {
        $username = $request->session()->get('username');
        if($username == '') {
            return redirect('admin-portal/login');
        }
        $data = [
            'username' => $username,
            'bridges' => Bridges::find($id),
            'country_name',
            'country',
            'category_name' => '',
            'category',
            'images_list' => Image::All()->where('image_id', $id),
            'bus' => Bus::All()->where('bus_id', $id),
            'plane' => Plane::All()->where('plane_id', $id),
            'comment',
        ];

        if($data['bridges']['country_id']) {
            $data['country_name'] = (Country::join('bridges', 'country.id', '=', 'bridges.country_id')->get('country.name'))[0]->name;
        } else {
            $data['country_name'] = '';
        }
        $data['country'] = Country::where('id', '!=', $data['bridges']['country_id'])->get();

        if ($data['bridges']['category_id']) {
            $data['category_name'] = (Category::join('bridges', 'category.id', '=', 'bridges.category_id')->get('category.name'))[0]->name;

            $data['category'] = Category::where('id', '!=', $data['bridges']['category_id'])->get();
        } else {
            $data['category'] = Category::All();
        }

        if ($data['bridges']['opened']) {
            $data['bridges']['opened'] = Carbon::createFromFormat('Y-m-d', $data['bridges']['opened'])->format('d/m/Y');
        } else {
            $data['bridges']['opened'] = '';
        }

        $data['comment'] = Comment::join('bridges', 'bridges.id', '=', 'comment.bridge_id')->join('account', 'account.id', '=', 'comment.account_id')->where('comment.bridge_id',$id)->get();

        return view('admin/editContent')->with($data);
    }

    public function save(Request $request, $id)
    {
        $name = $request->input('name');
        $country = $request->input('country');
        $height = $request->input('height');
        $length = $request->input('length');
        $date = $request->input('datepicker');
        $category = $request->input('category');
        $description = $request->input('description');
        $geolocation = $request->input('geolocation');
        $date = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        if (!$category) {
            $category = NULL;
        }
        $data = [
            'name' => $name,
            'tall' => $height,
            'long' => $length,
            'opened' => $date,
            'description' => $description,
            'geolocation' => $geolocation,
            'category_id' => $category,
            'country_id' => $country,
        ];

        Bridges::where('id', $id)->update($data);

        $image = $request->file('image');
        if ($image) {
            $image->move(public_path('imageBridge'), $image->getClientOriginalName());
            $data = [
                'name' => $image->getClientOriginalName(),
                'image_id' => $id,
            ];
            Image::create($data);
        }

        $file = $request->file('file');
        if ($file) {
            $file->move(public_path('historic'), $file->getClientOriginalName());
            $data = [
                'file' => $file->getClientOriginalName(),
            ];
            Bridges::where('id', $id)->update($data);
        }

        if ($request->input('bus_code_input')) {
            $bus_code = $request->input('bus_code_input');
            $carriage_way = $request->input('carriage_way_input');
            $distance = $request->input('distance_input');
            $operating_time = $request->input('operating_time_input');
            $ride_time = $request->input('ride_time_input');
            $bus_line_frequency = $request->input('bus_line_frequency_input');
            $data = [
                'bus_code' => $bus_code,
                'carriage_way' => $carriage_way,
                'distance' => $distance,
                'operating_time' => $operating_time,
                'ride_time' => $ride_time,
                'bus_line_frequency' => $bus_line_frequency,
                'bus_id' => $id,
            ];
            Bus::create($data);
        }

        if ($request->input('from_input')) {
            $from = $request->input('from_input');
            $to = $request->input('to_input');
            $airline_company = $request->input('airline_company_input');
            $data = [
                'from' => $from,
                'to' => $to,
                'airline_company' => $airline_company,
                'plane_id' => $id,
            ];
            Plane::create($data);
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        Image::where('id', $id)->delete();
        return redirect()->back();
    }

    public function delete_bus($id)
    {
        Bus::where('id', $id)->delete();
        return redirect()->back();
    }

    public function delete_plane($id)
    {
        Plane::where('id', $id)->delete();
        return redirect()->back();
    }

    public function delete_comment($id)
    {
        Comment::where('time', $id)->delete();
        return redirect()->back();
    }
};

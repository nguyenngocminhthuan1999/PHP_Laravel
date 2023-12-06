<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bridges;
use App\Models\Country;
use App\Models\Category;
use App\Models\Image;
use Carbon\Carbon;
use App\Models\Bus;
use App\Models\Plane;

class addNewsController extends Controller
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
            'category' => Category::All(),
        ];

        return view('admin/addnews')->with($data);
    }

    public function create(Request $request)
    {
        $name = $request->input('name');
        $country = $request->input('country');
        $height = $request->input('height');
        $length = $request->input('length');
        $date = $request->input('datepicker');
        $category = $request->input('category');
        $description = $request->input('description');
        $geolocation = $request->input('geolocation');
        if($date) {
            $date = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
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
        Bridges::create($data);

        $id = Bridges::orderBy('id', 'DESC')->get();

        $image = $request->file('image');
        if ($image) {
            $image->move(public_path('imageBridge'), $image->getClientOriginalName());
            $data = [
                'name' => $image->getClientOriginalName(),
                'image_id' => $id[0]['id'],
            ];
            Image::create($data);
        }

        $file = $request->file('file');
        if ($file) {
            $file->move(public_path('historic'), $file->getClientOriginalName());
            $data = [
                'file' => $file->getClientOriginalName(),
            ];
            Bridges::where('id', $id[0]['id'])->update($data);
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
                'bus_id' => $id[0]['id'],
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
                'plane_id' => $id[0]['id'],
            ];
            Plane::create($data);
        }

        return redirect()->back();
    }
};

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

class bridgesListController extends Controller
{
    public function home(Request $request)
    {
        $username = $request->session()->get('username');
        if($username == '') {
            return redirect('admin-portal/login');
        }
        $data = [
            'username' => $username,
            'bridges' => Bridges::All(),
        ];

        $count = $data['bridges']->count();

        for ($i = 0; $i < $count; $i++) {
            if ($data['bridges'][$i]['category_id']) {

                $data['bridges'][$i]['category'] = (Category::join('bridges', 'bridges.category_id', '=', 'category.id')->where('category.id', $data['bridges'][$i]['category_id'])->get('category.name'))[0]->name;
            } else {
                $data['bridges'][$i]['category'] = '-----------';
            }

            $data['bridges'][$i]['country'] = (Country::join('bridges', 'bridges.country_id', '=', 'country.id')->where('country.id', $data['bridges'][$i]['country_id'])->get('country.name'))[0]->name;
        }

        return view('admin/bridgesList')->with($data);
    }

    public function delete($id)
    {
        Bus::where('bus_id', $id)->delete();
        Plane::where('plane_id', $id)->delete();
        Image::where('image_id', $id)->delete();
        Bridges::where('id', $id)->delete();
        return redirect()->back();
    }
};

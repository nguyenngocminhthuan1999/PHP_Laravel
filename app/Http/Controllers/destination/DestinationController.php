<?php

namespace App\Http\Controllers\destination;
use App\Models\Bridges;
use App\Models\Image;
use App\Models\Category;
use App\Models\Country;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function bridges()
    {
        $data = [
            'bridges'=> Bridges::orderBy('name', 'DESC')->get(),
            
            'category'=> Category::all(),
            'country'=> Country::all(),
            'image'=>   Image::all(),
            
        ];
        

        for($i = 0; $i < 10; $i++) {
            $data['bridges'][$i]['country'] = Country::find($data['bridges'][$i]['country_id'])['name'];
            $data['bridges'][$i]['image'] = Image::firstwhere('image_id',$data['bridges'][$i]['id'])['name'];
        }
        return view('destination/destination')->with($data);
    }
    // public function edit(Request $request, $id){
    //     'bridges' => Bridges::find($id)
    // }
    // public function edit($id){ 
    //     'bridges' => Bridges::find($id)
    // }
        
    

    
};

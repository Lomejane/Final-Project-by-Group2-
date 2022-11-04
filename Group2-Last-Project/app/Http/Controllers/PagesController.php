<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(Request $request){
    $filter_province = $request->province;
    $filter_citymun =  $request->citymun;
    $properties = DB::table("properties_tbl")
                ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
                ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
                ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
                ->leftJoin("images", "property_image_id", "=", "images.id")
                // ->where('properties_tbl.property_province_id', '=',
                // $filter_province)
                // ->where('properties_tbl.city_mun_id', '=', $filter_citymun)
                ->orderBy("province_description", "asc")
                ->get();
    // return view('properties.index')->with('properties', $properties);

    // province_tbl query
    $province = DB::table("province_tbl")
    ->orderBy("province_description", "asc")
    ->get();

    //City_Municipality_tbl query
    $citymunicipality = DB::table("city_municipality_tbl")
    ->orderBy("city_mun_description", "asc")
    ->get();

    $data = [
                 'properties' => $properties,
                 'province' => $province,
                 'citymunicipality' =>$citymunicipality
             ];
    return view('pages.home')->with($data);
    }
            // ADDED
            public function search(Request $request){
    $input = $request->all();
    $filter_province = $request->province;
    $filter_citymun =  $request->citymun;
    if ($filter_province && !$filter_citymun) {
        $properties = DB::table("properties_tbl")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
        ->where('properties_tbl.property_province_id', '=', $filter_province)
        // ->where('properties_tbl.city_mun_id', '=', $filter_citymun)
        ->orderBy("province_description", "asc")
        ->get();
        // return view('properties.index')->with('properties', $properties);

        // province_tbl query
        $province = DB::table("province_tbl")
        ->where('province_id', '=', $filter_province)
        ->orderBy("province_description", "asc")
        ->get();

        //City_Municipality_tbl query
        $citymunicipality = DB::table("city_municipality_tbl")
        ->where('province_id', '=', $filter_province)
        ->orderBy("city_mun_description", "asc")
        ->get();
    } elseif ($filter_citymun && !$filter_province) {
        $properties = DB::table("properties_tbl")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
        // ->where('properties_tbl.property_province_id', '=', $filter_province)
        ->where('properties_tbl.city_mun_id', '=', $filter_citymun)
        ->orderBy("province_description", "asc")
        ->get();
        // return view('properties.index')->with('properties', $properties);

        // province_tbl query
        $province = DB::table("province_tbl")
        ->leftJoin("city_municipality_tbl", "city_municipality_tbl.province_id", "=", "province_tbl.province_id")
        ->where('city_mun_id', '=', $filter_citymun)
        ->orderBy("province_description", "asc")
        ->get();

        //City_Municipality_tbl query
        $citymunicipality = DB::table("city_municipality_tbl")
        ->where('province_id', '=', $filter_province)
        ->orderBy("city_mun_description", "asc")
        ->get();
    } else {
        $properties = DB::table("properties_tbl")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
        ->where(
            'properties_tbl.property_province_id',
            '=',
            $filter_province
        )
        ->where('properties_tbl.city_mun_id', '=', $filter_citymun)
        ->orderBy("province_description", "asc")
        ->get();
        // return view('properties.index')->with('properties', $properties);

        // province_tbl query
        $province = DB::table("province_tbl")
        ->orderBy("province_description", "asc")
        ->get();

        //City_Municipality_tbl query
        $citymunicipality = DB::table("city_municipality_tbl")
        ->orderBy("city_mun_description", "asc")
        ->get();
    }
    // $properties = DB::table("properties_tbl")
            //     ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
            //     ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
            //     ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
            //     ->leftJoin("images", "property_image_id", "=", "images.id")
            //     ->where('properties_tbl.property_province_id', '=',
            //     $filter_province)
            //     ->where('properties_tbl.city_mun_id', '=', $filter_citymun)
            //     ->orderBy("province_description", "asc")
            //     ->get();
            //     // return view('properties.index')->with('properties', $properties);

            //     // province_tbl query
            //     $province = DB::table("province_tbl")
            //     ->orderBy("province_description", "asc")
            //     ->get();

            //     //City_Municipality_tbl query
            //     $citymunicipality = DB::table("city_municipality_tbl")
            //     ->orderBy("city_mun_description", "asc")
            //     ->get();

    $data = [
        'properties' => $properties,
        'province' => $province,
        'citymunicipality' =>$citymunicipality
    ];
    return view('pages.home')->with($data);
    
// }


        // return view('pages.home');
       }
    
       public function about(){
        return view('pages.about');
       }
    
       public function modalwindow(){
        return view('pages.modalwindow');
       }
    
       public function properties(){
        return view('pages.properties');
       }
    
       public function contact(){
        return view('pages.contact');
       }
       public function pricing(){
        return view('pages.pricing');
       }
    
       public function signup(){
        return view('pages.signup');
       }
       public function signin(){
        return view('pages.signin');
       }
       public function agentaccount(){
        return view('Agent.agentaccount');
       }
       public function ownersaccount(){
        return view('Owners.ownersaccount');
       }

    //    Admin
    public function adminsidebar(){
     return view('Admin.adminsidebar');
    }
    
    public function dashboard(){
        return view('Admin.dashbord');
    }
    public function adduser(){
        return view('Admin.adduser');
    }

    public function usermanagement(){
        return view('Admin.usermanagement');
    }
    public function propertylist(){
        return view('Admin.propertylist');
    }
    public function profile(){
        return view('Admin.profile');
    }

    // Agent

    public function agentdashboard(){
        return view('Agent.agentdashboard');
    }

    public function listings(){
        return view('Agent.listings');
    }
    public function agentprofile(){
        return view('Agent.agentprofile');
    }

    // Sign Up 
    public function signupowner(){
        return view('Types of Signup.signupowner');
    }
    public function signupagent(){
        return view('Types of Signup.signupagent');
    }
    public function signupadmin(){
        return view('Types of Signup.signupadmin');
    }

    // Sign In
    public function signinowner(){
        return view('Types of Login.loginowner');
    }
    public function signinagent(){
        return view('Types of Login.loginagent');
    }
    public function signinadmin(){
        return view('Types of Login.loginadmin');
    }
}

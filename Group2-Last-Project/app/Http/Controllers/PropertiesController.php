<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Properties::all();
        // $properties = Properties::all();
        $properties = DB::table("properties_tbl")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
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
        return view('properties.index')->with($data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

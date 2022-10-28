<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
// use App\Models\Properties;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $selectedprov = $request->all();
        $citymun = DB::table("city_municipality_tbl")
        // $province = Province::orderBy("province_description", "asc")
        ->leftJoin("province_tbl", "province_tbl.province_id", "=", "city_municipality_tbl.province_id" )
        ->where("province_descriptioin", "=", $selectedprov)
        // ->orderBy("province_description", "asc")
        ->orderBy("city_mun_description", "asc")
        ->get();
        return view('properties.index')->with('city_mun_description', $citymun);
                 // ->orderBy("province_description", "asc")
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

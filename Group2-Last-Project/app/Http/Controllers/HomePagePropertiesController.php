<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePageproperties;

class HomePagePropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $HomePageProperties = HomePageProperties::orderBy('id','desc')->simplePaginate(1);
        return view('HomePageProperties.index')->with('HomePageProperties', $HomePageProperties);
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
        $singleHomePageProperties = HomePageProperties::find($id);
        return view('HomepageProperties.show')->with('HomePageProperties', $singleHomePageProperties);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $updateHomePageProperties = HomePageProperties::find($id);
        return view('HomePageProperties.edit')->with('HomePageProperties', $updateHomePageProperties);
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
        $updateHomePageProperties = HomePageProperties::find($id);
        $input = $request->all();
        $updateHomePageProperties->update($input);

        return redirect('HomePageProperties.show');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wali;

class datawali extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tambahdatawali');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdatawali');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request,
        [
             'id'=>'required|numeric',
             'nama_wali'=>'required',
             
             ]);



        wali::create($request->all());
        return redirect()->route("home.index");
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
        $find=wali::find($id);
        return view('halamaneditdatawali')->with('data',$find);
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
        $this->validate($request,
        [
             'id'=>'required|numeric',
             'nama_wali'=>'required',
             
             ]);


        wali::find($id)->update($request->all());  //find=where data $id hasil lemparan dari halaman lain
        return redirect()->route("home.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        wali::destroy($id);
        return redirect()->route("home.index");
    }
}

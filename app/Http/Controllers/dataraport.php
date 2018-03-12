<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\raport;
use App\wali;
use App\matkul;
use App\siswa;
class dataraport extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $tampung2=matkul::pluck('nama_matkul','id');
        $tampung3=siswa::pluck('nama_siswa','id');
        return view('tambahdataraport')->with('matkul',$tampung2)->with('siswa',$tampung3);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         raport::create($request->all());
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
        $find=raport::find($id);
        $tampung=matkul::pluck('nama_matkul','id');
        $tampung2=siswa::pluck('nama_siswa','id');
        return view('halamaneditdataraport')->with('data',$find)->with('matkul',$tampung)->with('siswa',$tampung2);
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
        raport::find($id)->update($request->all());  
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
        
        raport::destroy($id);
        return redirect()->route("home.index");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\wali;
class datasiswa extends Controller
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
        $wali = wali::pluck('nama_wali', 'id');
        return view('tambahdatasiswa')->with('wali',$wali);
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
                          'nama_siswa'=>'required|max:255|min:10',
                          'id'=>'required|numeric',
                          'tanggal_lahir'=>'required|date',
                          'idwali'=>'required',

                ]);
        siswa::create($request->all());
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

        
        $find=siswa::find($id);
        $wali = wali::pluck('nama_wali', 'id');
        return view('halamaneditdatasiswa')->with('data',$find)->with('wali',$wali);
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
            'nama_siswa'=>'required|max:255|min:10',
            'id'=>'required|numeric',
            'tanggal_lahir'=>'required|date',
            'idwali'=>'required',
        ]);
        siswa::find($id)->update($request->all());  //find=where data $id hasil lemparan dari halaman lain
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
        siswa::destroy($id);
        return redirect()->route("home.index");
    }
}

<?php

namespace App\Http\Controllers;
use App\siswa;
use App\matkul;
use App\wali;
use App\raport;
use Illuminate\Http\Request;

class hucontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //$tampung=siswa::paginate(3);
        $tampung1=wali::paginate(3);
        $tampung2=matkul::paginate(3);   //dengan pagination max 3 data yang ditampilkan per halaman
        //$tampung3=raport::paginate(3);
        $tampung=siswa::with('wali')->paginate(3);
    //    $tampung3=siswa::with('matkul')->with('matkul')->paginate(3);
       $tampung3=raport::with('siswa')->with('matkul')->paginate(3);
     //$tampung=siswa::all();
    // $tampung1=wali::all();  //mengambil data semua
    // $tampung2=matkul::all();
    // $tampung3=raport::all();
        return view('halamanutama')->with('siswa',$tampung)->with('wali',$tampung1)->with('matkul',$tampung2)->with('raport',$tampung3);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matkul;

class datamatkul extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdatamatkul');
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
             'nama_matkul'=>'required|min:2|max:20',

            ]
            );
        matkul::create($request->all());
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
    
        $find=matkul::find($id);
        return view('halamaneditdatamatkul')->with('data',$find);
    
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
             'nama_matkul'=>'required|min:2|max:10',

            ]
            );
        matkul::find($id)->update($request->all());
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
        
        matkul::destroy($id);
        return redirect()->route("home.index");
    }
}

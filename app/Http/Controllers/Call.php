<?php

namespace App\Http\Controllers;

use App\ModelCall;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Call extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataa = ModelCall::all();
        return view('kontak_pg',compact('dataa'));
    }

    public function index1()
    {
        return view('home_pg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataa = new ModelCall();
        $dataa->nama = $request->nama;
        $dataa->email = $request->email;
        $dataa->nohp = $request->nohp;
        $dataa->alamat = $request->alamat;
        $dataa->save();
        return redirect()->route('call.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $dataa = ModelCall::where('id',$id)->get();

        return view('kontak_edit',compact('dataa'));
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
        $dataa = ModelCall::where('id',$id)->first();
        $dataa->nama = $request->nama;
        $dataa->email = $request->email;
        $dataa->nohp = $request->nohp;
        $dataa->alamat = $request->alamat;
        $dataa->save();
        return redirect()->route('call.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataa = ModelKontak::where('id',$id)->first();
        $dataa->delete();
        return redirect()->route('call.index')->with('alert-success','Data berhasi dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = \App\Profile::all();

        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            $res['status'] = "Success!";
            $res['result'] = $data;
            return response($res);
        }
        else{
            $res['status'] = "Empty!";
            return response($res);
        }
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
        $nama_depan = $request->input('nama_depan');
        $nama_belakang = $request->input('nama_belakang');
        $nik = $request->input('nik');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $domisili = $request->input('domisili');
        $nohp = $request->input('nohp');   

        $data = new \App\Profile();
        $data->nama_depan = $nama_depan;
        $data->nama_belakang = $nama_belakang;
        $data->nik = $nik;
        $data->tempat_lahir = $tempat_lahir;
        $data->tanggal_lahir = $tanggal_lahir;
        $data->domisili = $domisili;
        $data->nohp = $nohp;

        if($data->save()){
            $res['status'] = "Success!";
            $res['result'] = "$data";
            return response($res);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = \App\Profile::where('id',$id)->get();

        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            $res['status'] = "Success!";
            $res['result'] = $data;
            return response($res);
        }
        else{
            $res['status'] = "Failed!";
            return response($res);
        }
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
        $domisili = $request->input('domisili');
        $nohp = $request->input('nohp');

        $data = \App\Profile::where('id',$id)->first();
        $data->domisili = $domisili;
        $data->nohp = $nohp;

        if($data->save()){
            $res['status'] = "Success!";
            $res['result'] = "$data";
            return response($res);
        }
        else{
            $res['status'] = "Failed!";
            return response($res);
        }
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
        $data = \App\Profile::where('id',$id)->first();

        if($data->delete()){
            $res['status'] = "Success!";
            $res['result'] = "$data";
            return response($res);
        }
        else{
            $res['status'] = "Failed!";
            return response($res);
        }
        }
}

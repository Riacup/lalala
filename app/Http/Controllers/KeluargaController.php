<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Keluarga::all();

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
        $user_id = $request->input('user_id');
        $kode_id = $request->input('kode_id');
        $hubungan = $request->input('hubungan');
        $nama_lengkap = $request->input('nama_lengkap');
        $nik = $request->input('nik');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $tanggal_kematian = $request->input('tanggal_kematian');
        $lokasi_pemakaman = $request->input('lokasi_pemakaman');
        $foto = Storage::disk('public')->putFile('keluarga',$request->file('foto'), 'public');   

        $data = new \App\Keluarga();
        $data->user_id = $user_id;
        $data->kode_id = $kode_id;
        $data->hubungan = $hubungan;
        $data->nik = $nik;
        $data->nama_lengkap = $nama_lengkap;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->tempat_lahir = $tempat_lahir;
        $data->tanggal_lahir = $tanggal_lahir;
        $data->tanggal_kematian = $tanggal_kematian;
        $data->lokasi_pemakaman = $lokasi_pemakaman;
        $data->foto = $foto;

        if($data->save()){
            $res['status'] = "Success!";
            $res['result'] = $data;
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
        $data = \App\Keluarga::where('id',$id)->get();

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Album::all();

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
        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'photo' => 'mimes:pdf,jpeg,jpg,png,gif|required|max:10000',
          ])->validate();

        $kategori_id = $request->input('kategori_id');
        $user_id = $request->input('user_id');
        $name = $request->input('name');
        $type = $request->input('type');
        $photo = Storage::disk('public')->putFile('album',$request->file('photo'), 'public');

        $data = new \App\Album();
        $data->kategori_id = $kategori_id;
        $data->user_id = $user_id;
        $data->name = $name;
        $data->type = $type;
        $data->photo = $photo;

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
        $data = \App\Album::where('id',$id)->get();

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
        $nama = $request->input('nama');

        $data = \App\Album::where('id',$id)->first();
        $data->nama = $nama;

        if($data->save()){
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Album::where('id',$id)->first();

        if($data->delete()){
            $res['status'] = "Success!";
            $res['result'] = $data;
            return response($res);
        }
        else{
            $res['status'] = "Failed!";
            return response($res);
        }
    }
}

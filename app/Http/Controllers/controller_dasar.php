<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class controller_dasar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.index')->with([
            'crud' => crud::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'departemen' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'tgl_lahir' => 'required|date',
            'darah' => 'required',

        ]);

        $crud = new crud;
        $crud->nis = $request->nis;
        $crud->nama = $request->nama;
        $crud->jurusan = $request->jurusan;
        $crud->departemen = $request->departemen;
        $crud->alamat = $request->alamat;
        $crud->tempat_lahir = $request->tempat_lahir;
        $crud->agama = $request->agama;
        $crud->status = $request->status;
        $crud->tgl_lahir = $request->tgl_lahir;
        $crud->darah = $request->darah; 
        $crud->save();

        return to_route('crud.index')->with('Selamat,Data Telah Disimpan');
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
        return view('crud.edit')->with([
            'crud' => crud::find($id)
        ]);
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
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'departemen' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'tgl_lahir' => 'required|date',
            'darah' => 'required',
            'Kelamin' => 'required',



        ]);

        $crud = crud::find($id);
        $crud->nis = $request->nis;
        $crud->nama = $request->nama;
        $crud->jurusan = $request->jurusan;
        $crud->departemen = $request->departemen;
        $crud->alamat = $request->alamat;
        $crud->tempat_lahir = $request->tempat_lahir;
        $crud->agama = $request->agama;
        $crud->status = $request->status;
        $crud->tgl_lahir = $request->tgl_lahir;
        $crud->darah = $request->darah; 
        $crud->kelamin = $request->kelamin; 


        $crud->save();

        return to_route('crud.index')->with('Selamat,Data Telah Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = crud::find($id);
        $crud->delete();

        return back()->with('selamat data telah dihapus');
    }
}

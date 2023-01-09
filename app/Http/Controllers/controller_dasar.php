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
            'nis' => 'required|min:1|max:9',
            'nama' => 'required|min:2|max:225',
            'jurusan' => 'required|min:2|max:12',
        ]);

        $path = $request->file('image')->store('public/images');
        $crud = new crud;
        $crud->nis = $request->nis;
        $crud->nama = $request->nama;
        $crud->jurusan = $request->jurusan;
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
            'nis' => 'required|min:1|max:9',
            'nama' => 'required|min:2|max:225',
            'jurusan' => 'required|min:2|max:12',
        ]);

        $crud = crud::find($id);
        $crud->nis = $request->nis;
        $crud->nama = $request->nama;
        $crud->jurusan = $request->jurusan;
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

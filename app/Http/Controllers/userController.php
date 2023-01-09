<?php

namespace App\Http\Controllers;


use App\Models\crud;
use Illuminate\Http\Request;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index')->with([
            'crud' => crud::all(),
        ]);
    }
}

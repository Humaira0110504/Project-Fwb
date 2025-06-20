<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
{
    return view('index');
}
  public function koleksi1()
{
    return view('koleksi');
}

    //
}


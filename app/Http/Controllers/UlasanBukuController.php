<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanBukuController extends Controller
{
    public function index() {
        return view('Ulasanbuku');
    }
}

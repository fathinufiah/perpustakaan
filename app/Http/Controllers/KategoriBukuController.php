<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBukuController extends Controller
{
    public function index() {
        return view('Kategoribuku');
    }
}

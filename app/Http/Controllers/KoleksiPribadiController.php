<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoneksiPribadiController extends Controller
{
    public function index() {
        return view('Koleksipribadi');
    }
}

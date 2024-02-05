<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrecosController extends Controller
{
    public function index() {
        return view('site.precos');
    }
}

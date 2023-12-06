<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentistasController extends Controller
{
    public function index(){
        return view('site.dentistas');
    }
}

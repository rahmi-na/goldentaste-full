<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DalgonaController extends Controller
{
    public function index() {
        return view ('dalgona');
    }   
}

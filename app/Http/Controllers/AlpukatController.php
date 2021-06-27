<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlpukatController extends Controller
{
    public function index() {
        return view ('alpukat');
    }
}

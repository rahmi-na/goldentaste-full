<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CirengController extends Controller
{
    public function index() {
        return view ('cireng');
    }
}

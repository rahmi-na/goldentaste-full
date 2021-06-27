<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaljuController extends Controller
{
    public function index() {
        return view ('salju');
    }
}

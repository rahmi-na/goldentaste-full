<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OndeController extends Controller
{
    public function index() {
        return view ('ondeOndePelangi');
    }
}

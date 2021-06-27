<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function index() {
        return view ('strawberry');
    }
}

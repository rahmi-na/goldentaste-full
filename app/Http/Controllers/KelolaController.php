<?php

namespace App\Http\Controllers;
use App\Models\Admins;
use Illuminate\Http\Request;

class KelolaController extends Controller
{
    public function index(){
        return view('admin.kelola.index');
    }
}
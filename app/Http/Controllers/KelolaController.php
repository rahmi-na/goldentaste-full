<?php

namespace App\Http\Controllers;
use App\Models\Admins;
use Illuminate\Http\Request;

class KelolaController extends Controller
{
    public function index(){
        return view('admin.kelola.index');
    }

    public function api(){
        return response([
            'data'=>Admins::all(),
            'message'=>'Retrived Successfuly'
        ]);
    }
}
// {
//     public function index(){
//         // $admin = Admins::all();
//         // return view('admin.kelola.index', compact('admin'));
//         return view('admin.kelola.index');
//     
// }
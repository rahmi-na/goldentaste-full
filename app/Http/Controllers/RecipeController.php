<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class RecipeController extends Controller
{
    public function index(Posts $posts) {
        $data = $posts->orderBy('created_at', 'asc')->get();
        return view ('recipe', compact('data'));
    }
}

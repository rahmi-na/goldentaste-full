<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view ('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'chef' => 'required',
            'categories_id' => 'required',
            'person' => 'required',
            'cook_time' => 'required',
            'description' => 'required',
            'photo' => 'required'
        ]);

        $photo = $request->photo;
        $new_photo = time().$photo->getClientOriginalName();

        $posts = Posts::create([
            'title' => $request->title,
            'chef' => $request->chef,
            'categories_id' => $request->categories_id,
            'person' => $request->person,
            'cook_time' => $request->cook_time,
            'description' => $request->description,
            'photo' => 'public/uploads/posts/'.$new_photo
        ]);

        $photo->move('public/uploads/posts/', $new_photo);
        return redirect()->back()->with('success', 'Data berhasil disimpan disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::all();
        $posts = Posts::find($id);
        return view('posts.edit', compact('posts', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Posts::find($id);
        $this->validate($request, [
            'title' => 'required',
            'chef' => 'required',
            'categories_id' => 'required',
            'person' => 'required',
            'cook_time' => 'required',
            'description' => 'required'
        ]);

        if($request->has('photo')) {
            $photo = $request->photo;
            $new_photo = time().$photo->getClientOriginalName();
            $photo->move('public/uploads/posts/', $new_photo);

            $posts = [
                'title' => $request->title,
                'chef' => $request->chef,
                'categories_id' => $request->categories_id,
                'person' => $request->person,
                'cook_time' => $request->cook_time,
                'description' => $request->description,
                'photo' => 'public/uploads/posts/'.$new_photo
            ];
        } else {
            $posts = [
                'title' => $request->title,
                'chef' => $request->chef,
                'categories_id' => $request->categories_id,
                'person' => $request->person,
                'cook_time' => $request->cook_time,
                'description' => $request->description,
            ];
        }
        
        Posts::whereId($id)->update($posts);
        return redirect()->route('posts.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Posts::find($id)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}

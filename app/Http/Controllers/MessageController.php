<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Messages::all();
        return view ('messages.index', compact('messages'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        Messages::create($request->all());
        return redirect()->back();
    }

    // Tampilkan ke data base
    public function destroy($id){
        $messages = Messages::find($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function create(){
        return view('messages.create');
    }

    public function edit($id){
        $edit = Messages::find($id);
        return view('messages.edit', compact('edit'));
    }

    public function update($id, Request $request){
        $edit = Messages::find($id);
        if($request->password == null){
            $edit->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message,
            ]);
        }else{
            $edit->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message,
            ]);
        }
        return redirect()->route('messages.index')->with('success', 'Data berhasil diubah');
    }
}

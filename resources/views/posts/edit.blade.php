@extends('layouts.master')
@section('title', 'Edit')
@section('content')

@if(Session::has('success'))
<div style="padding: 2%">
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
</div>
@endif

<form action="{{ route('posts.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
@method('PUT')
@csrf
    <div>
        <div class="form-group" style="padding: 2%">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ $posts->title }}" required >
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Chef</label>
            <input type="text" class="form-control" name="chef" value="{{ $posts->chef }}" required >
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Category</label>
            <select class="form-control" name="categories_id" value="{{ $posts->categories_id }}">
                <option value="" holder>Select Category</option>
                @foreach($categories as $result)
                <option value="{{ $result->id }}" 
                @if ($posts->categories_id == $result->id)
                    selected
                @endif    
                >{{ $result->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Person</label>
            <input type="text" class="form-control" name="person" value="{{ $posts->person }}" required >
        </div>        
        <div class="form-group" style="padding: 2%">
            <label>Cook Time</label>
            <input type="text" class="form-control" name="cook_time" value="{{ $posts->cook_time }}" required >
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $posts->description }}</textarea>
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Thumbnail</label>
            <input type="file" name="photo" class="form-control" value="{{ $posts->photo }}">
        </div>
        <div class="pull-right" style="padding: 2%">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </div>
</form>

@endsection
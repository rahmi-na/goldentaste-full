@extends('layouts.master')
@section('title', 'Create')
@section('content')

@if(Session::has('success'))
<div style="padding: 2%">
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
</div>
@endif

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div>
        <div class="form-group" style="padding: 2%">
            <label>Title</label>
            <input type="text" class="form-control" name="title" required >
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Chef</label>
            <input type="text" class="form-control" name="chef" required >
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Category</label>
            <select class="form-control" name="categories_id">
                <option value="" holder>Select Category</option>
                @foreach($categories as $result)
                <option value="{{ $result->id }}">{{ $result->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Person</label>
            <input type="text" class="form-control" name="person" required >
        </div>        
        <div class="form-group" style="padding: 2%">
            <label>Cook Time</label>
            <input type="text" class="form-control" name="cook_time" required >
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Description</label>
            <!-- <input type="text" class="form-control" name="description" required > -->
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group" style="padding: 2%">
            <label>Thumbnail</label>
            <input type="file" name="photo" class="form-control">
            <!-- <input type="text" class="form-control" name="photo" required > -->
        </div>
        <div class="pull-right" style="padding: 2%">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </div>

</form>

@endsection
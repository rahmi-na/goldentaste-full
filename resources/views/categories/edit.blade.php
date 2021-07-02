@extends('layouts.master')
@section('title', 'Edit')
@section('content')

<form action="{{ route('categories.update', $categories->id) }}" method="POST">
@method('PUT')
@csrf
    <div>
        <div class="form-group" style="padding: 2%">
            <label> Edit Category</label>
            <input type="text" class="form-control" name="name" value="{{ $categories->name }}" required >
        </div>
        <!-- <div class="form-group" style="padding: 2%"> -->
            <!-- <a class="btn btn-primary" href="{{ route('messages.index') }}"> Back</a> -->
            <!-- <button class="btn btn-primary btn-block" href="{{ route('messages.index') }}">Simpan</button>
        </div> -->
        <div class="pull-right" style="padding: 2%">
            <!-- <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a> -->
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </div>
</form>

@endsection
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

<form action="{{ route('categories.store') }}" method="POST">
@csrf
    <div>
        <div class="form-group" style="padding: 2%">
            <label>Category</label>
            <input type="text" class="form-control" name="name" required >
        </div>
        <!-- <div class="form-group" style="padding: 2%"> -->
            <!-- <a class="btn btn-primary" href="{{ route('messages.index') }}"> Back</a> -->
            <!-- <button class="btn btn-primary btn-block" href="{{ route('messages.index') }}">Simpan</button>
        </div> -->
        <div class="pull-right" style="padding: 2%">
            <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </div>

</form>

@endsection
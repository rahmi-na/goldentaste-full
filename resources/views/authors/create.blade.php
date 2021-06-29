@extends('layouts.master')
@section('title', 'Create')
@section('content')

<div class="container">
    <form action="{{route('authors.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="" required>
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" id="" required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" id="" required>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('authors.index') }}"> Back</a>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection
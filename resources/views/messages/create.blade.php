@extends('layouts.master')
@section('title', 'Create')
@section('content')

<div class="container">
    <form action="{{route('messages.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" id="" required>
        </div>
        <div class="form-group">
            <label for="">Message</label>
            <input class="form-control" type="text" name="message" id="" required>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('messages.index') }}"> Back</a>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection
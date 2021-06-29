@extends('layouts.master')
@section('title', 'Edit')
@section('content')

<div class="container">
    <form action="{{route('messages.update', [$edit->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="" value="{{$edit->name}}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" id="" value="{{$edit->email}}">
        </div>
        <div class="form-group">
            <label for="">Message</label>
            <input class="form-control" type="text" name="problem" id="" value="{{$edit->problem}}">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('messages.index') }}"> Back</a>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection
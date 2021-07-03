@extends('layouts.master')
@section('title', 'Messages')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{route('messages.create')}}" class="btn btn-success md-0">Tambah data</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('messages.index') }}">Message</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

@if(Session::has('success'))
<div style="padding: 2%">
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
</div>
@endif

<div class="container-table" style="padding: 2%">
    <table class="table">
        <div class="text-center">
            <h1 class="text-bold">Message</h1>
        </div>
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($messages as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->message}}</td>
                <td>
                    <form method="POST" action="{{ route('messages.destroy', [$data->id]) }}">
                        @method('DELETE')
                        @csrf
                        <a href="{{route('messages.edit', $data->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
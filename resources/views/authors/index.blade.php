@extends('layouts.master')
@section('title', 'Authors')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{route('authors.create')}}" class="btn btn-success md-0">Tambah data</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('authors.index') }}">Author</a></li>
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
            <h2 class="text-bold">LIST ADMIN</h2>
        </div>
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($admin as $data => $hasil)
            <tr>
                <!-- <td>{{$loop->iteration}}</td> -->
                <td>{{ $data + $admin->firstitem() }}</td>
                <td>{{$hasil->name}}</td>
                <td>{{$hasil->username}}</td>
                <td>{{$hasil->password}}</td>
                <td>
                    <form method="POST" action="{{ route('authors.destroy', [$hasil->id]) }}">
                        @method('DELETE')
                        @csrf
                        <a href="{{route('authors.edit', $hasil->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- /.content-header -->
<!-- <div class="container mt-5">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
</div> -->
{{ $admin->links() }}

@endsection
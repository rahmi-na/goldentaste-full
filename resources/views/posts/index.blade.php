@extends('layouts.master')
@section('title', 'Recipe')
@section('content')

<!-- <a href="" class="btn btn-info btn-sm">Tambah Kategori</a>
<br> -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{route('posts.create')}}" class="btn btn-success md-0">Tambah data</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Recipe</a></li>
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
            <h1 class="text-bold">Category</h1>
        </div>
    <!-- <table class="table table-striped table-hover table-sm table-bordered"> -->
            <thead>
                <th>No</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Chef</th>
                <th>Category</th>
                <th>Person</th>
                <th>CookTime</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($posts as $result)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset($result->photo) }}" class="img-fluid" style="width: 100px"></td>
                    <td>{{ $result->title }}</td>
                    <td>{{ $result->chef }}</td>
                    <td>{{ $result->categories->name }}</td>
                    <td>{{ $result->person }}</td>
                    <td>{{ $result->cook_time }}</td>
                    <td>{{ $result->description }}</td>
                    <td>
                        <!-- <a href="" class="btn btn-warning btn-sm">Edit</a>
                        <form method="POST" action="">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form> -->

                    
                        <form method="POST" action="{{ route('posts.destroy', $result->id) }}">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('posts.edit', $result->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
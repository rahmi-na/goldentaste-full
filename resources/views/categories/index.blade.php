@extends('layouts.master')
@section('title', 'Category')
@section('content')

<!-- <a href="" class="btn btn-info btn-sm">Tambah Kategori</a>
<br> -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{route('categories.create')}}" class="btn btn-success md-0">Tambah data</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Category</a></li>
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
                <th>Category</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($categories as $result)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $result->name }}</td>
                    <td>
                        <!-- <a href="" class="btn btn-warning btn-sm">Edit</a>
                        <form method="POST" action="">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form> -->

                    
                        <form method="POST" action="{{ route('categories.destroy', $result->id) }}">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('categories.edit', $result->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
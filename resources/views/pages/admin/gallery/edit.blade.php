@extends('layouts/admin')

@section('title', "Edit Travel Package's Gallery ")

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Galeri Paket Travel</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{ route('gallery.update', $id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="travel_packages_id">Travel Package</label>
                    <select name="travel_packages_id" id="travel_packages_id" class="form-control">
                        <option value="{{ $gallery->travel_packages_id }}">{{ $gallery->travel_package->title }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Travel Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Save
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection

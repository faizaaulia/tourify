@extends('layouts/admin')

@section('title', 'Add Travel Packages')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('travel-package.index') }}">Travel Package</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add</li>
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
            <form action="{{ route('travel-package.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" placeholder="Location" value="{{ old('location') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" id="about" cols="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="event">Event</label>
                    <input type="text" name="event" id="event" placeholder="Event" value="{{ old('event') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" name="language" id="language" placeholder="Language" value="{{ old('language') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" name="foods" id="foods" placeholder="Foods" value="{{ old('foods') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" name="departure_date" id="departure_date" placeholder="Departure Date" value="{{ old('departure_date') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" id="duration" placeholder="Duration" value="{{ old('duration') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" placeholder="Type" value="{{ old('type') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" placeholder="Price" value="{{ old('price') }}" class="form-control">
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

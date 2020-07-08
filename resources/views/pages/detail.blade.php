@extends('layouts.app')

@section('title', $item->title)

@section('content')
<main>
    <section class="detail-header"></section>
    <section class="detail-content">
        <div class="container">
            <div class="row ">
                <div class="col p-0 pl-3 pl-lg-0">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item " aria-current="page ">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active " aria-current="page ">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0 detail-wisata">
                    <div class="card card-detail">
                        <h2>{{ $item->title }}</h2>
                        <p>{{ $item->location }}</p>
                        @if ($item->galleries->count())
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ Storage::url($item->galleries->first()->image) }}" alt="" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                                    <div class="xzoom-thumbs">
                                        @foreach ($item->galleries as $gallery)
                                            <a href="{{ Storage::url($gallery->image) }}">
                                                <img class="xzoom-gallery" src="{{ Storage::url($gallery->image) }}" xpreview="{{ Storage::url($gallery->image) }}" width="120px">
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="about">
                            <h2>Tentang Wisata</h2>
                            <p>{{ $item->about }}</p>
                        </div>
                        <div class="row additional">
                            <div class="col-md-4 border-right">
                                <div class="info">
                                    <img src="{{ url('assets/images/ic_event.png') }}" alt="" class="mr-3">
                                    <div class="info">
                                        <p>Featured Event</p>
                                        <p class="info-desc">{{ $item->event }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-right">
                                <div class="info">
                                    <img src="{{ url('assets/images/ic_language.png') }}" alt="" class="mr-3">
                                    <div class="info">
                                        <p>Language</p>
                                        <p class="info-desc">{{ $item->language }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <img src="{{ url('assets/images/ic_food.png') }}" alt="" class="mr-3">
                                    <div class="info">
                                        <p>Foods</p>
                                        <p class="info-desc">{{ $item->foods }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pl-3 detail-cust">
                    <div class="card card-cust">
                        <h2>Members are going</h2>
                        <div class="members py-3">
                            <img src="{{ url('assets/images/members/member-1.png') }}" alt="" class="mr-2">
                            <img src="{{ url('assets/images/members/member-2.png') }}" alt="" class="mr-2">
                            <img src="{{ url('assets/images/members/member-3.png') }}" alt="" class="mr-2">
                            <img src="{{ url('assets/images/members/member-4.png') }}" alt="" class="mr-2">
                            <div class="plus mr-2 rounded-circle">
                                <p class="ml-2 mt-2">+ 8</p>
                            </div>
                        </div>
                        <hr class="mb-3">
                        <h2 class="mb-3">Trip Information</h2>
                        <table class="trip-info mb-4">
                            <tr>
                                <td class="info-title">Date of Departure</td>
                                <td class="info-desc">{{ \Carbon\Carbon::create($item->departure_date)->format('F n, Y') }}</td>
                            </tr>
                            <tr>
                                <td class="info-title">Duration</td>
                                <td class="info-desc">{{ $item->duration }}</td>
                            </tr>
                            <tr>
                                <td class="info-title">Type</td>
                                <td class="info-desc">{{ $item->type }}</td>
                            </tr>
                            <tr>
                                <td class="info-title">Price</td>
                                <td class="info-desc">${{ $item->price }} / person</td>
                            </tr>
                        </table>
                        <div class="join text-center">
                            @auth
                                <form action="{{ route('checkout-process', $item->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-block btn-join text-white">Join Now</button>
                                </form>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}" class="btn btn-block btn-join">Login or Register to Join</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ url('assets/libraries/xzoom/xzoom.css') }}">
@endpush

@push('scripts')
<script src="{{ url('assets/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });

</script>
@endpush

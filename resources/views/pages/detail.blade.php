@extends('layouts.app')

@section('title', 'Detail')

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
                        <h2>Bromo, Malang</h2>
                        <p>Indonesia</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ url('assets/images/gallery/bromo-1.png') }}" alt="" class="xzoom" id="xzoom-default" xoriginal="{{ url('assets/images/gallery/bromo-1.png') }}">
                                <div class="xzoom-thumbs">
                                    <a href="{{ url('assets/images/gallery/bromo-1.png') }}">
                                        <img class="xzoom-gallery" src="{{ url('assets/images/gallery/bromo-1.png') }}" xpreview="{{ url('assets/images/gallery/bromo-1.png') }}" width="120px">
                                    </a>
                                    <a href="{{ url('assets/images/gallery/bromo-2.png') }}">
                                        <img class="xzoom-gallery" src="{{ url('assets/images/gallery/bromo-2.png') }}" xpreview="{{ url('assets/images/gallery/bromo-2.png') }}" width="120px">
                                    </a>
                                    <a href="{{ url('assets/images/gallery/bromo-3.png') }}">
                                        <img class="xzoom-gallery" src="{{ url('assets/images/gallery/bromo-3.png') }}" xpreview="{{ url('assets/images/gallery/bromo-3.png') }}" width="120px">
                                    </a>
                                    <a href="{{ url('assets/images/gallery/bromo-4.png') }}">
                                        <img class="xzoom-gallery" src="{{ url('assets/images/gallery/bromo-4.png') }}" xpreview="{{ url('assets/images/gallery/bromo-4.png') }}" width="120px">
                                    </a>
                                    <a href="{{ url('assets/images/gallery/bromo-5.png') }}">
                                        <img class="xzoom-gallery" src="{{ url('assets/images/gallery/bromo-5.png') }}" xpreview="{{ url('assets/images/gallery/bromo-5.png') }}" width="120px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="about">
                            <h2>Tentang Wisata</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate nibh sed semper bibendum. Nulla pellentesque lectus id vehicula ornare. Aliquam erat volutpat. Nam nulla magna, imperdiet et bibendum quis, ultrices eunisl. Phasellus molestie ante sit amet nunc iaculis, at lobortis nulla dignissim.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate nibh sed semper bibendum. Nulla pellentesque lectus id vehicula ornare. Aliquam erat volutpat. Nam nulla magna, imperdiet et bibendum quis, ultrices eunisl.
                            </p>
                        </div>
                        <div class="row additional">
                            <div class="col-md-4 border-right">
                                <div class="info">
                                    <img src="{{ url('assets/images/ic_event.png') }}" alt="" class="mr-3">
                                    <div class="info">
                                        <p>Featured Event</p>
                                        <p class="info-desc">Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-right">
                                <div class="info">
                                    <img src="{{ url('assets/images/ic_language.png') }}" alt="" class="mr-3">
                                    <div class="info">
                                        <p>Language</p>
                                        <p class="info-desc">Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <img src="{{ url('assets/images/ic_food.png') }}" alt="" class="mr-3">
                                    <div class="info">
                                        <p>Foods</p>
                                        <p class="info-desc">Local Foods</p>
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
                                <td class="info-desc">5 Jun, 2020</td>
                            </tr>
                            <tr>
                                <td class="info-title">Duration</td>
                                <td class="info-desc">4D 3N</td>
                            </tr>
                            <tr>
                                <td class="info-title">Type</td>
                                <td class="info-desc">Open Trip</td>
                            </tr>
                            <tr>
                                <td class="info-title">Price</td>
                                <td class="info-desc">$80 / person</td>
                            </tr>
                        </table>
                        <div class="join text-center">
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-join">Join Now</a>
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

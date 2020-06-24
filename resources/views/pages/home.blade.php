@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <header class="text-center">
        <h1>Inspiration for Your <br> Next Vacation</h1>
        <p class="mt-3">Offer the perfect variety of experiences to <br> satisfy anyone's desire for adventure</p>
        <a href="#" class="btn btn-cta px-4 mt-4">Get Started</a>
    </header>

    <main>
        <div class="container">
            <section class="stats row justify-content-center" id="stats">
                <div class="col-xs-12 col-sm-6 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 stats-detail">
                    <h2>25</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <section class="popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center popular-heading">
                        <h2>Popular Destinations</h2>
                        <p>Discover somewhere <br> that you never visit before</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-item" id="popular-item">
            <div class="container">
                <div class="popular-thumbs row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-item text-center d-flex flex-column" style="background-image: url('assets/images/wisata/wisata-1.png');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-loc">DERATAN, BALI</div>
                            <div class="travel-btn mt-auto">
                                <a href="#" class="btn btn-travel px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-item text-center d-flex flex-column" style="background-image: url('assets/images/wisata/wisata-2.png');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-loc">BROMO, MALANG</div>
                            <div class="travel-btn mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-item text-center d-flex flex-column" style="background-image: url('assets/images/wisata/wisata-3.png');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-loc">NUSA PENIDA</div>
                            <div class="travel-btn mt-auto">
                                <a href="#" class="btn btn-travel px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-item text-center d-flex flex-column" style="background-image: url('assets/images/wisata/wisata-4.png');">
                            <div class="travel-country">TURKEY</div>
                            <div class="travel-loc">KAPADOKYA</div>
                            <div class="travel-btn mt-auto">
                                <a href="#" class="btn btn-travel px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="network" id="network">
            <div class="container">
                <div class="row">
                    <div class="network-heading col-12 col-md-4">
                        <h2>Our Network</h2>
                        <p>Companies that trusted us <br> more than just a trip</p>
                    </div>
                    <div class="network-items d-flex flex-wrap text-center px-0 col-md-8 ml-auto">
                        <div class="network-item col-6 col-lg-3">
                            <img src="{{ 'assets/images/partners/disney.png' }}" alt="">
                        </div>
                        <div class="network-item col-6 col-lg-3">
                            <img src="{{ 'assets/images/partners/ana.png' }}" alt="">
                        </div>
                        <div class="network-item col-6 col-lg-3">
                            <img src="{{ 'assets/images/partners/shangri-la.png' }}" alt="">
                        </div>
                        <div class="network-item col-6 col-lg-3">
                            <img src="{{ 'assets/images/partners/visa.png' }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimoni-heading" id="testimoni-heading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Experience we were <br> giving are the best one</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimoni-content" id="testimoni-content">
            <div class="container">
                <div class="popular-testi row justify-content-center">
                    <div class="col-12 col-sm-6 col-lg-4 mb-5">
                        <div class="card card-testi text-center">
                            <div class="testi-user">
                                <img src="{{ 'assets/images/avatars/testi-1.png' }}" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Faiza Aulia</h3>
                                <p class="testi-content">" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. " </p>
                                <hr>
                                <p class="testi-trip mt-2">Trip to Bromo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-5">
                        <div class="card card-testi text-center">
                            <div class="testi-user">
                                <img src="{{ 'assets/images/avatars/testi-2.png' }}" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <p class="testi-content">" Lorem ipsum dolor, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. " </p>
                                <hr>
                                <p class="testi-trip mt-2">Trip to Bromo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-5">
                        <div class="card card-testi text-center">
                            <div class="testi-user">
                                <img src="{{ 'assets/images/avatars/testi-3.png' }}" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Mary Jane</h3>
                                <p class="testi-content">" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. " </p>
                                <hr>
                                <p class="testi-trip mt-2">Trip to Bromo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around btn-testi mx-auto">
                    <a href="#" class="btn btn-help px-4">I Need Help</a>
                    <a href="#" class="btn btn-get px-4">Get Started</a>
                </div>
            </div>
        </section>
    </main>
@endsection
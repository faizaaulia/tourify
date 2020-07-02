@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
<main>
    <div class="success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('assets/images/ic_mail_success.png') }}" alt="">
            <h2 class="mb-2">Yeay, payment success!</h2>
            <h5>We've sent you an email for trip instruction, <br> please read it as well!</h5>
            <a href="{{ url('/') }}" class="btn btn-home px-3">Back to Home</a>
        </div>
    </div>
</main>
@endsection
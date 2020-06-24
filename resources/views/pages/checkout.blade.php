@extends('layouts.checkout')

@section('title', 'Chekcout')

@section('content')
<main>
    <!-- breadcrumb-start -->
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
                            <li class="breadcrumb-item " aria-current="page ">
                                Details
                            </li>
                            <li class="breadcrumb-item active " aria-current="page ">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0 detail-wisata">
                    <div class="card card-detail">
                        <h2>Who is Going?</h2>
                        <p>Trip to Bromo, Malang, Indonesia</p>
                        <div class="members-going">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td scope="col">Picture</td>
                                        <td scope="col">Name</td>
                                        <td scope="col">Natioanlity</td>
                                        <td scope="col">VISA</td>
                                        <td scope="col">Passport</td>
                                        <td scope="col"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('assets/images/members/member-1.png') }}" alt="" class="avatar rounded-circle">
                                        </td>
                                        <td>Shayna</td>
                                        <td>CN</td>
                                        <td>N/A</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="#"><img src="{{ url('assets/images/ic_remove.png') }}" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('assets/images/members/member-4.png') }}" alt="" class="avatar rounded-circle">
                                        </td>
                                        <td>Faiza Aulia</td>
                                        <td>SG</td>
                                        <td>30 days</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="#"><img src="{{ url('assets/images/ic_remove.png') }}" alt=""></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="add-member mt-3">
                            <h3 class="m-0">Add Member</h3>
                            <form action="#" class="form-inline justify-content-lg-between">
                                <label for="username" class="sr-only">Username</label>
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control mr-2 mb-2">
                                <label for="services" class="sr-only">Services</label>
                                <select name="services" id="services" class="custom-select mr-2 mb-2">
                                    <option value="VISA" selected>VISA</option>
                                    <option value="Passport">Passport</option>
                                </select>
                                <label for="doepassport" class="sr-only">DOE Passport</label>
                                <div class="input-group mr-2 mb-2">
                                    <input type="text" name="doepassport" id="doepassport" class="form-control datepicker" placeholder="DOE Passport">
                                </div>
                                <button type="submit" class="btn btn-add mb-2">Add Now</button>
                            </form>
                        </div>
                        <div class="disclaimer">
                            <h6>Note</h6>
                            <span>You're only able to invite member that has registered in Tourify.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pl-3 detail-cust">
                    <div class="card card-cust">
                        <h2 class="mb-3">Checkout Information</h2>
                        <table class="trip-info mb-4">
                            <tr>
                                <td class="info-title">Members</td>
                                <td class="info-desc">2 person</td>
                            </tr>
                            <tr>
                                <td class="info-title">Additional VISA</td>
                                <td class="info-desc">$190</td>
                            </tr>
                            <tr>
                                <td class="info-title">Trip Price</td>
                                <td class="info-desc">$80 / person</td>
                            </tr>
                            <tr>
                                <td class="info-title">Total Price</td>
                                <td class="info-desc">$350</td>
                            </tr>
                            <tr>
                                <td class="info-title">Total Pay <span class="ket">(+ unique code)</span></td>
                                <td class="info-desc pay">$350,<span class="ucode">32</span></td>
                            </tr>
                        </table>
                        <hr class="mb-4">
                        <h2 class="mb-2">Payment Instructions</h2>
                        <span class="instruction mb-3">Please complete the payment before you continue the trip</span>
                        <div class="bank-info d-flex flex-row mb-3">
                            <img src="{{ url('assets/images/ic_bank.png') }}" alt="" class="my-auto">
                            <div class="bank-desc">
                                <p>PT Tourify ID</p>
                                <p>Bank Central Asia</p>
                                <p>3819 2399 1405</p>
                            </div>
                        </div>
                        <div class="bank-info d-flex flex-row mb-4">
                            <img src="{{ url('assets/images/ic_bank.png') }}" alt="" class="my-auto">
                            <div class="bank-desc">
                                <p>PT Tourify ID</p>
                                <p>Bank Mandiri</p>
                                <p>9481 4920 2444</p>
                            </div>
                        </div>
                        <div class="join text-center">
                            <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join">I Have Paid</a>
                        </div>
                    </div>
                    <div class="cancel-book text-center">
                        <a href="#" class="btn btn-link btn-cancel">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->
</main>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ url('assets/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('scripts')
<script src="{{ url('assets/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('assets/images/ic_date.png') }}" alt="">'
            }
        })
    })
</script>
@endpush
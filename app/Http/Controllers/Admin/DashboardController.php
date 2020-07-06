<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TravelPackage;

class DashboardController extends Controller
{
    public function index()
    {
        $travel_count = TravelPackage::all()->count();

        return view('pages.admin.dashboard', ['travel_count' => $travel_count]);
    }
}

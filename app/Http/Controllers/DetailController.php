<?php

namespace App\Http\Controllers;

use App\TravelPackage;

class DetailController extends Controller
{
    public function index($slug) {
        $item = TravelPackage::with('galleries')->where('slug', $slug)->firstOrFail();

        return view('pages.detail', compact('item'));
    }
}

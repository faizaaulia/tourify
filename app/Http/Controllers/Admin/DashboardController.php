<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use App\TravelPackage;

class DashboardController extends Controller
{
    public function index()
    {
        $travel = TravelPackage::count();
        $transaction = Transaction::count();
        $pending = Transaction::where('transaction_status', 'PENDING')->count();
        $success = Transaction::where('transaction_status', 'SUCCESS')->count();

        return view('pages.admin.dashboard', compact('travel', 'transaction', 'pending', 'success'));
    }
}

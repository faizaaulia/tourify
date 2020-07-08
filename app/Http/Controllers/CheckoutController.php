<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\TransactionDetail;
use App\TravelPackage;
use App\Transaction;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function index($trx_id)
    {
        $item = Transaction::with(['details', 'travel_package', 'user'])->where('trx_id', $trx_id)->firstOrFail();

        return view('pages.checkout', compact('item'));
    }

    public function process($id) {
        $travel = TravelPackage::findOrFail($id);
        do {
            $trx = Str::random(25);
        } while (Transaction::where('trx_id', $trx)->first() != null);

        $transaction = Transaction::create([
            'trx_id' => $trx,
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'trxs_id' => $transaction->trx_id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => 0,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);

        return redirect()->route('checkout', $transaction->trx_id);
    }

    public function create(Request $request, $trx_id) {
        $request->validate([
            'username' => [
                'required','string','exists:users,username', 
                Rule::unique('transaction_details')
                    ->where(function ($query) use ($trx_id) {
                        return $query->where('trxs_id', $trx_id);
                })
            ], 
            'is_visa' => 'required', 
            'doe_passport' => 'required'
        ]);

        $data = $request->all();
        $data['trxs_id'] = $trx_id;
        $service = $request->is_visa;
        $data['is_visa'] = $service == 'VISA' ? 1 : 0;

        TransactionDetail::create($data);

        $transaction = Transaction::with('travel_package')->where('trx_id', $trx_id)->firstOrFail();

        if ($request->is_visa == 'VISA') {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }
        $transaction->transaction_total += $transaction->travel_package->price;
        $transaction->save();

        return redirect()->route('checkout', $trx_id);
    }

    public function remove($detail_id) {
        $item = TransactionDetail::findOrFail($detail_id);
        $transaction = Transaction::with(['details', 'travel_package'])->where('trx_id', $item->trxs_id)->firstOrFail();

        if ($item->is_visa == 1) {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }
        $transaction->transaction_total -= $transaction->travel_package->price;
        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->trxs_id);
    }

    public function success($trx_id)
    {
        $transaction = Transaction::where('trx_id', $trx_id)->firstOrFail();
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        return view('pages.success');
    }
}

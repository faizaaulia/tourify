<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TransactionRequest;
use App\Http\Controllers\Controller;
use App\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $items = Transaction::with([
            'details', 'travel_package', 'user'
        ])->orderBy('created_at', 'desc')->paginate(10);

        return view('pages.admin.transaction.index', compact('items'));
    }

    public function show($trx_id)
    {
        $item = Transaction::with([
            'details', 'travel_package', 'user'
        ])->where('trx_id', $trx_id)->firstOrFail();

        return view('pages.admin.transaction.detail', compact('item'));
    }

    public function edit($trx_id)
    {
        $item = Transaction::where('trx_id', $trx_id)->firstOrFail();

        return view('pages.admin.transaction.edit', compact('item'));
    }

    public function update(TransactionRequest $request, $trx_id)
    {
        $item = Transaction::where('trx_id', $trx_id)->firstOrFail();
        $data = $request->all();
        $item->update($data);
        
        return redirect()->route('transaction.index');
    }

    public function destroy($trx_id)
    {
        $item = Transaction::where('trx_id', $trx_id)->firstOrFail();
        $item->delete();

        return redirect()->route('transaction.index');
    }
}

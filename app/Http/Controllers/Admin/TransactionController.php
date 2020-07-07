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
        ])->get();

        return view('pages.admin.transaction.index', compact('items'));
    }

    public function create()
    {
        //
    }

    public function store(TransactionRequest $request)
    {
        //
    }

    public function show($id)
    {
        $item = Transaction::with([
            'details', 'travel_package', 'user'
        ])->findOrFail($id);

        return view('pages.admin.transaction.detail', compact('item'));
    }

    public function edit($id)
    {
        $item = Transaction::findOrFail($id);

        return view('pages.admin.transaction.edit', compact('item'));
    }

    public function update(TransactionRequest $request, $id)
    {
        $item = Transaction::findOrFail($id);
        $data = $request->all();
        $item->update($data);
        
        return redirect()->route('transaction.index');
    }

    public function destroy($id)
    {
        $item = Transaction::findOrFail($id);
        $item->delete();

        return redirect()->route('transaction.index');
    }
}

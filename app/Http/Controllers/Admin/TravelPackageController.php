<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TravelPackageRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\TravelPackage;

class TravelPackageController extends Controller
{
    public function index()
    {
        $items = TravelPackage::orderBy('created_at', 'desc')->get();
        
        return view('pages.admin.travel-package.index', ['items' => $items]);
    }
    
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TravelPackage::create($data);
        return redirect()->route('travel-package.index');
    }
    
    public function edit($id)
    {
        $item = TravelPackage::findOrFail($id);

        return view('pages.admin.travel-package.edit', ['item' => $item]);
    }

    public function update(TravelPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = TravelPackage::findOrFail($id);
        $item->update($data);

        return redirect()->route('travel-package.index');
    }

    public function destroy($id)
    {
        $item = TravelPackage::findOrFail($id);
        $item->delete();

        return redirect()->route('travel-package.index'); 
    }
}

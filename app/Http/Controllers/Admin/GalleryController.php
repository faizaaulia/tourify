<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GalleryRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\TravelPackage;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $items = Gallery::with('travel_package')->get();

        return view('pages.admin.gallery.index', ['items' => $items]);
    }

    public function create()
    {
        $items = TravelPackage::all();

        return view('pages.admin.gallery.create', compact('items'));
    }

    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/travel-galleries', 'public');

        Gallery::create($data);
        return redirect()->route('gallery.index');
    }

    public function edit($id)
    {
        $gallery = Gallery::with('travel_package')->findOrFail($id);

        return view('pages.admin.gallery.edit', compact('id','gallery'));
    }

    public function update(GalleryRequest $request, $id)
    {
        $data = $request->all();

        $item = Gallery::findOrFail($id);
        if ($request->file('image')) {
            if ($item->image && file_exists(storage_path('app/public/' . $item->image)))
                Storage::delete('public/' . $item->image);
            
            $data['image'] = $request->file('image')->store('assets/travel-galleries', 'public');
        }
        $item->update($data);

        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        Storage::delete('public/' . $item->image);
        $item->delete();

        return redirect()->route('gallery.index');
    }
}

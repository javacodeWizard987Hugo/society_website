<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryEvent;
use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $events = GalleryEvent::withCount('items')->latest()->paginate(12);
        return view('admin.gallery.index', compact('events'));
    }

    public function create()
    {
        return view('admin.gallery.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'event_date' => 'nullable|date',
            'images.*' => 'required|image|max:5120',
        ]);

        $event = GalleryEvent::create([
            'name' => $request->name,
            'event_date' => $request->event_date,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('gallery', 'public');
                $event->items()->create([
                    'image' => $path,
                ]);
            }
        }

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery event created successfully.');
    }

    public function edit(GalleryEvent $gallery)
    {
        $event = $gallery->load('items');
        return view('admin.gallery.form', compact('event'));
    }

    public function update(Request $request, GalleryEvent $gallery)
    {
        $request->validate([
            'name' => 'required|max:255',
            'event_date' => 'nullable|date',
            'images.*' => 'nullable|image|max:5120',
        ]);

        $gallery->update([
            'name' => $request->name,
            'event_date' => $request->event_date,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('gallery', 'public');
                $gallery->items()->create([
                    'image' => $path,
                ]);
            }
        }

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery event updated successfully.');
    }

    public function destroy(GalleryEvent $gallery)
    {
        foreach ($gallery->items as $item) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
        }
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery event deleted successfully.');
    }

    public function destroyImage(GalleryItem $item)
    {
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }
        $item->delete();
        return back()->with('success', 'Image deleted successfully.');
    }
}

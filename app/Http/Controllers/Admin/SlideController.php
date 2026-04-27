<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('order')->get();
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|max:5120',
            'title' => 'nullable|max:255',
            'subtitle' => 'nullable|max:255',
            'description' => 'nullable',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('slides', 'public');
        }

        Slide::create($validated);
        return redirect()->route('admin.slides.index')->with('success', 'Slide created successfully.');
    }

    public function edit(Slide $slide)
    {
        return view('admin.slides.form', compact('slide'));
    }

    public function update(Request $request, Slide $slide)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|max:5120',
            'title' => 'nullable|max:255',
            'subtitle' => 'nullable|max:255',
            'description' => 'nullable',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            if ($slide->image) {
                Storage::disk('public')->delete($slide->image);
            }
            $validated['image'] = $request->file('image')->store('slides', 'public');
        }

        $slide->update($validated);
        return redirect()->route('admin.slides.index')->with('success', 'Slide updated successfully.');
    }

    public function destroy(Slide $slide)
    {
        if ($slide->image) {
            Storage::disk('public')->delete($slide->image);
        }
        $slide->delete();
        return redirect()->route('admin.slides.index')->with('success', 'Slide deleted successfully.');
    }
}

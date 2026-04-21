<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::latest()->paginate(10);
        return view('admin.donations.index', compact('donations'));
    }

    public function create()
    {
        return view('admin.donations.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'donor_name' => 'required|max:255',
            'description' => 'required',
            'date' => 'nullable|date',
        ]);

        Donation::create($validated);
        return redirect()->route('admin.donations.index')->with('success', 'Donation record created successfully.');
    }

    public function edit(Donation $donation)
    {
        return view('admin.donations.form', compact('donation'));
    }

    public function update(Request $request, Donation $donation)
    {
        $validated = $request->validate([
            'donor_name' => 'required|max:255',
            'description' => 'required',
            'date' => 'nullable|date',
        ]);

        $donation->update($validated);
        return redirect()->route('admin.donations.index')->with('success', 'Donation record updated successfully.');
    }

    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('admin.donations.index')->with('success', 'Donation record deleted successfully.');
    }
}

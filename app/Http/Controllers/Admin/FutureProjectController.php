<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FutureProject;
use Illuminate\Http\Request;

class FutureProjectController extends Controller
{
    public function index()
    {
        $projects = FutureProject::latest()->paginate(10);
        return view('admin.future-projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.future-projects.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        FutureProject::create($validated);
        return redirect()->route('admin.future-projects.index')->with('success', 'Future project created successfully.');
    }

    public function edit(FutureProject $future_project)
    {
        $project = $future_project;
        return view('admin.future-projects.form', compact('project'));
    }

    public function update(Request $request, FutureProject $future_project)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $future_project->update($validated);
        return redirect()->route('admin.future-projects.index')->with('success', 'Future project updated successfully.');
    }

    public function destroy(FutureProject $future_project)
    {
        $future_project->delete();
        return redirect()->route('admin.future-projects.index')->with('success', 'Future project deleted successfully.');
    }
}

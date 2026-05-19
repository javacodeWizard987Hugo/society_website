<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Donation;
use App\Models\Event;
use App\Models\FutureProject;
use App\Models\GalleryItem;
use App\Models\Slide;
use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    private function getSettings()
    {
        return Setting::all()->pluck('value', 'key')->toArray();
    }

   public function index()
{
    $settings = $this->getSettings();
    $recent_events = Event::latest()->take(3)->get();
    $slides = Slide::all();

    return view('frontend.index', compact('settings', 'recent_events', 'slides'));
}

    public function about()
    {
        $settings = $this->getSettings();
        return view('frontend.about', compact('settings'));
    }

    public function events()
    {
        $events = Event::latest()->paginate(6);
        $achievements = Achievement::latest()->paginate(6);
        return view('frontend.events', compact('events', 'achievements'));
    }

    public function donations()
    {
        $donations = Donation::latest()->paginate(10);
        return view('frontend.donations', compact('donations'));
    }

    public function projects()
    {
        $projects = FutureProject::latest()->paginate(10);
        return view('frontend.projects', compact('projects'));
    }

    public function team()
    {
        $members = TeamMember::orderBy('order')->get();
        return view('frontend.team', compact('members'));
    }

    public function gallery()
    {
        $items = GalleryItem::latest()->paginate(12);
        return view('frontend.gallery', compact('items'));
    }

    public function contact()
    {
        $settings = $this->getSettings();
        return view('frontend.contact', compact('settings'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'description' => 'required|string',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}

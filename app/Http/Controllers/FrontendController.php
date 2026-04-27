<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Donation;
use App\Models\Event;
use App\Models\FutureProject;
use App\Models\GalleryItem;
use App\Models\Setting;
use App\Models\TeamMember;
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
        return view('frontend.index', compact('settings', 'recent_events'));
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

    public function gallery()
    {
        $items = GalleryItem::latest()->paginate(12);
        return view('frontend.gallery', compact('items'));
    }

    public function team()
    {
        $team_members = TeamMember::orderBy('order')->get();
        return view('frontend.team', compact('team_members'));
    }
}

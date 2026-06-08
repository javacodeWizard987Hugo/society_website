<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $keys = [
            'vision', 'mission', 'our_work_summary',
            'contact_address', 'contact_phone', 'contact_email', 'contact_map_link',
            'hero_badge', 'hero_title', 'hero_desc',
            'stat_residents', 'stat_events', 'stat_years',
            'stat_residents_num', 'stat_events_num',
            'about_title', 'about_desc', 'founded_year'
        ];

        $request->validate([
            'about_image_main' => 'nullable|image|max:20480',
            'about_image_float' => 'nullable|image|max:20480',
            'breadcrumb_bg' => 'nullable|image|max:20480',
            'contact_email' => 'nullable|email',
        ]);

        $imageKeys = [
            'about_image_main', 'about_image_float', 'breadcrumb_bg'
        ];

        $data = $request->only($keys);

        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        foreach ($imageKeys as $key) {
            if ($request->hasFile($key)) {
                $oldPath = Setting::where('key', $key)->first()?->value;
                if ($oldPath && \Storage::disk('public')->exists($oldPath)) {
                    \Storage::disk('public')->delete($oldPath);
                }
                $path = $request->file($key)->store('settings', 'public');
                Setting::updateOrCreate(['key' => $key], ['value' => $path]);
            }
        }

        return back()->with('success', 'Settings updated successfully.');
    }
}

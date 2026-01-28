<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function create()
    {
        return view('admin.banner-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'video' => 'required|mimes:mp4,webm,ogg|max:51200',
        ]);

        $videoPath = $request->file('video')->store('banners', 'public');

        Banner::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'video_path' => $videoPath,
            'is_active' => true,
        ]);

        return back()->with('success', 'Banner uploaded successfully!');
    }
}

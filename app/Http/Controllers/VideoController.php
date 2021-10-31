<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        return Inertia::render('Video');
    }

    public function watch($id)
    {
        $data['video'] = Video::where('id', $id)->first();
        return Inertia::render('Watch',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|max:1000|mimes:jpg,png,jpeg',
            'video' => 'required|max:5000|mimes:mp4,video/mp4,video/x-flv,video/3gpp,video/x-msvideo,video/x-ms-wmv',
        ]);

        $thumbnail = $request->file('thumbnail');
        $thumbnail_name = time().'_thumbnail.'.$thumbnail->getClientOriginalExtension();
        $thumbnail->move('thumbnails',$thumbnail_name);

        $video = $request->file('video');
        $video_name = time().'_video.'.$video->getClientOriginalExtension();
        $video->move('videos',$video_name);

        $create = Video::create([
            'name'  => $request->name,
            'description'  => $request->description,
            'thumbnail'  => $thumbnail_name,
            'video'  => $video_name,
            'user_id'   => auth()->user()->id
        ]);
        if (isset($create->id)) {
            return redirect()->back()->with('success', 'Berhasil menambah video baru.');
        }
        return redirect()->back()->with('error', 'Gagal menambah video baru.');
    }
}

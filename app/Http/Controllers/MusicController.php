<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicRequest $request)
    {

            $form = [
                'title' => $request->title,
                'path_cover' => $request->path_cover,
                'path_music' => $request->path_music,
                'tags' => $request->tags,
                'artist' => $request->artist,
                'description' => $request->description,
                'category' => $request->category,
            ];

            if ($request->hasFile('path_music') && $request->hasFile('path_cover')) {
                $form['path_music'] = $request->file('path_music')->store('musics', 'public');
                $form['path_cover'] = $request->file('path_cover')->store('coveres', 'public');
             }


             Music::create($form);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        //
    }
}

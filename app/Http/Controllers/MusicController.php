<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;
use App\Models\Artist;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
           DB::transaction(function () use ($request){
            $spar = explode(' ',$request->tags);
            $form = [
                'title' => Str::of($request->title)->title(),
                'path_cover' => $request->path_cover,
                'user_id' => $request->path_cover,
                'user_id' => auth()->user()->id,
                'tags' => implode(', ',$spar),
                'artist' => $request->artist,
                'search' => $request->title .' ' . $request->artist,
                'description' => $request->description,
                'category' => $request->category,
            ];

            if ($request->hasFile('path_music') && $request->hasFile('path_cover')) {
                $form['path_music'] = $request->file('path_music')->store('musics', 'public');
                $form['path_cover'] = $request->file('path_cover')->store('coveres', 'public');
             }

            $music = new Music($form);
            $music->save();

            $artist = new Artist();
            $artist->artist = $request->artist;
            $artist->music_id = $music->id;
            $artist->save();

            $category = new Category();
            $category->category = $request->category;
            $category->music_id = $music->id;
            $category->save();

             });


        return back()->with('successCreate', 'Dados criado e evnviado com sucesso');
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
        return view('create.edit', compact('music'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
    
            $spar = explode(' ',$request->tags);
            $form = [
                'title' => Str::of($request->title)->title(),
                'path_cover' => $request->path_cover,
                'user_id' => $request->path_cover,
                'user_id' => auth()->user()->id,
                'tags' => implode(', ',$spar),
                'artist' => $request->artist,
                'search' => $request->title .' ' . $request->artist,
                'description' => $request->description,
                'category' => $request->category,
            ];

            if (empty($request->hasFile('path_music')) && empty($request->hasFile('path_cover'))) {
                $form['path_music'] = $music->path_music;
                $form['path_cover'] = $music->path_cover;
             }else{
                $form['path_music'] = $request->file('path_music')->store('musics', 'public');
                $form['path_cover'] = $request->file('path_cover')->store('coveres', 'public');
             }

            $music->update($form);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        $music->delete();
    }
}

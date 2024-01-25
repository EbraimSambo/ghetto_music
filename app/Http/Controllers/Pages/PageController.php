<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Download;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function home(Music $music) {
        
        return view('pages.home',[
            'musics' => Music::inRandomOrder()->take(8)->get(),
            'tops' => Music::select('music.*')
            ->join('downloads', 'music.id', '=', 'downloads.music_id')
            ->groupBy('music.id')
            ->orderByRaw('SUM(downloads.donloads) DESC')
            ->limit(6)
            ->get(),
        ]);
    }

    public function showMusic($slug) {

        $music = Music::where('slug', $slug)->firstOrFail();
        return view('pages.show-music',[
            'music' => $music,
            'download' => Download::all()->where('music_id',$music->id),
            'similar' => Music::inRandomOrder()->take(6)->get()->where('category', $music->category),
            'artist' => Music::inRandomOrder()->take(6)->get()->where('artist', $music->artist),
        ]);
    }

    public function musicAll() {
        
        return view('pages.musics',[
            'musics' => Music::all()
        ]);
    }

    public function search() {
        
        return view('pages.search',[
            'musics' => Music::latest()->filter(request(['search','tag','category']))->paginate(7)
        ]);
    }

    public function about() {
        return view('pages.about');
    }

    public function politycsAndPrivacity() {
        return view('pages.about');
    }

    public function termsAndUse() {
        return view('pages.about');
    }

    public function downloadMusic($id)
    {
        $music = Music::find($id);
        $download = new Download();
        $download->music_id = $music->id;
        $download->title = $music->title;

        $download->donloads ++;
        $download->save();
       $filePath = public_path('storage/' . $music->path_music); // Caminho completo do arquivo

       return response()->download($filePath, $download->title.' - ' .$music->artist . '.' . pathinfo($music->path_music, PATHINFO_EXTENSION));
    }
}
                
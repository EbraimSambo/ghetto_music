<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Download;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function home() {
        
        return view('pages.home',[
            'musics' => Music::all()
        ]);
    }

    public function showMusic($id) {

        return view('pages.show-music',[
            'music' => Music::find($id),
            'download' => Download::all()->where('music_id',$id)
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
                
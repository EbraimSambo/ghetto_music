<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function showMusic() {
        return view('pages.show-music');
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
}

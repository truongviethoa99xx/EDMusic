<?php

namespace App\Http\Controllers\Listen_music;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListenMusicController extends Controller
{
    public function index() {
        return view('listen_music.index');
    }
}

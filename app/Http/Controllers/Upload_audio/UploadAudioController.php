<?php

namespace App\Http\Controllers\Upload_audio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadAudioController extends Controller
{
    public function index() {
        return view('upload_audio.index');
    }
}

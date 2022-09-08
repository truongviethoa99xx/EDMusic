<?php

namespace App\Http\Controllers\Media_fixed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaFixedController extends Controller
{
    //
    public function index() {
        return view('media_play_fixed.index');
    }
}

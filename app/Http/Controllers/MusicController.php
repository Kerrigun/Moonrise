<?php

namespace App\Http\Controllers;

use App\video_list;
use Illuminate\Http\Request;

class MusicController extends Controller
{

    public function show()
    {
    return video_list::all();
    }

}

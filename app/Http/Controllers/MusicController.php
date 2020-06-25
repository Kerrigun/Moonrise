<?php

namespace App\Http\Controllers;
Use App\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function show()
    {
        return Music::all();
    }
}

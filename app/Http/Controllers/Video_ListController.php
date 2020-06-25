<?php

namespace App\Http\Controllers;

use App\Video_ListController;
use Illuminate\Http\Request;

class Video_ListController extends Controller
{

    public function show()
    {
    	return video_list::all();
    }

}

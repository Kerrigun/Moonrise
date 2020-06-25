<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
   
   public function indexAction()
   {
   		return view('index');
   }

   public function add_playlistAction()
   {
   		return view('add_playlist');
   }

   public function albumAction()
   {
   		return view('album');
   }

   public function album_singleAction()
   {
   		return view('album_single');
   }

   public function artistAction()
   {
   		return view('artist');
   }

   public function artist_singleAction()
   {
   		return view('artist_single');
   }

   public function blogAction()
   {
   		return view('blog');
   }

   public function blog_singleAction()
   {
   		return view('blog_single');
   }

   public function downloadAction()
   {
   		return view('download');
   }

   public function favouriteAction()
   {
   		return view('favourite');
   }

   public function feature_playlistAction()
   {
   		return view('feature_playlist');
   }

   public function free_musicAction()
   {
   		return view('free_music', ['video_list' => (new Video_ListController())->show()]);
   }

   public function genresAction()
   {
   		return view('genres');
   }

   public function genres_singleAction()
   {
   		return view('genres_single');
   }

   public function historyAction()
   {
   		return view('history');
   }

	public function manage_accAction()
   {
   		return view('manage_acc');
   }

	public function profileAction()
   {
   		return view('profile');
   }

   public function purchaseAction()
   {
   		return view('purchase');
   }

   public function stationsAction()
   {
   		return view('stations');
   }

   public function top_trackAction()
   {
   		return view('top_track');
   }

   public function uploadAction()
   {
   		return view('upload');
   }

}

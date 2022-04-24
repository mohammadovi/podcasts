<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {

        $podcasts = Podcast::latest()->paginate(100);
        $podcastsF =  Podcast::oldest()->paginate(100);
        return view('pages.podcasts',compact('podcasts','podcastsF'));
    }
    public function single(Podcast $podcast)
    {
        $podcasts = Podcast::all();
        return view('pages.single',compact('podcast','podcasts'));
    }
}

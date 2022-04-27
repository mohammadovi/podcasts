<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function mainPage()
    {
        // example:
//        toast('خوش آمدید به رادیو نمانا!','success');

        $podcasts = Podcast::latest('updated_at')->take(5)->get();
        $lastPodcast =Podcast::find(2);
        //item sdsad
//        $pr = Podcast::whereHas('categories', function ($query) {
//            return $query->where('id', '=', 2);
//        })->get();
        //dd($pr);
        return view('index',compact('podcasts', 'lastPodcast'));
    }
}

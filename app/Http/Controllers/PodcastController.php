<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        $this->seo() ->setTitle('پادکست ها');
        $podcasts = Podcast::latest()->paginate(100);
        $podcastsF =  Podcast::oldest()->paginate(100);
        return view('pages.podcasts',compact('podcasts','podcastsF'));
    }
    public function single(Podcast $podcast)
    {
        $this->seo() ->setTitle($podcast->title)
            ->setDescription($podcast->MetaDescription);
        SEOMeta::addKeyword([$podcast->metaTitle, 'پادکست', 'Namana']);
        $podcasts = Podcast::latest()->paginate(100);
        return view('pages.single',compact('podcast','podcasts'));
    }

}

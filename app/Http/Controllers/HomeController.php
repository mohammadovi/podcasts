<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // example:
        toast('خوش آمدید به رادیو نمانا!','success');


        return view('home');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use App\Models\User;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $podcasts = Podcast::query();
        if ($keyword = request('search')){
            $podcasts->where('title','LIKE',"%{$keyword}%")
                ->orwhere('description','LIKE',"%{$keyword}%")
                ->orwhere('id',$keyword);
        }

        $podcasts = $podcasts->latest()->paginate(20);
        return view('admin.podcasts.all' , compact('podcasts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.podcasts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $validData=  $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'inventory' =>'required',
            'price' => 'required',

        ]);
        auth()->user()->podcasts()->create($validData);

        alert()->info('پادکست شما','با موفقیت ایجاد شد');
        return redirect(route('admin.podcasts.index'));
    }
    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    {
        return view('admin.podcasts.edit',compact('podcast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Podcast $podcast)
    {
        $validData=  $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'inventory' =>'required',
            'price' => 'required',

        ]);
        $podcast->update($validData);
        alert()->info('پادکست شما','با موفقیت ویرایش شد');

        return redirect(route('admin.podcasts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Podcast $podcast)
    {
        $podcast->delete();
        alert()->info('پادکست شما','با موفقیت حذف شد');
        return back();
    }
}

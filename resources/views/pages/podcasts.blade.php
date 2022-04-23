<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body>
<!--#PreLoader-->
@include('layouts.preloader')
<!--End#PreLoader-->
<!--#Header-->
@include('layouts.navtop')
<!--End#Header-->
<!--Start#hero-->
<section id="headertop" class="w-100 container-fluid position-relative"></section>
<!--End#hero-->

            <nav>
                <div class="nav nav-tabs mb-5" id="nav-tab" role="tablist">
                    <button class="nav-link active alink" id="nav-home-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                            role="tab" aria-controls="nav-home"
                            aria-selected="true"> پادکست ها</button>
                    <button class="nav-link alink" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab"
                            aria-controls="nav-profile"
                            aria-selected="false">پادکست های قدیمی</button>
{{--                    <button class="nav-link alink" id="nav-contact-tab" data-bs-toggle="tab"--}}
{{--                            data-bs-target="#nav-contact" type="button" role="tab"--}}
{{--                            aria-controls="nav-contact"--}}
{{--                            aria-selected="false">پادکست ها</button>--}}
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container-fluid mx-auto mb-4 col-12">
                        <div class="row spish ">
                            @foreach($podcasts as $key=>$podcast)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 container-fluid" style="margin:0 auto 0">
                                    <div class="card psize border-rad-top noneradius1 "style=" margin-right:auto;margin-left:auto; ">
                                        {{--     @if($key%2 ==0) bg-secondary @else--}}
                                        {{--         bg-light @endif--}}
                                        <a href="podcast/{{$podcast->id}}">
                                            <img src="{{$podcast->image}}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body @if($key% 2 ==0) bg-light text-dark @else bg-dark text-light @endif ">
                                            <h5 class="card-title">{{$podcast->title}}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">{{$podcast->text}} </p>
                                            {{--   @include('layouts.playersingle')--}}
                                            <div class="list-group-item  overflow-hidden">
                                                <audio class="w-100" controls controlsList="nodownload">
                                                    <source src="{{$podcast->audio}} " type="audio/mp3">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                <div class="card-footer rtl justify-content-center" >
                                    {!! $podcasts->appends(['search'=>request('search')])->links('pagination::bootstrap-5') !!}
                                </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container-fluid mx-auto mb-4 col-12">
                        <div class="row spish ">
                            @foreach($podcastsF as $key=>$podcast)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 container-fluid" style="margin:0 auto 0">
                                    <div class="card psize border-rad-top noneradius1 "style=" margin-right:auto;margin-left:auto; ">
                                        {{--     @if($key%2 ==0) bg-secondary @else--}}
                                        {{--         bg-light @endif--}}
                                        <a href="podcast/{{$podcast->id}}">
                                            <img src="{{$podcast->image}}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body @if($key% 2 ==0) bg-light text-dark @else bg-dark text-light @endif ">
                                            <h5 class="card-title">{{$podcast->title}}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">{{$podcast->text}} </p>
                                            {{--   @include('layouts.playersingle')--}}
                                            <div class="list-group-item  overflow-hidden">
                                                <audio class="w-100" controls controlsList="nodownload">
                                                    <source src="{{$podcast->audio}} " type="audio/mp3">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="card-footer rtl justify-content-center" >
                                {!! $podcasts->appends(['search'=>request('search')])->links('pagination::bootstrap-5') !!}
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">--}}

{{--                </div>--}}
            </div>

<!-- ======= Footer Section ======= -->
{{--@include('layouts.footersec')--}}
@include('layouts.footer')

</body>

</html>

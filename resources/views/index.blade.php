@extends('layouts.master')
@section('content')
<div class="section-title">

    <!--Last Podcast-->
    <div class="row justify-content-center " >
        <h2 class="col-4 " style="font-family:biranyekan!important">آخرین پادکست های منتشر شده </h2>
        <div class="col-12 box-margin " >
            <div class="card " style="border-radius: 25px;box-shadow: 0 5px 8px 6px rgb(126,126,126);">
                <div class="card-body text-light">
                    <div class="owl-carousel owl-theme loop overflow--hidden">
                        @foreach($podcasts as $key=>$podcast)
                        <div class="item">
                                <a href="podcast/{{$podcast->id}}">
                                    {{$podcast->title}}
                                    <img class="img-fluid" src="{{$podcast->image}}">
                                </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Last Podcast-->
    <!-- banner -->
    <div class="row banner-ads">
        <div class="col-12">
            <section class="banner">
                <a href="#">
                    <img class="img-fluid" src="/main/assets/img/baner/panelAdd.jpg">
                </a>
            </section>
        </div>
    </div>
    <!-- banner -->
    <div class="row justify-content-center">

        <div class="col-12 box-margin">
            <h2 class="col-4 " style="font-family:biranyekan!important">اولین پادکست های منتشر شده </h2>
            <div class="card bg-dark" style="border-radius: 25px;box-shadow:0 5px 8px 6px rgb(126,126,126);">
                <div class="card-body">
                    <div class="owl-carousel owl-theme loop">
                        @foreach($podcasts as $podcast)
                            <div class="item">
                                {{$podcast->title}}
                                <a href="podcast/{{$podcast->id}}">
                                    <img class="img-fluid" src="{{$podcast->image}}">
                                </a>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->
    <div class="row banner-ads">
        <div class="col-12">
            <section class="banner">
                <a href="#" class="">
                    <img class="img-fluid" src="/main/assets/img/baner/sponser.jpg"">
                </a>
            </section>
        </div>
    </div>
    <!-- banner -->
</div>
@endsection

{{--@section('customJs')--}}
{{--    <script>--}}
{{--        var specialPodcasts = {!! json_encode($podcasts, JSON_HEX_TAG) !!};--}}
{{--    </script>--}}
{{--@endsection--}}

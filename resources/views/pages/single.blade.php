<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body id="page-top">
    @include('layouts.preloader')
    @include('layouts.navtop')

    <div class="row container-fluid noneradius1 text-center" style="margin-top:
    99px ;
    margin-right: 5px;" >
        <div class="container-fluid col-md-4 "  >
            <div class="card bg-light text-dark shadow-orange2 border-rad-top"
                 style="width:
            18rem;">
                <img src="/main/assets/img/baner/panelSqure.jpg" class="card-img-top" alt="...">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="font-family:iranyekan" >1-وارد پروفایل خود بشوید</li>
                    <li class="list-group-item">2-سربرگ پنل پادکست را انتخاب کنید</li>
                    <li class="list-group-item">3-قیمت پنل ها را مشاهده کنید</li>
                    <li class="list-group-item text-danger">سایت در حال بروزرسانی می باشد برای اطلاع از پنل ها از طریق اینستاگرام اقدام کنید</li>
                </ul>
                <div class="card-body">
                    <p class="card-text text-warning">همراه ما باشید با کلی ایده های جدید</p>

                </div>
            </div>

            <div class="card bg-light text-dark  shadow-orange2
            border-rad-bottom" style="width:18rem;">
                <div class="card-body">
                    <p class="card-text">پادکست ها  </p>
                </div>
                <div class="card-body">
                    <div class="owl-carousel owl-theme full-width">
                          @foreach($podcasts as $podcast)
                            <div class="item">
                                <img src="{{$podcast->image}}" alt=" پادکست {{$podcast->title}} مشکلی دارد">
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>

            <div class="card bg-light text-dark  shadow-orange2
            border-rad-bottom" style="width:18rem;">
                <div class="card-body">
                    <p class="card-text">تبلیغات شما!... </p>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="owl-carousel owl-theme full-width align-items-center">

                                <div class="item   ">
                                    <video width="320" height="240"  class="container-fluid" autoplay loop muted>
                                        <source src="/main/assets/img/logo/logo.mp4" type="video/mp4">
                                        <source src="/main/assets/img/logo/logo.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>

                            <div class="item">
                                <img src="/main/assets/img/baner/esponserSqure.jpg" alt="image" />

                            </div>
                            <div class="item   ">
                                <video width="320" height="240"  class="container-fluid" autoplay loop muted>
                                    <source src="/main/assets/img/logo/logo.mp4" type="video/mp4">
                                    <source src="/main/assets/img/logo/logo.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container col-md-7 shadow-white " style="margin-bottom:15px;"  >
            <div class="card d-flex justify-content-center">
                <div class="card-header ">
                    {{$podcast -> title}}
                </div>
                <div class="card col-md-12 shadow-white border-rad-top mrl " style="width:
                18rem;">
                    <img src="{{$podcast->image}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                        @include('layouts.playersingle')
                    <hr style="height:5px">
                    <h4 class="card-title">توضیحات</h4>
                    <p class="card-text">
                        {{$podcast->description}}
                    <p class="badge bg-info">انتشار در 1399</p>
                    </p>
                    <hr style="height:5px">
                    <a href="" style=" color: inherit;" class="badge bg-secondary"> mohandesi </a>
                    <hr style="height:5px">
                    <div class="card-body">
                        <h4 class="card-title">اپیزود های مرتبط</h4>
                        <div class="owl-carousel owl-theme loop">
                            <div class="item">
                                <a href="#"> <img src="/main/assets/img/posterepisod/1.jpg" alt="image" /></a>
                            </div>
                            <div class="item">
                                <img src="/main/assets/img/posterepisod/2.png" alt="image" />
                            </div>
                            <div class="item">
                                <img src="/main/assets/img/posterepisod/1.jpg" alt="image" />
                            </div>
                            <div class="item">
                                <img src="/main/assets/img/posterepisod/3.jpg" alt="image" />
                            </div>
                            <div class="item">
                                <img src="/main/assets/img/posterepisod/5.jpg" alt="image" />
                            </div>
                            <div class="item">
                                <img src="/main/assets/img/posterepisod/1.jpg" alt="image" />
                            </div>
                            <div class="item">
                                <img src="/main/assets/img/posterepisod/2.png" alt="image" />
                            </div>
                            <div class="item">
                                <img src="/main/assets/img/posterepisod/2.png" alt="image" />
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>

            <nav>
                <div class="nav nav-tabs mb-5" id="" role="">
                    <button class="nav-link active alink" id="nav-comments-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-comments" type="button"
                            role="tab" aria-controls="nav-home"
                            aria-selected="true">
                        <li class="fas fa-comments">
                              </li>نظرات کاربران
                    </button>
                    <button class="nav-link alink" id="nav-comments2-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-comments2" type="button"
                            role="tab"
                            aria-controls="nav-comments2"
                            aria-selected="false">
                        <li class="fas fa-commenting text-danger"> </li>
                        نظر بدهید
                    </button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent " >
                <div class="tab-pane text-secondary fade text-start show active"
                     id="nav-comments"
                     role="tabpanel" aria-labelledby="nav-comments">
                        <article>
                            <h2 class="param-title">
                                نظرات کاربران
                            </h2>
                            <div class="comments-area default">
                                <ol class="comment-list">
{{--                                    @foreach($comments as $comment)--}}
{{--                                     <li>--}}
{{--                                        <div class="comment-body">--}}
{{--                                            <div class="comment-author">--}}
{{--                                                <img alt=""--}}
{{--                                                     src="/main/assets/img/Team/ALALE-JONEIDI.png" class="avatar"><cite class="fn">{{$comment->user-> name}}</cite>--}}
{{--                                                <span class="says">گفت:</span> </div>--}}

{{--                                            <div class="commentmetadata">--}}
{{--                                                {{$comment->created_at}}--}}
{{--                                            </div>--}}
{{--                                            <p>{{$comment->text}}</p>--}}
{{--                                            <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    @endforeach--}}

                                </ol>
                            </div>
                        </article>
                </div>

                <div class="tab-pane text-secondary text-start fade show
                " id="nav-comments2"
                     role="tabpanel" aria-labelledby="nav-comments2">
                        <article>
                            <h2 class="param-title">
                                <span>نظر خود را در مورد {{$podcast -> title}} مطرح نمایید</span>
                            </h2>
{{--                            <form action="{{route('send.comment')}}"  class="comment" method="POST">--}}
{{--                                @CSRF--}}
{{--                                <input type="hidden" name="commentable_id"   value="{{$podcast -> id}}">--}}
{{--                                <input type="hidden" name="commentable_type" value="{{get_class($podcast)}}">--}}
{{--                                <input type="hidden" value="0" name="parent_id">--}}
{{--                                <textarea class="form-control" placeholder="نظر" rows="5"  name="text"></textarea>--}}
{{--                                <button style="float:left;" type="submit" class="btn   btn-warning mt-2">ارسال نظر</button>--}}
{{--                            </form>--}}
                        </article>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    @include('layouts.footer')
</body>

</html>

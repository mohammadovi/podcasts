<!--#Header-->
<header>
    <div class="row">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top " id="header" >
            <div class="container-fluid">
                <a href="javascript:void(0)" class="navbar-brand">نمانای نشیم</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav col-10  ">
                        <li class="nav-item {{isActive(['mp'] , 'activem')}} ">
                            <a class="nav-link text-nowrap  {{isActive(['mp'] , 'active')}}" href="{{route('mp')}}" >خانه</a>
                        </li>
                        <li class="nav-item {{isActive(['podcastMain','podcastSingle'] , 'activem')}}">
                            <a class="nav-link text-nowrap {{isActive(['podcastMain','podcastSingle'] , 'active')}} " href="{{route('podcastMain')}}">اپیزود ها</a>
                        </li>
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link text-nowrap" href="javascript:void(0)">وبلاگ</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link  flex-fill text-nowrap" href="javascript:void(0)">درباره ما</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link  text-nowrap" href="javascript:void(0)">تماس با ما</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item col-md-6 col-lg-9 " >--}}
{{--                            <form class="d-flex  ">--}}
{{--                                <input class="form-control me-1" type="text" placeholder="کتاب معماری ....">--}}
{{--                                <button class="btn btnsearch" type="button">بگرد</button>--}}
{{--                            </form>--}}
{{--                        </li>--}}

                        <li class="nav-item  text-nowrap">

                        <li class="nav-item dropdown {{isActive(['login' , 'register'] , 'activem')}}">
                            <a class="nav-link dropdown-toggle  {{isActive(['login' , 'register'] , 'active')}}" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                ناحیه کاربری
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @auth
                                    <li class="h-25">
                                        <a class="dropdown-item" href="{{route('profile') }}"> <p class="btn btn-outline-warning btn-sm h-25 container-fluid">{{auth()->user()->name}}</p> </a>
                                    </li>
                                    <li class="container-fluid mt-1">
                                       <form class="bg-dark" action="{{route('logout')}}" method="POST">
                                           @csrf
                                            <button type="submit" class="btn btn-outline-danger btn-sm container-fluid " style="font-weight:bolder" >خروج  </button>
                                       </form>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                @else
                                    <li><a class="dropdown-item"
                                           href="{{route('login')}}">ورود</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{route('register')}}">ثبت
                                            نام</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
{{--                                    <li><a class="dropdown-item" href="#">ورود نویسنده</a></li>--}}

                                @endif


                            </ul>
                        </li>

                    </ul>


                </div>
            </div>
            <ul class="col-2"></ul>
        </nav>
    </div>
</header>
<!--End#Header-->

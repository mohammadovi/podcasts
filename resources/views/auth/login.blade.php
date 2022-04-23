@extends('layouts.master2')

@section('content')
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #efdac8;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(253, 86, 14), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to top, rgba(238, 250, 132, 0.5), rgb(246, 42, 6))
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }
        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
    <section class="h-100 gradient-form  ">
        <div class="container mb-2 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black gradient-custom-2">
                        <div class="row g-0 ">
                            <div class="col-lg-6">
                                <div class="card-body  ">
                                    <div class="text-center ">
                                        <img src="/main/assets/img/logo/namlog.png" style="width: 185px;" alt="logo">
                                    </div>
                                    <br>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <label for="email" class="col-md-4 col-form-label text-start">{{ __('ایمیل') }}</label>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror


                                            <label for="password" class="col-md-4 col-form-label text-start">{{ __('پسورد') }}</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('مرا به خاطر بسپار') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-lg fa-lg gradient-custom-2  " >
                                                <p>ورود</p></button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link " href="{{ route('password.request') }}">
                                                   {{ __('پسورد خود را فراموش کردید؟') }}
                                                </a>
                                            @endif

                                        </div>
                                    {{--TODO Create Acc view--}}
{{--                                        <div class="d-flex align-items-center justify-content-center pb-4">--}}
{{--                                            <p class="mb-0 me-2">Don't have an account?</p>--}}
{{--                                            <button type="button" class="btn btn-outline-danger">Create new</button>--}}
{{--                                        </div>--}}

                                    </form>
                                    <div class="row">

                                            <a href="{{route('auth.google')}}" class="btn btn-danger">
                                                <i class="fab fa-google" ></i>
                                                ورود با Google</a>


                                            <a  href="#" class="btn btn-primary disabled mb-2">
                                                <i class="fab fa-facebook-f" ></i>  ورود با  Facebook</a>


                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4 " style="font-size:10pt">برای اطلاع از پنل های پادکست بعد از ورود، به قسمت  پنل کاربری خود مراجعه نمایید</h4>
                                    <p class="small mb-0"></p>
                                    <img src="/main/assets/img/baner/panelSqure.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

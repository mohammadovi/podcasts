@extends('layouts.app')

@section('content')
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */

            background: #f57408;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(253, 249, 14), rgba(143, 211, 244, 0.5));

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
    <section class="h-100 gradient-form " style="direction:rtl; background-color: #c5ede8;">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black gradient-custom-2">
                        <div class="row g-0 ">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4 ">

                                    <div class="text-center ">
                                        <img src="/main/assets/logo/img/namlog.png" style="width: 185px;" alt="logo">


                                    </div>
<br>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('ایمیل') }}</label>
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


                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('پسورد') }}</label>
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
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2  mb-3" >
                                                ورود</button>
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

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">برای اطلاع از پنل های پادکست بعد از ورود به پنل کاربری خود مراجعه نمایید</h4>
                                    <p class="small mb-0"></p>
                                    <img src="/main/assets/logo/img/t1-1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

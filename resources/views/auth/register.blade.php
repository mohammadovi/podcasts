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
                                    <form  method="POST" action="{{ route('register') }}" >
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" />
                                            <label class="form-label" for="form3Example1cg">نام کاربری</label>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" />
                                            <label class="form-label" for="form3Example3cg">رایانامه</label>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg @error('password') is-invalid @enderror"  required autocomplete="new-password" />
                                            <label class="form-label" for="form3Example4cg">رمز عبور</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password_confirmation"  id="form3Example4cdg" class="form-control form-control-lg" required autocomplete="new-password" />
                                            <label class="form-label" for="form3Example4cdg">تکرار رمز عبور</label>


                                        </div>

                                        {{--                                    <div class="form-check d-flex justify-content-center mb-5">--}}
                                        {{--                                        <input--}}
                                        {{--                                            class="form-check-input me-2"--}}
                                        {{--                                            type="checkbox"--}}
                                        {{--                                            value=""--}}
                                        {{--                                            id="form2Example3cg"--}}
                                        {{--                                        />--}}
                                        {{--                                        <label class="form-check-label" for="form2Example3g">--}}
                                        {{--                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>--}}
                                        {{--                                        </label>--}}
                                        {{--                                    </div>--}}

                                        <div class="d-flex justify-content-center">
                                            <button  class="btn btn-success btn-block btn-lg gradient-custom-2 text-body">ثبت نام </button>
                                        </div>

                                        <p class="text-center text-muted  mb-0">قبلا ثبت نام کردید ؟
                                            <a href="{{route('login')}}" class="fw-bold text-body"><u>برای ورود کلیک کنید!</u></a>
                                        </p>

                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <p class="text-center  mb-0 text-info">قبلا ثبت نام کردید ؟
                                        <a href="{{route('login')}}" class="fw-bold text-body"><u>برای ورود کلیک کنید!</u></a>
                                    </p>
                                    <p class="small mb-0"></p>
                                    <img src="/main/assets/img/baner/esponserSqure.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection















@extends('layouts.app')

@section('content')
    <style>
        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }
        .gradient-custom-4 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }
    </style>
    <section class="vh-100 bg-image" style="direction:rtl; background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">ساخت اکانت جدید</h2>

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
                                        <button  class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">ثبت نام </button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">قبلا ثبت نام کردید ؟ <a href="{{route('login')}}" class="fw-bold text-body"><u>برای ورود کلیک کنید!</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection











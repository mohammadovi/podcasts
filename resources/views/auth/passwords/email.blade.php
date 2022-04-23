@extends('layouts.app2')

@section('content')

    <style>
        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #faf884;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgb(253, 86, 14));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(244, 12, 12), rgba(243, 232, 177, 0.5))
        }
        .gradient-custom-4 {
            /* fallback for old browsers */
            background: #fdf90e;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(250, 230, 132), rgb(255, 221, 0));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 1), rgb(244, 213, 6))
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
                                        <video width="320" height="240" autoplay loop muted>
                                            <source src="/main/assets/img/logo/logo.mp4" type="video/mp4">
                                            <source src="/main/assets/img/logo/logo.mp4" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">{{ __('بازیابی رمز عبور') }}</div>

                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf

                                            <div class="row mb-3">
                                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('ایمیل') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary gradient-custom-4">
                                                        {{ __('ارسال لینک بازیابی رمز عبور') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

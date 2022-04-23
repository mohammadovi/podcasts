@extends('layouts.app2')

@section('content')
    <style>
        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #3a3a39;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(241, 243, 242, 0.5), rgb(253, 86, 14));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(9, 9, 9), rgba(221, 228, 232, 0.5))
        }
        .gradient-custom-4 {
            /* fallback for old browsers */
            background: #efe5e6;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(244, 12, 12), rgb(235, 237, 237));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(34, 35, 34), rgb(253, 86, 14))
        }
    </style>
    <section class="vh-100" style="">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">{{ __(' رمز عبور جدید') }}</div>

                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('password.update') }}">
                                                        @csrf

                                                        <input type="hidden" name="token" value="{{ $token }}">

                                                        <div class="row mb-3">
                                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('ایمیل') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('رمز عبور جدید') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('تکرار رمز عبور') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-0">
                                                            <div class="col-md-6 offset-md-4">
                                                                <button type="submit" class="btn btn-primary gradient-custom-4">
                                                                    {{ __('تایید') }}
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
    </section>

@endsection











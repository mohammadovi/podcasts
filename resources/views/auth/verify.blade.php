@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 bg-light text-warning">
                <div class="card-header bg-dark">{{ __('تایید ایمیل') }}</div>
                <div class="card-body bg-dark">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('لینک فعال سازی مجدد ارسال شد!') }}
                        </div>
                    @endif

                    {{ __('قبل از درخواست دوباره  لطفا ایمیل خود را چک کنید !') }}<br>
                    {{ __('اگر ایمیلی دریافت نکردید') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('مجدد کلیک کنید') }}</button>.
                    </form>
                </div>
                <div class="card-body bg-light  ">
                    <div class="text-center ">
                        <video width="320" height="240" autoplay loop muted>
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
@endsection

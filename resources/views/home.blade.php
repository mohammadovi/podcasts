@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mt-5">{{ __('پنل کاربری') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="col-lg-12">
                            <div class="card-body  ">
                                <div class="text-center  ">
                                    <video width="320" height="240" autoplay loop muted>
                                        <source src="/main/assets/img/logo/logo.mp4" type="video/mp4">
                                        <source src="/main/assets/img/logo/logo.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            {{ __('شما وارد سایت شدید!!') }}

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

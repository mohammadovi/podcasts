<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body class="bg-dark" id="page-top">
    @include('layouts.preloader')
    @include('layouts.navtop')
    <!------ Include the above in your HEAD tag ---------->
    <div class="container emp-profile">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>

                    </div>
                </div>
                <div class="card-header col-md-6">
                    <div class="profile-head">
                        <h6>
                          احراز هویت دومرحله ایی
                        </h6>

                    </div>

                    <div class="card-body">
                        <form action="{{route('2fa.token')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="token" class="label">کد فعال سازی</label>
                                <input type="text" class="form-control mt-2 @error('token') is-invalid @enderror" name="token" >
                                @error('token')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-success container-fluid mt-1"> فعال سازی</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>






    </div>

    @include('layouts.footer')
</body>

</html>

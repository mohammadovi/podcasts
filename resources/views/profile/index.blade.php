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
                        <div class="file btn btn-lg btn-primary">
                            تغییر تصویر
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{auth()->user()->name}}
                        </h5>
                        <h6>

                        </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">خانه</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">TwoFactor</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active col-md-8" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>نام کاربری </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> {{auth()->user()->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>نام</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> {{auth()->user()->name}} </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>ایمیل</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> {{auth()->user()->email}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>شماره</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>123 456 7890</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>علاقه مندی ها</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Web Developer and Designer</p>
                                                </div>
                                            </div>
                            </div>
                            <div class="tab-pane fade col-md-8" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                @include('admin.layouts.errors')
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="type">وضعیت</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="off">خاموش</option>
                                            <option value="sms">پیامک</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">شماره همراه</label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="لطفا شماره همراه خود را وارد نمایید./">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-outline-warning text-dark mt-1">ثبت</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade col-md-8" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>






    </div>

    @include('layouts.footer')
</body>

</html>

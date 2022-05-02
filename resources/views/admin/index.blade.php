@component('admin.layouts.content' ,['title' =>'پنل مدیریت'])
    @slot('breadcrumb')
        <li class="breadcrumb-item active">پنل مدیریت </li>
{{--        <li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
    @endslot
    <h1 class="m-0 text-dark"> پنل مدیریت</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">اطلاعیه آپدیت ها</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>فعالیت</th>
                    <th>پیشرفت</th>
                    <th style="width: 40px">درصد</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td> اضافه شدن پنل کاربری معمولی <a href="{{route('profile')}}">کلیک کنید</a> </td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" style="width: 100%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-warning">100%</span></td>
                </tr>

                <tr>
                    <td>۲.</td>
                    <td> احراز هویت دو مرحله ایی 1401/02/11 به =<a href="{{route('manageTwoFactor')}}">کلیک کنید</a> سپس به سربرگ احراز هویت بروید</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-warning">۷۰%</span></td>
                </tr>

                </tbody></table>
        </div>
        <!-- /.card-body -->
    </div>
    <hr><hr>
    <div class="card">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                لیست کارها
            </h3>
{{--            <div class="card-tools">--}}
{{--                <ul class="pagination pagination-sm">--}}
{{--                    <li class="page-item"><a href="#" class="page-link">«</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">۱</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">۲</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">۳</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">»</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <ul class="todo-list ui-sortable">
                <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <input type="checkbox" value="" name="">
                    <span class="text">اضافه کردن آواتار به user و امکان تغغیر آن در پنل کاربری ابتدایی</span>
                    <small class="badge badge-info"><i class="fa fa-clock-o"></i>  </small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>

                <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <input type="checkbox" value="" name="">
                    <span class="text text-danger">Edit color login orangeCompany █آنا█</span>
                    <small class="badge badge-warning"><i class="fa fa-clock-o"></i>  </small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> جدید</button>
        </div>
    </div>
@endcomponent
<!-- Content Header (Page header) -->


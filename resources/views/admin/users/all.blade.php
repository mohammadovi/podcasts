@component('admin.layouts.content' ,['title' =>'پنل کاربران'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">مدیریت کاربران ها</li>
{{--        <li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
    @endslot
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">لیست کاربران </h3>

                    <div class="card-tools d-flex">
                        <form action="">
                            <div class="input-group input-group-sm " style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{request('search')}}">

                                <div class="input-group-append ">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group-sm mr-1">
                            <a href="{{route('admin.users.create')}}" class="btn btn-info"> ایجاد کاربر</a>
                            <a href="{{request()->fullUrlWithQuery(['admin'=> 1])}}" class="btn btn-outline-dark text-warning text-bold">اعضای تیم نمانا</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-dark table-outline-dark table-striped">
                        <tbody>
                            <tr>
                                <th>ایدی کاربر</th>
                                <th>نام کاربر</th>
                                <th>ایمیل</th>
                                <th> وضعیت ایمیل</th>
                                <th>دسترسی کامل</th>
                                <th>عملیات</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->email_verified_at)
                                            <span class="badge badge-success"> فعال  </span>
                                        @else
                                            <span class="badge  badge-danger"> غیر فعال </span>
                                        @endif
                                    </td>
                                    <td >
                                        @if($user->is_superuser || $user->is_staff)
                                            <span class="badge badge-success"> فعال  </span>
                                        @else
                                            <span class="badge  badge-danger"> غیر فعال </span>
                                        @endif
                                    </td>
                                    {{--                <td>--}}

                                    {{--                    @foreach($user->roles as--}}
                                    {{--                    $role)--}}
                                    {{--                        {{$role->name}} ---}}
                                    {{--                    @endforeach--}}

                                    {{--                </td>--}}
                                    {{--                <td>--}}

                                    {{--                    @foreach($user->permissions as--}}
                                    {{--                    $permission)--}}
                                    {{--                        {{$permission->name}} ---}}
                                    {{--                    @endforeach--}}

                                    {{--                </td>--}}

                                    <td class="d-flex">
                                        <form action="{{route('admin.users.destroy',['user'=>$user->id])}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('آیا از حذف کاربر مطمن هستید؟')" class="btn btn-danger btn-sm fas fa-trash-alt   "></button>
                                        </form>

                                        <a href="{{route('admin.users.edit', ['user'=>$user->id])}}" class="btn btn-outline-success  text-bold btn-sm mr-1 fas fa-edit "></a>
                                        {{--                    <a href="{{route('users.role',['user'=>$user->id])}}" class="btn btn-success bi bi-briefcase-fill"></a>--}}
                                        {{--                    --}}
                                        {{--                    <a href="{{route('users.permission',['user'=>$user->id])}}" class="btn btn-success bi bi-gear"> </a>--}}

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer rtl justify-content-center" >
                    {!! $users->appends(['search'=>request('search')])->links('pagination::bootstrap-5') !!}

                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endcomponent
<!-- Content Header (Page header) -->


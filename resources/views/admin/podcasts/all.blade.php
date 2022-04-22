@component('admin.layouts.content' ,['title' =>'پنل پادکست ها'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">مدیریت پادکست ها </li>
{{--        <li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
    @endslot
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">لیست پادکست ها </h3>

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
                            <a href="{{route('admin.podcasts.create')}}" class="btn btn-info"> ایجاد پادکست</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-dark table-outline-dark table-striped">
                        <tbody>
                        <tr>
                            <th> پادکست</th>
                            <th>عکس پادکست</th>
                            <th>ایدی پادکست</th>
                            <th>موضوع پادکست</th>
                            <th> توضیحات پادکست</th>
                            <th>عملیات</th>
                        </tr>
                            @foreach($podcasts as $podcast)
                                <tr>
                                    <td  class="w-25">
                                        <audio controls>
                                            <source src="{{$podcast->audio}}" type="audio/mp3">
                                            هیچ صدایی وجود ندارد

                                        </audio>
                                    </td>
                                    <td  class="w-25"><img class="w-25 img-fluid"  src="{{$podcast->image}}" alt="لینک عکس دچار مشکل   شده است"> </td>
                                    <td>{{$podcast->id}}</td>
                                    <td>{{$podcast->title}}</td>
                                    <td>{{$podcast->description}}</td>
                                    <td class="d-flex">
                                        <form action="{{route('admin.podcasts.destroy',$podcast->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('آیا از حذف کاربر مطمن هستید؟')" class="btn btn-danger fas fa-trash-alt   "></button>
                                        </form>

                                        <a href="{{route('admin.podcasts.edit', $podcast->id)}}" class="btn btn-outline-success  text-bold  mr-1 fas fa-edit "></a>
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
                    {!! $podcasts->appends(['search'=>request('search')])->links('pagination::bootstrap-5') !!}

                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endcomponent
<!-- Content Header (Page header) -->


@component('admin.layouts.content' ,['title' =>'مدیریت پادکست ها'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">مدیریت پادکست ها</li>

    @endslot
    <h1 class="m-0 text-dark"> پنل پادکست ها</h1>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-dark table-outline-dark table-striped">
            <thead>
            <tr>
                <th> پادکست</th>
                <th>عکس پادکست</th>
                <th>ایدی پادکست</th>
                <th>موضوع پادکست</th>
                <th> توضیحات پادکست</th>
                <th>عملیات</th>
            </tr>
            </thead>

            <tbody>
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
                        <form action="{{route('admin.podcasts.destroy',['podcast'=>$podcast->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('آیا از حذف کاربر مطمن هستید؟')" class="btn btn-danger fas fa-trash-alt   "></button>
                        </form>

                        <a href="{{route('admin.podcasts.edit', ['podcast'=>$podcast->id])}}" class="btn btn-outline-success  text-bold  mr-1 fas fa-edit "></a>
                        {{--                    <a href="{{route('users.role',['user'=>$user->id])}}" class="btn btn-success bi bi-briefcase-fill"></a>--}}
                        {{--                    --}}
                        {{--                    <a href="{{route('users.permission',['user'=>$user->id])}}" class="btn btn-success bi bi-gear"> </a>--}}

                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endcomponent
<!-- Content Header (Page header) -->


@component('admin.layouts.content' ,['title' =>'ویرایش پادکست '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.podcasts.index')}}">پادکست ها</a></li>
        <li class="breadcrumb-item active">ویرایش پادکست {{$podcast->title}}  </li>
    @endslot
   <div class="row">
       <div class="col-lg-12">
           @include('admin.layouts.errors')
           <div class="card card-warning col-md-6">
               <div class="card-header">
                   <h3 class="card-title"> ویرایش  {{$podcast->title}}</h3>

               </div>
               <!-- /.card-header -->
               <!-- form start -->
               <form class="form-horizontal" action="{{route('admin.podcasts.update',$podcast->id)}}" method="POST" >
                   @CSRF
                   @method('PATCH')
                   <div class="card-body">
                       <div class="form-group">
                           <label for="inputName" class=" control-label">نام پادکست</label>
                           <input type="text" name="title" class="form-control" id="inputName" placeholder="نام پادکست را وارد کنید" value="{{old('title',$podcast->title)}}">
                       </div>
                       <div class="form-group">
                           <label for="description" class=" control-label">توضیحات</label>
                           <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{old('description',$podcast->description)}}</textarea>
                       </div>
                       <div class="form-group">
                           <label for="inputPrice" class=" control-label">قیمت</label>
                               <input type="hidden" name="price" class="form-control" id="inputPrice" value="0" >
                       </div>
                       <div class="form-group">
                           <label for="inputInventory" class=" control-label">موجودی</label>
                               <input type="hidden" name="inventory" class="form-control" id="inputInventory" value="0">
                       </div>


                   </div>
                   <!-- /.card-body -->
                   <div class="card-footer">
                       <button type="submit" class="btn btn-outline-warning text-bold text-dark">ثبت پادکست</button>
                       <a href="{{route('admin.podcasts.index')}}" type="submit" class="btn btn-outline-dark float-left">لغو</a>
                   </div>

                   <!-- /.card-footer -->
               </form>
           </div>
       </div>
   </div>

@endcomponent
<!-- Content Header (Page header) -->


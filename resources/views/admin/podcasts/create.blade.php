@component('admin.layouts.content' ,['title' =>'ایجاد پادکست جدید'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.podcasts.index')}}">پادکست ها</a></li>
        <li class="breadcrumb-item active">ایجاد پادکست جدید </li>
    @endslot
   <div class="row">
       <div class="col-lg-12">
           @include('admin.layouts.errors')
           <div class="card card-warning col-md-6">
               <div class="card-header">
                   <h3 class="card-title">فرم ایجاد پادکست </h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
               <form class="form-horizontal" action="{{route('admin.podcasts.store')}}" method="POST" enctype="multipart/form-data" >
                   @CSRF
                   <div class="card-body">
                       <div class="form-group">
                           <label for="inputName" class=" control-label">نام پادکست</label>
                           <input type="text" name="title" class="form-control" id="inputName" placeholder="نام پادکست را وارد کنید" value="{{old('title')}}">
                       </div>
                       <div class="form-group">
                           <label for="description" class=" control-label">توضیحات</label>
                           <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
                       </div>
                       <div class="form-group">
                               <input type="hidden" name="price" class="form-control" id="inputPrice" value="0" >
                       </div>
                       <div class="form-group">
                               <input type="hidden" name="inventory" class="form-control" id="inputInventory" value="0">
                       </div>

                       <div class="form-group">
                           <label for="image" class=" control-label">آپلود تصویر</label>
                           <input type="file" name="image" class="form-control" >
                       </div>
                       <div class="form-group">
                           <label for="audio" class=" control-label">آپلود پادکست</label>
                           <input type="file" name="audio" class="form-control" >
                       </div>
                       <div class="form-group">
                           <label for="inputMeta">کلمات کلیدی پادکست  </label>
                           <input type="text" class="form-control" id="inputMeta" name="metaTitle"  value="{{old('metaTitle')}}">
                       </div>
                       <div class="form-group">
                           <label for="inputMetaD">توضیحات کلیدی پادکست </label>
                           <input type="text" class="form-control" id="inputMetaD" name="metaDescription"  value="{{old('metaDescription')}}">
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


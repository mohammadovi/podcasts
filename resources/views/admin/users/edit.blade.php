@component('admin.layouts.content' ,['title' =>'ویرایش کاربر '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">کاربران</a></li>
        <li class="breadcrumb-item active">ویرایش کاربر  </li>

    @endslot
   <div class="row">
       <div class="col-lg-12">
           @include('admin.layouts.errors')
           <div class="card card-warning col-md-6">
               <div class="card-header">
                   <h3 class="card-title">فرم ویرایش کاربر </h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
               <form class="form-horizontal" action="{{route('admin.users.update',['user'=> $user->id ])}}" method="POST" >
                   @CSRF
                   @method('PATCH')
                   <div class="card-body">
                       <div class="form-group">
                           <label for="inputName" class=" control-label">نام کاربر</label>
                           <input type="text" name="name" class="form-control" id="inputName" placeholder="نام کاربر را وارد کنید" value="{{$user->name}}">
                       </div>
                       <div class="form-group">
                           <label for="inputEmail3" class=" control-label">ایمیل</label>
                               <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="ایمیل را وارد کنید" value="{{$user->email}}">
                       </div>
                       <div class="form-group">
                           <label for="inputPassword3" class=" control-label">رمزعبور</label>
                               <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="رمزعبور را وارد کنید">
                       </div>
                       <div class="form-group">
                           <label for="inputPassword4" class=" control-label">تکرار رمز عبور</label>
                               <input type="password" name="password_confirmation" class="form-control" id="inputPassword4" placeholder="تکرار رمز عبور را وارد کنید">
                       </div>
                      @if(! $user->hasVerifiedEmail())
                           <div class="form-check">
                               <input type="checkbox" id="emailCheck" name="verify" class="form-check-input">
                               <label for="emailCheck" class="form-check-label"> اکانت فعال باشد </label>
                           </div>
                       @endif
                   </div>
                   <!-- /.card-body -->
                   <div class="card-footer">
                       <button type="submit" class="btn btn-outline-warning text-bold text-dark">ثبت تغییرات</button>
                       <a href="{{route('admin.users.index')}}" type="submit" class="btn btn-outline-dark float-left">لغو</a>
                   </div>

                   <!-- /.card-footer -->
               </form>
           </div>
       </div>
   </div>

@endcomponent
<!-- Content Header (Page header) -->


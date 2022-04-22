 <div class="sidebar">
            <div>
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{auth()->user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview {{isActive(['admin.'],'menu-open')}}">
                            <a href="{{route('admin.')}}" class="nav-link {{isActive('admin.')}} ">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    داشبوردها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.')}}" class="nav-link {{isActive('admin.')}}">
                                        <i class="fa fa-briefcase nav-icon"></i>
                                        <p> پنل مدیریت </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>پادکست ها </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview {{isActive(['admin.users.index' ,'admin.users.create' ,'admin.users.edit'] , 'menu-open')}}">
                            <a href="#" class="nav-link  {{isActive(['admin.users.index' ,'admin.users.create' ,'admin.users.edit'] , 'active')}}">
                                <i class="nav-icon fas fa-user-cog "></i>
                                <p>
                                    مدیریت کاربران
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.users.index')}}" class="nav-link {{isActive(['admin.users.index'  ,'admin.users.edit'] , 'active')}}">
                                        <i class="fa fa-users nav-icon"></i>
                                        <p> نمایش  کاربران </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.users.create')}}" class="nav-link {{isActive(['admin.users.create'] , 'active')}}">
                                        <i class="fas fa-user-plus nav-icon fa-spin fa-3x" ></i>
                                        <p>ساخت کاربر جدید  </p>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{isActive(['admin.podcasts.index' ,'admin.podcasts.create' ,'admin.podcasts.edit'] , 'menu-open')}}">
                            <a href="#" class="nav-link  {{isActive(['admin.podcasts.index' ,'admin.podcasts.create' ,'admin.podcasts.edit'] , 'active')}}">
                                <i class="nav-icon fab fa-napster"></i>
                                <p>
                                    مدیریت پادکست ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.podcasts.index')}}" class="nav-link {{isActive(['admin.podcasts.index'  ,'admin.podcasts.edit'] , 'active')}}">
                                        <i class="fas fa-book nav-icon"></i>
                                        <p> _نمایش  پادکست ها  </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.podcasts.create')}}" class="nav-link {{isActive(['admin.podcasts.create'] , 'active')}}">
                                        <i class="fas fa-book-medical nav-icon" ></i>
                                        <p>پادکست  جدید  </p>

                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.users.create')}}" class="nav-link {{isActive(['admin.users.create'] , 'active')}}">
                                        <i class="fas fa-user-plus nav-icon fa-spin fa-3x" ></i>
                                        <p>پادکست  ها تایید نشده  </p>

                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>

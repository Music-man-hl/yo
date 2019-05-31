<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Music-man</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">导航栏</li>
            @foreach($menus as $key => $menu)
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>{{ $key }}</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        @foreach($menu as $k => $men)
                            <li class="{{ $uri==$men->url?'active':''}}"><a href="{{ $men->url }}"><i class="fa fa-circle-o"></i>{{ $men->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
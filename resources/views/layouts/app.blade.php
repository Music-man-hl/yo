<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="adminlte/dist/css/skins/_all-skins.min.css">

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="hold-transition layout-top-nav">
    <div id="app" class="wrappers">
      <header class="main-header">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse " id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      @foreach ($menus as $menu)
                        <li class=""><a href="{{$menu->url}}">{{$menu->name}}</a></li>
                      @endforeach
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                      </div>
                    </form>

                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                      <ul class="nav navbar-nav navbar-right">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                          <!-- Menu toggle button -->
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                              <!-- inner menu: contains the messages -->
                              <ul class="menu">
                                <li><!-- start message -->
                                  <a href="#">
                                    <div class="pull-left">
                                      <!-- User Image -->
                                      <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    </div>
                                    <!-- Message title and timestamp -->
                                    <h4>
                                      Support Team
                                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <!-- The message -->
                                    <p>Why not buy a new awesome theme?</p>
                                  </a>
                                </li>
                                <!-- end message -->
                              </ul>
                              <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                          </ul>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                          <!-- Menu toggle button -->
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                              <!-- Inner Menu: contains the notifications -->
                              <ul class="menu">
                                <li><!-- start notification -->
                                  <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                  </a>
                                </li>
                                <!-- end notification -->
                              </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                          </ul>
                        </li>
                        <!-- Tasks Menu -->
                        <li class="dropdown tasks-menu">
                          <!-- Menu Toggle Button -->
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                              <!-- Inner menu: contains the tasks -->
                              <ul class="menu">
                                <li><!-- Task item -->
                                  <a href="#">
                                    <!-- Task title and progress text -->
                                    <h3>
                                      Design some buttons
                                      <small class="pull-right">20%</small>
                                    </h3>
                                    <!-- The progress bar -->
                                    <div class="progress xs">
                                      <!-- Change the css width attribute to simulate progress -->
                                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">20% Complete</span>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                                <!-- end task item -->
                              </ul>
                            </li>
                            <li class="footer">
                              <a href="#">View all tasks</a>
                            </li>
                          </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                          <!-- Menu Toggle Button -->
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                          </a>
                          <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                              <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                              <p>
                                {{ Auth::user()->name }} - Web Developer
                                <small>Member since Nov. 2012</small>
                              </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                              <div class="row">
                                <div class="col-xs-4 text-center">
                                  <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                  <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                  <a href="#">Friends</a>
                                </div>
                              </div>
                              <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                              <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">简介</a>
                              </div>
                              <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    注销
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                              </div>
                            </li>
                          </ul>
                          @endif
                          <ul class="nav navbar-nav navbar-right hidden">
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </li>
                      </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                    <!-- Right Side Of Navbar -->
                    
                </div>
            </div>
        </nav>
      </header>
@yield('content')
      {{--<footer class="main-footer">--}}
        <!-- <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.11
          </div>
          <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
          reserved.
        </div> -->
        <!-- /.container -->
      {{--</footer>--}}
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
{{--    <!-- <script src="{{ asset('js/app.js') }}"></script> -->--}}
    <!-- Scripts Jquery -->
    <script src="{{ asset('js/jquery-3.1.1.js') }}"></script>
    <!-- jQuery 2.2.3 -->
    <script src="adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    {{--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>--}}
    <!-- Bootstrap 3.3.6 -->
    <script src="adminlte/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    {{--<script src="adminlte/plugins/fastclick/fastclick.js"></script>--}}
    <!-- AdminLTE App -->
    <script src="adminlte/dist/js/app.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    {{--<script src="adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>--}}
    <!-- Sparkline -->
    {{--<script src="adminlte/plugins/sparkline/jquery.sparkline.min.js"></script>--}}
    <!-- jvectormap -->
    {{--<script src="adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>--}}
    {{--<script src="adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>--}}

    <!-- vue.js -->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $(document).ajaxStart(function() { Pace.restart(); });
    </script>
    @yield('js')
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>iHome</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="{{ asset('/images/iHome.png') }}">

  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css') }}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>i</b>H</span>
      <span class="logo-lg"><b>i</b>Home</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ url('/images', [Auth::User()->photo]) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::User()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{ url('/images', [Auth::User()->photo]) }}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::User()->name }}
                  <small>Member since {{ Auth::User()->created_at }}</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ url('/admin/profile', [Auth::User()->id]) }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Sign out
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('/images', [Auth::User()->photo]) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::User()->name }}</p>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="active"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ url('/admin/ihomes') }}"><i class="fa fa-home"></i> <span>iHomes overview</span></a></li>
        <li><a href="{{ url('/admin/lights') }}"><i class="fa fa-lightbulb-o"></i> <span>Lights overview</span></a></li>
        <li><a href="{{ url('/admin/ihome/add') }}"><i class="fa fa-plus"></i> <span>Add new iHome</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    @if(Session::has('message'))
        <div class="callout callout-{{ Session::get('message')[0] }} dissmissable">
          <h4>{{ Session::get('message')[0] }}</h4>

          <p>{{ Session::get('message')[1] }}</p>
        </div>
    @endif
    @yield('content')
  </div>
  <footer class="main-footer">
    <strong>&copy; 2017 Made by Samdewachter</strong>
  </footer>
</div>
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <!-- The styles -->
  <link id="bs-css" href="{{url('/')}}/assets/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">

  <link href="{{url('/')}}/assets/admin/css/charisma-app.css" rel="stylesheet">
  <link href="{{url('/')}}/assets/admin/bower_components/fullcalendar/dist/fullcalendar.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/bower_components/fullcalendar/dist/fullcalendar.print.css" rel='stylesheet' media='print'>
  <link href="{{url('/')}}/assets/admin/bower_components/chosen/chosen.min.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/bower_components/colorbox/example3/colorbox.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/bower_components/responsive-tables/responsive-tables.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/css/jquery.noty.css' rel='stylesheet">
  <link href="{{url('/')}}/assets/admin/css/noty_theme_default.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/css/elfinder.min.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/css/elfinder.theme.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/css/jquery.iphone.toggle.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/css/uploadify.css" rel='stylesheet'>
  <link href="{{url('/')}}/assets/admin/css/animate.min.css" rel='stylesheet'>

  <!-- jQuery -->
  <script src="{{url('/')}}/assets/admin/bower_components/jquery/jquery.min.js"></script>

  <!-- The fav icon -->
  <link rel="shortcut icon" href="{{url('/')}}/assets/admin/img/favicon.ico">

</head>

<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

  <div class="navbar-inner">
    <button type="button" class="navbar-toggle pull-left animated flip">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="{{url('/')}}/assets/admin/img/logo20.png" class="hidden-xs"/>
      <span>BestModa</span></a>

  </div>
  <body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>
      @if (\Session::has('message'))
        <div class="alert alert-success">
          <p>{{ \Session::get('message') }}</p>
        </div><br />
      @endif
      <form action="{{url('/')}}/admin/register" method="post">
        @csrf
        <div class="form-group has-feedback">
          <input type="text" name="name" class="form-control" placeholder="Full name">

        </div>
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Email" required>

        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password" required>

        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->

          <button type="submit" class="btn btn-primary">Register</button>

          <!-- /.col -->
        </div>
      </form>

      <a href="{{url('/')}}/assets/admin/login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery 3 -->
  <script src="{{url('/')}}/assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{url('/')}}/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="{{url('/')}}/assets/admin/plugins/iCheck/icheck.min.js"></script>
  <script>
      $(function () {
          $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
          });
      });
  </script>
  </body>
</div>
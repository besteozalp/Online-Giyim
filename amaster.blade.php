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

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">

                    </span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('/')}}/admin/logout">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->

            <!-- theme selector ends -->



        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        <!-- left menu starts -->
       <!--sidebar is here-->
        @include('layouts.admin.asidebar')
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
  <!--content is here-->
            @yield('content')
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    <div class="row">
        <div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Charisma Demo 2 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-5108790028230107"
                 data-ad-slot="3193373905"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>


    </div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">BestModa
            </a> 2018</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">BestModa</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="{{url('/')}}/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="{{url('/')}}/assets/admin/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src="{{url('/')}}/assets/admin/bower_components/moment/min/moment.min.js"></script>
<script src="{{url('/')}}/assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- data table plugin -->
<script src="{{url('/')}}/assets/admin/js/jquery.dataTables.min.js"></script>

<!-- select or dropdown enhancer -->
<script src="{{url('/')}}/assets/admin/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="{{url('/')}}/assets/admin/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="{{url('/')}}/assets/admin/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="{{url('/')}}/assets/admin/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="{{url('/')}}/assets/admin/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="{{url('/')}}/assets/admin/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="{{url('/')}}/assets/admin/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="{{url('/')}}/assets/admin/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="{{url('/')}}/assets/admin/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{url('/')}}/assets/admin/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>

    @yield("java")

</body>
</html>

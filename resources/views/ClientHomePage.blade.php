<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href= {{URL::to('bootstrap/css/bootstrap.min.css')}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href= {{URL::to('dist/css/AdminLTE.min.css')}}>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href= {{URL::to('dist/css/skins/_all-skins.min.css')}}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{URL::to('plugins/iCheck/flat/blue.css')}}>
    <!-- Morris chart -->
    <link rel="stylesheet" href={{URL::to('plugins/morris/morris.css')}}>
    <!-- jvectormap -->
    <link rel="stylesheet" href={{URL::to('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}>
    <!-- Date Picker -->
    <link rel="stylesheet" href={{URL::to('plugins/datepicker/datepicker3.css')}}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{URL::to('plugins/daterangepicker/daterangepicker-bs3.css')}}>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href={{URL::to('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}>

    <link rel="stylesheet" href={{URL::to('dist/fonts/fonts-fa.css')}}>
    <link rel="stylesheet" href={{URL::to('dist/css/bootstrap-rtl.min.css')}}>
    <link rel="stylesheet" href={{URL::to('dist/css/rtl.css')}}>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="ClientHomePage.blade.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>RS</b>M</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>RedSea</b>Marine</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">محمد شریفی</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                     محمد شریفی - توسعه دهنده سمت کاربر
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
@include('include.client_nav')


          <!------------------------------------------------   REFERENCE PART   -------------------------------------------->


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            الصفحة الرئيسية
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">

            </section><!-- /.Left col -->

          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-left hidden-xs"></div>
      </footer>

    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src={{URL::to('plugins/jQuery/jQuery-2.1.4.min.js')}}></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.4 -->
    <script src={{URL::to('bootstrap/js/bootstrap.min.js')}}></script>
    <!-- Morris.js charts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    <script src={{URL::to('plugins/morris/morris.min.js')}}></script>
    <!-- Sparkline -->
    <script src={{URL::to('plugins/sparkline/jquery.sparkline.min.js')}}></script>
    <!-- jvectormap -->
    <script src=  {{URL::to('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}></script>
    <script src=  {{URL::to('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>

    <!-- jQuery Knob Chart -->
    <script src=  {{URL::to('plugins/knob/jquery.knob.js')}}></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>

    <script src=  {{URL::to('plugins/daterangepicker/daterangepicker.js')}}></script>
    <!-- datepicker -->

    <script src=  {{URL::to('plugins/datepicker/bootstrap-datepicker.js')}}></script>
    <!-- Bootstrap WYSIHTML5 -->

    <script src=  {{URL::to('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}></script>
    <!-- FastClick -->
    <script src=  {{URL::to('plugins/fastclick/fastclick.min.js')}}></script>
    <!-- AdminLTE App -->
    <script src=  {{URL::to('dist/js/app.min.js')}}></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=  {{URL::to('dist/js/pages/dashboard.js')}}></script>

    <!-- AdminLTE for demo purposes -->
    <script src=  {{URL::to('dist/js/demo.js')}}></script>
  </body>
</html>

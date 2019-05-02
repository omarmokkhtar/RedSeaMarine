<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Data Tables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href= {{URL::to('bootstrap/css/bootstrap.min.css')}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href= {{URL::to('plugins/datatables/dataTables.bootstrap.css"')}}>

    <!-- Theme style -->
    <link rel="stylesheet" href= {{URL::to('dist/css/AdminLTE.min.css')}}>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href= {{URL::to('dist/css/skins/_all-skins.min.css')}}>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini"  dir="rtl">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../AdminHomePage.html" class="logo">
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
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->

      @include('include.nav')







        <!------------------------------------------------   CLIENT REGISTRTION TABLE  -------------------------------------------->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            التسجيل
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">تسجيل العملاء</h3>
                  <div  style="float: left;" >
                    <button class="btn btn-block btn-primary btn-lg" style="background-color: : #3c8dbc" data-toggle="modal" data-target="#modal-default"> 
                    إضافة عميل</button>
                  </div>
                  <div class="modal fade" id="modal-default">
                    <div class="register-box">
                      <div class="register-box-body" dir="rtl">
                        <p class="login-box-msg">إضافة عميل جديد</p>
                        <form action="{{URL::to('client')}}" method="post">
                          {{csrf_field()}}
                          <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="المستورد" name="name">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="الإيميل" name="email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="الرقم الضريبي" name="tax_number">
                            <span class="glyphicon glyphicon-file form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input type="phone" class="form-control" placeholder="رقم الهاتف" name="mobile">
                            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="كلمة المرور" name="password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="أعد إدخال كلمة المرور" name="re_password">
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                          </div>
                          <div class="row">
                            <div class="col-xs-4">
                              <button type="submit" class="btn btn-primary btn-block btn-flat">إضافة</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>المستورد</th>
                        <th>الإيميل</th>
                        <th>الرقم الضريبي</th>
                        <th>رقم الهاتف</th>
                        <th>مسح</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                      <tr>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->tax_number}}</td>
                        <td>{{$client->mobile}}</td>
                        <td><a  href="{{URL::to('client/delete/'.$client->id)}}" class="btn btn-block btn-danger btn-sm">مسح</a></td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
      </footer>


      <!-- jQuery 2.1.4 -->
      <script src={{URL::to('plugins/jQuery/jQuery-2.1.4.min.js')}}></script>
      <!-- Bootstrap 3.3.4 -->
      <script src=   {{URL::to('bootstrap/js/bootstrap.min.js')}} ></script>
      <!-- DataTables -->
      <script src={{URL::to('plugins/datatables/jquery.dataTables.min.js')}}></script>
      <script src={{URL::to('plugins/datatables/dataTables.bootstrap.min.js')}}></script>
      <!-- SlimScroll -->
      <script src={{URL::to('plugins/slimScroll/jquery.slimscroll.min.js')}}></script>

      <script src= {{URL::to('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}></script>
      <!-- FastClick -->
      <script src={{URL::to('plugins/fastclick/fastclick.min.js')}}></script>
      <!-- AdminLTE App -->
      <script src={{URL::to('dist/js/app.min.js')}}></script>
      <!-- AdminLTE for demo purposes -->
      <script src={{URL::to('dist/js/demo.js')}}></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>

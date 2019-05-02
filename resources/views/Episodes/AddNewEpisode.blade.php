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
    <link rel="stylesheet" href= "{{URL::to('plugins/datatables/dataTables.bootstrap.css"')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href= {{URL::to('dist/css/AdminLTE.min.css')}}>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href= {{URL::to('dist/css/skins/_all-skins.min.css')}}>


    <style>
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
    </style>

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





        <!------------------------------------------------   ADMIN REGISTRTION TABLE  -------------------------------------------->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              الشهادات الجديدة
          </h1>
        </section>
        @if($errors->any())
          <h4>{{$errors->first()}}</h4>

          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            {{$errors->first()}}
          </div>
      @endif
        <!-- Main content -->
          <section class="content">
              <div class="row">
                  <div class="col-xs-12">
                      <!-- /.box -->
                      <div class="box box-primary">
                          <div class="box-header with-border">
                              <h3 class="box-title">إضافة شهادة جديدة</h3>
                          </div><!-- /.box-header -->
                          <!-- form start -->
                          <form action="{{URL::to('custom')}}" method="post" role="form">
                            @if($errors->any())
                              <h4>{{$errors->first()}}</h4>
                            @endif
                            {{csrf_field()}}
                            <div class="box-body">
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label>الصنف</label>
                                  @if($errors->any())
                                    <h4>{{$errors->first('type')}}</h4>
                                  @endif
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" name="type">
                                </div>
                                <div class="form-group">
                                  <label>التوكيل الملاحي</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" name="power_of_attorney">
                                </div>
                                <div class="form-group">
                                  <label>تاريخ وصول المستندات</label>
                                  <input type="datepicker" class="form-control pull-right datepicker" name="doc_date">
                                </div>
                                <div class="form-group">
                                  <label>ملاحظات</label>
                                  <textarea class="form-control" rows="3" placeholder="" name="notes"></textarea>
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label>المستورد </label>
                                  <select class="form-control select2"  name="user_id">
                                    @foreach($clients as $client)

                                      <option value="{{$client->id}}">{{$client->name}} </option>

                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>عددالحاويات (٢٠ قدم)</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" name="container_20">
                                </div>
                                <div class="form-group">
                                  <label>عددالحاويات (٤٠ قدم)</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" name="container_40">
                                </div>
                                <div class="form-group">
                                  <label>عدد الكراتين</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" name="box_number">
                                </div>
                                <div class="form-group">
                                  <label>رقم البوليصة</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" name="policy_no">
                                </div>
                              </div>
                            </div>
                            <div class="box-footer">
                              <div class="col-xs-3" style="margin-left: 38%; padding-bottom: 3px; padding-top: 3px;">
                                <button type="submit" class="btn btn-primary btn-block">إضافة</button>
                              </div>
                            </div>
                          </form>
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
    <script>
      $( function() {
      $( ".datepicker" ).datepicker();
      } );
    </script>
  </body>
</html>

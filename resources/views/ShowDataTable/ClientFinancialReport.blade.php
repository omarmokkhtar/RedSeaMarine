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
        <a href="../../ClientHomePage.html" class="logo">
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

      @include('include.client_nav')





        <!------------------------------------------------   ADMIN REGISTRTION TABLE  -------------------------------------------->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              الجدول المالي
          </h1>
        </section>
        <!-- Main content -->
          <section class="content">
              <div class="row">
                  <div class="col-xs-12">
                      <!-- /.box -->
                      <div class="box box-primary">
                          <div class="box-header with-border">
                              <h3 class="box-title">تكلفة مبدئية "تقريبية" لقيمة الحاوية لحين الدفع ووصول الإيصالات</h3>
                          </div><!-- /.box-header -->
                          <!-- form start -->
                        @if ($finReport)

                        <form role="form">
                            <div class="box-body">
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label>اجراءات</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->procedures_fees}}" name="procedures_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>أتعاب تخليص</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->summary_fees}}" name="summary_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>نقل</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->container_transportation_fees}}" name="container_transportation_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>كارتة طريق الجيش</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->road_fees}}" name="road_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>م. العروض على الصادرات والواردات</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->imports_exports_fees}}" name="imports_exports_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>أستمارة</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->form_fees}}" name="form_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>مصروفات اخرى</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->other_fees}}" name="other_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>مصروفات اخرى</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->other_fees2}}" name="other_fees2" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>أجمالي التكلفة</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->total_amount}}" name="total_amount" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>رصيد قديم بالمصري</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->old_amount}}" name="old_amount" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>المبلغ المطلوب تحويله</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->req_transactions}}" name="req_transactions" disabled="disabled">
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label>عوائد تفريغ إيصال رقم</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" value="{{$finReport->dumpsReturn_fees}}"  name="dumpsReturn_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>رسوم توكيل ملاحي</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->navigational_fees}}" name="navigational_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>نولون</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->noloon_fees}}" name="noloon_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>التأمين</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->insurance_fee}}" name="insurance_fee" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>رسوم جمارك, ضريبة مبيعات, ا-ت-ص إيصالات أرقام</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" value="{{$finReport->custom_fees}}" name="custom_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>رسوم هيئة الرقابة على الصادرات والواردات</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" value="{{$finReport->supervisoryAuthority_Fees}}" name="supervisoryAuthority_Fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>عمولة بنك - مرفق إيصال رقم</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->bank_communion_fees}}" name="bank_communion_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>خدمات إلكترونية</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->eServices_fees}}" name="eServices_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>غرامة توكيل ملاحي</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->navigational_fine_fees}}" name="navigational_fine_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>مصروفات تخزين إيصال رقم</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->storage_fees}}" name="storage_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>إقرار جمركي + تصوير مستندات</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->tax_report_fees}}" name="tax_report_fees" disabled="disabled">
                                </div>
                                <div class="form-group">
                                  <label>إنتقالات</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$finReport->transportation_fees}}" name="transportation_fees" disabled="disabled">
                                </div>
                              </div>
                            </div>
                        </form>
                          @endif
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

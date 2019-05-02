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
    </div>




        <!------------------------------------------------   ADMIN REGISTRTION TABLE  -------------------------------------------->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              جدول البيانات
          </h1>
        </section>
        <!-- Main content -->
          <section class="content">
              <div class="row">
                  <div class="col-xs-12">
                      <!-- /.box -->
                      <div class="box box-primary">
                          <div class="box-header with-border">
                              <h3 class="box-title">عرض بيانات الشهادة كاملة</h3>
                          </div><!-- /.box-header -->
                          <!-- form start -->
                          <form role="form" method="post" action="{{URL::to('updateData/'.$customs->id)}}" >
                            {{csrf_field()}}
                            <div class="box-body">
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label>رقم طلب الفحص</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->checkup_date}}" name="checkup_date">
                                </div>
                                <div class="form-group">
                                  <label>المبدئي</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->primary}}" name="primary">
                                </div>
                                <div class="form-group">
                                  <label>تاريخ الكشف</label>
                                  <input type="datepicker" class="form-control glyphicon glyphicon-log-in datepicker" value="{{$customs->detection_date}}" name="detection_date">
                                </div>
                                <div class="form-group">
                                  <label>واردات اصناف تم سحبها</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->customs_after_precious}}" name="customs_after_precious">
                                </div>
                                <div class="form-group">
                                  <label>الجمرك بعد التثمين</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->commission_fees}}" name="commission_fees">
                                </div>
                                <div class="form-group">
                                  <label>رسوم الهيئة</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->total_fees}}" name="total_fees">
                                </div>
                                <div class="form-group">
                                  <label>التحويل</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->transaction}}" name="transaction">
                                </div>
                                <div class="form-group">
                                  <label>مقاول النقل</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->transportation_contractor}}">
                                </div>
                                <div class="form-group">
                                  <label>الوضع النهائي لجهات الفحص</label>
                                  <select class="form-control select2" placeholder="" value="{{$customs->container_20}}" id="selectItems">
                                    <option>مطابقة</option>
                                    <option>اعادة سحب</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>مطابقة</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->matching}}" id="text_1">
                                </div>
                                <div class="form-group">
                                  <label>إعادة سحب</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->resetting}}" id="text_2">
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label>المستورد</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->container_20}}" name="importer">
                                </div>
                                <div class="form-group">
                                  <label>عددالحاويات (٢٠ قدم)</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->container_20}}" name="importer">
                                </div>
                                <div class="form-group">
                                  <label>عددالحاويات (٤٠ قدم)</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->container_40}}" name="importer">
                                </div>
                                <div class="form-group">
                                  <label>عدد الكراتين</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->box_number}}" name="box_number">
                                </div>
                                <div class="form-group">
                                  <label>رقم البوليصة</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->policy_no}}" name="policy_no">
                                </div>
                                <div class="form-group">
                                  <label>الصنف</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->type}}" name="type">
                                </div>
                                <div class="form-group">
                                  <label>التوكيل الملاحي</label>
                                  <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->powerOfAttorney}}" name="powerOfAttorney">
                                </div>
                                <div class="form-group">
                                  <label>تاريخ وصول المستندات</label>
                                  <input type="datepicker" class="form-control  datepicker" value="{{$customs->doc_date}}" name="doc_date">
                                </div>
                                <div class="form-group">
                                  <label>تاريخ وصول الحاوية</label>
                                  <input type="datepicker" class="form-control glyphicon glyphicon-log-in datepicker" value="{{$customs->container_arrival}}" name="container_arrival">
                                </div>
                                <div class="form-group">
                                  <label>تاريخ سحب الأذن</label>
                                  <input type="datepicker" class="form-control glyphicon glyphicon-log-in datepicker" value="{{$customs->date_of_withdrawal}}" name="date_of_withdrawal">
                                </div>
                                <div class="form-group">
                                  <label>تاريخ تسجيل الشهادة</label>
                                  <input type="datepicker" class="form-control glyphicon glyphicon-log-in datepicker" value="{{$customs->certificate_reg}}" name="certificate_reg">
                                </div>
                                <div class="form-group">
                                  <label>رقم الشهادة</label>
                                  <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" value="{{$customs->certificate_no}}" name="certificate_no">
                                </div>
                              </div>
                            </div>
                            <div class="box-footer">
                              <div class="col-xs-3" style="margin-left: 38%; padding-bottom: 3px; padding-top: 3px;">
                                <button type="submit" class="btn btn-primary btn-block">تعديل</button>
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

    <script src={{URL::to('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}></script>
      <script src={{URL::to('plugins/slimScroll/jquery.slimscroll.min.js')}}></script>
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

      $( function() {
          $( ".datepicker" ).datepicker();
      } );


      $('#selectItems').on("change",function () {
          if  (this.value ==1){
              $("#text_1").removeAttr("disabled", 'disabled')
              $("#text_2").attr("disabled", 'disabled')
          }
          else {
              $("#text_2").removeAttr("disabled", 'disabled')
              $("#text_1").attr("disabled", 'disabled')
          }

      });
    </script>
  </body>
</html>

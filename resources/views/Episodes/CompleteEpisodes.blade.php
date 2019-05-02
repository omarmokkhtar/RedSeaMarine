<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RedSeaMarine</title>
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









        <!------------------------------------------------   CLIENT REGISTRTION TABLE  -------------------------------------------->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            إضافة شهادة جديدة
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">إستكمال بيانات اشسهادات</h3>



                  <!------------------------  Modal 1 ------------------------>


                  <div class="modal fade" id="modal-1">
                    <div class="register-box">
                      <div class="register-box-body" dir="rtl">
                        <p class="login-box-msg">متابعة الجزء الأول</p>
                        <form id="modal1" action="{{URl::to('phase2')}}" method="post">
                          {{csrf_field()}}
                          <input type="hidden" id="user_id" name="user_id" class="post-id" >

                          <div class="form-group">
                            <label>تاريخ وصول الحاوية</label>
                            <input type="datepicker" class="form-control pull-right datepicker" name="container_arrival">

                          </div>
                          <div class="form-group">
                            <label>تاريخ سحب الإذن</label>
                            <input type="datepicker" class="form-control pull-right datepicker" name="date_of_withdrawal">
                          </div>
                          <div class="form-group">
                            <label>تاريخ تسجيل الشهادة</label>
                            <input type="datepicker" class="form-control pull-right datepicker" name="certificate_reg">

                          </div>
                          <div class="form-group">
                            <label>رقم الشهادة</label>
                            <input type="number" class="form-control glyphicon glyphicon-file" placeholder="" name="certificate_no">
                          </div>
                          <div class="form-group">
                            <label>رقم طلب الفحص</label>
                            <input type="number" class="form-control glyphicon glyphicon-file" placeholder="" name="checkup_date">
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



                  <!------------------------  Modal 2 ------------------------>


                  <div class="modal fade" id="modal-2">
                    <div class="register-box">
                      <div class="register-box-body" dir="rtl">
                        <p class="login-box-msg">متابعة الجزء الثاني</p>
                        <form  id="modal2" action="{{URL::to('phase3')}}" method="post">
                          {{csrf_field()}}
                         <div class="form-group">
                            <label>المبدئي</label>
                            <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" name="primary">
                          </div>
                          <div class="form-group">
                            <label>تاريخ الكشف</label>
                            <input type="datepicker" class="form-control glyphicon glyphicon-log-in datepicker" name="detection_date">
                          </div>
                          <div class="form-group">
                            <label>واردات اصناف تم سحبها</label>
                            <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" name="imports_of_varieties">
                          </div>
                          <div class="form-group">
                            <label>الجمرك بعد التثمين</label>
                            <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder=""name="customs_after_precious">
                          </div>
                          <div class="form-group">
                            <label>رسوم الهيئة</label>
                            <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" name="commission_fees">
                          </div>
                          <div class="form-group">
                            <label>التحويل</label>
                            <input type="number" class="form-control glyphicon glyphicon-log-in" placeholder="" name="transaction">
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



                  <!------------------------  Modal 3 ------------------------>


                  <div class="modal fade" id="modal-3">
                    <div class="register-box">
                      <div class="register-box-body" dir="rtl">
                        <p class="login-box-msg">متابعة الجزء الثالث</p>
                        <form id="modal3" action="{{URL::to('phase4')}}" method="post">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label>مقاول النقل</label>
                            <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" name="transportation_contractor">
                          </div>
                          <div class="form-group">
                              <label>الوضع النهائي لجهات الفحص</label>
                              <select class="form-control select2" placeholder="" name="finalCheck" id="selectItems">
                                <option value="1">مطابقة</option>
                                <option value="2">أعادة سحب</option>
                              </select>
                            </div>
                          <div class="form-group">
                            <label>مطابقة</label>
                            <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" name="matching" id="text_1" disabled>
                          </div>
                          <div class="form-group">
                            <label>أعادة سحب</label>
                            <input type="text" class="form-control glyphicon glyphicon-log-in" placeholder="" name="resetting" id="text_2" disabled>
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
                <div class="box-body" style="width: auto; overflow: auto; overflow: scroll;">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>المستورد</th>
                        <th>عددالحاويات (٢٠ قدم)</th>
                        <th>عددالحاويات (٤٠ قدم)</th>
                        <th>عدد الكراتين</th>
                        <th>رقم البوليصة</th>
                        <th>الصنف</th>
                        <th>التوكيل الملاحي</th>
                        <th>تاريخ وصول المستندات</th>
                        <th>ملاحظات</th>
                        <th>قام بإضافة الشهادة</th>
                        <th></th>
                        <th></th>
                        <!--<th></th>
                        <th></th>-->
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($customs as $custom)
                      <tr>
                        <td>{{$custom->client_name}}</td>
                        <td>{{$custom->container_20}}</td>
                        <td>{{$custom->container_40}}</td>
                        <td>{{$custom->box_number}}</td>
                        <td>{{$custom->policy_no}}</td>
                        <td>{{$custom->type}}</td>
                        <td>{{$custom->powerOfAttorney}}</td>
                        <td>{{$custom->doc_date}}</td>
                        <td>{{$custom->notes}}</td>
                        <td>{{$custom->employee_name}}</td>
                        <td>
                          <ul style="list-style-type: none;">
                            <li><button onclick="change_action({{$custom->id}})" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-1">متابعة الجزء الأول</button></li>
                            <li><button onclick="change_action({{$custom->id}})" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-2">متابعة الجزء الثاني</button></li>
                            <li><button onclick="change_action({{$custom->id}})" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-3">متابعة الجزء الثالث</button></li>
                          </ul>
                        </td>
                        <td>
                          <ul style="list-style-type: none;">
                            <li><a onclick="change_action({{$custom->cc_id}})" id="finReport" href="{{URL::to('financialReport/'.$custom->id)}}"><button class="btn btn-block btn-success btn-sm">إضافة جدول مالي</button></a></li>
                            <li><a href="{{URL::to('episode/delete/'.$custom->id)}}" class="btn btn-block btn-danger btn-sm" id="delete_btn">مسح</a></li>
                          </ul>
                        </td>

                    @endforeach

                      </tr>
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
    <script>
      function change_action(id){
          document.getElementById("modal1").action += '/' + id;
          document.getElementById("modal2").action += '/' + id;
          document.getElementById("modal3").action += '/' + id;
          document.getElementById("finReport").action += '/' + id;
      }

      $( function() {
      $( ".datepicker" ).datepicker();
      } );

      oTable = $("#example1").dataTable({
          "columnDefs": [{
              "defaultContent": "-",
              "targets": "_all"
          }]
      });

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

      $(document).ready(function () {
          $("#delete_btn").click(function () {
              if(confirm("هل أنت متأكد؟") == true){

              }
          })
      })

    </script>
  </body>
</html>

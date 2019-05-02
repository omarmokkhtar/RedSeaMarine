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
<body class="skin-blue sidebar-mini"  dir="rtl" >
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






<!------------------------------------------------   CLIENT REGISTRATION TABLE  -------------------------------------------->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                جدول البيانات
            </h1>
        </section>
        <!-- Main content -->
        <section class="content" >
            <div class="row"  >
                <div class="col-xs-12">
                    <!-- /.box -->
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">كل الشهادات المفتوحة</h3>
                            <div  style="float: left;" >
                                <button class="btn btn-block btn-primary btn-lg" style="background-color: #3c8dbc" onclick="printData()" id="printPage">طباعة</button>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body" style="width: auto; overflow: auto; overflow: scroll;" >

                            <table id="printTable" class="table table-bordered table-striped"  dir="rtl">
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
                                    <th>تاريخ وصول الحاوية</th>
                                    <th>تاريخ سحب الإذن</th>
                                    <th>تاريخ تسجيل الشهادة</th>
                                    <th>رقم الشهادة</th>
                                    <th>رقم طلب الفحص</th>
                                    <th>المبدئي</th>
                                    <th>تاريخ الكشف</th>
                                    <th>الجمرك بعد التثمين</th>
                                    <th>رسوم الهيئة</th>
                                    <th>التحويل</th>
                                    <th>مقاول النقل</th>
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
                                        <td>{{$custom->container_arrival}}</td>
                                        <td>{{$custom->date_of_withdrawal}}</td>
                                        <td>{{$custom->certificate_reg}}</td>
                                        <td>{{$custom->certificate_no}}</td>
                                        <td>{{$custom->checkup_date}}</td>
                                        <td>{{$custom->primary}}</td>
                                        <td>{{$custom->detection_date}}</td>
                                        <td>{{$custom->customs_after_precious}}</td>
                                        <td>{{$custom->commission_fees}}</td>
                                        <td>{{$custom->transaction}}</td>
                                        <td>{{$custom->transportation_contractor}}</td>


                                    </tr>
                                    <tr>
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

        oTable = $("#example1").dataTable({
            "columnDefs": [{
                "defaultContent": "-",
                "targets": "_all"
            }]
        });


        function printData()
        {
            var divToPrint=document.getElementById("printTable");

            var htmlToPrint = '' +
                '<style type="text/css">' +
                'table th, table td {' +
                'border:1px solid #000;' +
                'padding;0.5em;' +
                '}' +
                '</style>';
            htmlToPrint += divToPrint.outerHTML;

            newWin= window.open("");
            newWin.document.write(htmlToPrint);
            newWin.print();
            newWin.close();
        }


    </script>
</body>
</html>

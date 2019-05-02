<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="dist/img/user-male-icon.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info" style="font-family: Sans-Serif, Serif, 'Times New Roman', Times;">
                <p>{{$name}}</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->


        <!------------------------------------------------   ADMIN PART   -------------------------------------------->
        <ul class="sidebar-menu">
            <li class="header">
                لوحة التحكم
            </li>
            <!--<li><a href="../../AdminHomePage.html"><i class="fa fa-home text-aqua"></i><span>الصفحة الرئيسية</span></a></li>-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-o text-green"></i>
                    <span>إضافة شهادات</span>
                    <i class="fa fa-angle-left pull-left text-green"></i>
                </a>
                <ul class="treeview-menu">
                    <li> <a href="{{URL::to('episode')}}"><i class="fa fa-file-text text-green"></i> إضافة شهادة جديدة</a></li>
                    <li><a href="{{URL::to('completeEpisodes')}}"><i class="fa fa-file-text text-green"></i> أستكمال بيانات الشهادات</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table text-green"></i>
                    <span>جدول البيانات</span>
                    <i class="fa fa-angle-left pull-left text-green"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{URL::to('episodes')}}"><i class="fa fa-file-text-o text-green"></i>كل الشهادات المفتوحة</a></li>
                    <li><a href="{{URL::to('archive')}}"><i class="fa fa-file-archive-o text-green"></i>الأرشيف</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o text-aqua"></i>
                    <span>التسجيل</span>
                    <i class="fa fa-angle-left pull-left text-aqua"></i>
                </a>

                <ul class="treeview-menu">

                    <li>  <a href="{{URL::to('admins')}}"><i class="fa fa-black-tie text-aqua"></i> تسجيل المشرفين</a></li>

                    <li><a href="{{URL::to('clients')}}"><i class="fa fa-briefcase text-aqua"></i> تسجيل العملاء</a></li>
                </ul>
            </li>
            <li><a href="{{URL::to('print')}}"><i class="fa fa-print text-aqua"></i><span>الطباعة</span></a></li>
            <li><a href="{{URL::to('returnChangePass')}}"><i class="fa fa-lock text-red"></i><span>تغيير كلمة المرور</span></a></li>
            <li><a href="{{URL::to('logout')}}"><i class="fa fa-lock text-red"></i><span>تسجيل خروج</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{$name}}</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->


        <!------------------------------------------------   CLIENT PART   -------------------------------------------->
        <ul class="sidebar-menu">
            <li class="header">
                العملاء
            </li>
            <!--<li><a href="ClientHomePage.blade.php"><i class="fa fa-home text-aqua"></i><span>الصفحة الرئيسية</span></a></li>-->
            <li><a href="{{URL::to('allEpisodes')}}"><i class="fa  fa-table text-green"></i><span>بيانات الشهادات المفتوحة</span></a></li>
            <li><a href="{{URL::to('returnClientChangePass')}}"><i class="fa fa-lock text-red"></i><span>تغيير كلمة المرور</span></a></li>
            <li><a href="{{URL::to('logout')}}"><i class="fa fa-lock text-red"></i><span>Logout</span></a></li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>

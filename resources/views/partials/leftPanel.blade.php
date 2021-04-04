<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            </div>
            <div class="pull-left info">
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{!! url('/dashboard-v1') !!}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{!! url('/room') !!}">
                    <i class="fa fa-dashboard"></i> <span>Room</span>
                </a>
            </li>
            <li>
                <a href="{!! url('/registers') !!}">
                    <i class="fa fa-dashboard"></i> <span>Booking List</span>
                </a>
            </li>

            <li>
                <a href="{!! url('/feedback') !!}">
                    <i class="fa fa-dashboard"></i> <span>Feedback</span>
                </a>
            </li>
            <li>
                <a href="{!! url('/inventory') !!}">
                    <i class="fa fa-dashboard"></i> <span>Inventory</span>
                </a>
            </li>
            <hr>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-circle-o"></i> <span>log Out</span>
                </a>
            </li>
    </section>
    <!-- /.sidebar -->
</aside>
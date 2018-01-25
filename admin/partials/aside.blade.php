<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{!!user()->picture!!}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{!!user()->name!!}</p>
        <a href="{!!guard_url('profile')!!}"><i class="fa fa-user  text-success"></i> Profile</a>
        <a href="{!!guard_url('logout')!!}"><i class="fa fa-power-off text-warning"></i> Logout</a>
      </div>
    </div>
    <!-- search form -->

    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      {!!Menu::menu('admin', 'menu::menu.admin')!!}
      <li class="header">Masters</li>
      <li><a href="{{ guard_url('settings/setting') }}"><i class="fa fa-sliders text-red"></i> <span>Settings</span></a></li>
      <li><a href="{{ guard_url('masters') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Masters</span></a></li>
      <li><a href="{{ guard_url('reports') }}"><i class="fa fa-bar-chart text-aqua"></i> <span>Reports</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ url('images/default/no-image.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Admin </p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
    <?php
    ?>
  <ul class="sidebar-menu">
    <li class="header">NAVIGASI</li>
    <li class="treeview" id="menu_dashboard">
      <a href="{{ url('ladmin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
    </li>
    <li class="treeview" id="menu_gallery">
      <a href="{{ url('ladmin/gallery/list') }}"><i class="fa fa-link"></i> <span>My Links</span></a>
    </li>
    <li class="header">AKUN</li>
    <li class="treeview" id="menu_gallery">
      <a href="#"><i class="fa fa-user"></i> <span>Profile</span></a>
    </li>
    <li class="">
      <a href="#"
         onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i> <span>Logout</span>
      </a>
    </li>
  </ul>
</section>
<!-- /.sidebar -->

<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>


<!-- Logo -->
<a href="{{ url('ladmin') }}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b><span class="fa fa-sitemap"></span></b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>MyLink App</b> {{ config('site.name') }}</span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i> <span class="label label-warning">0</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Anda belum memiliki Notifikasi</li>
          <li class="footer"><a href="{{ url('ladmin/dashboard') }}">Lihat semua</a></li>

        </ul>
      </li>
    </ul>
  </div>

</nav>

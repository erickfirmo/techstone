<!-- Main Header -->
<header class="main-header">

<!-- Logo -->
<a href="<?php route('/admin'); ?>" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>T</b>S</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>Tech</b>Stone</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="https://avatars3.githubusercontent.com/u/34639603?s=460&v=4" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs"><?php auth('name').auth('lastname'); ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="https://avatars3.githubusercontent.com/u/34639603?s=460&v=4" class="img-circle" alt="User Image">

            <p>
              <?php auth('name').auth('lastname'); ?>- Web Developer
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->

          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Perfil</a>
            </div>
            <div class="pull-right">
              <form method="POST" action="<?php route('/auth/admin/logout'); ?>">
                <input type="submit" class="btn btn-default btn-flat" value="Sair">
                </form>
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</nav>
</header>
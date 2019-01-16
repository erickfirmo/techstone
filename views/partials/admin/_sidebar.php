<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php url('/node_modules/admin-lte/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?php auth('name').auth('lastname'); ?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Buscar...">
      <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
    </div>
  </form>
  <!-- /.search form -->

  

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">NAVEGAÇÃO</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="<?php classActiveUrl('/'); ?>">
      <a href="<?php url('/admin/home'); ?>">
        <i class="fa fa-link"></i>
        <span>Home</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-link"></i>
        <span>Posts</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="<?php classActiveUrl('/admin/posts'); ?>">
          <a href="<?php url('/posts'); ?>">Todos os Posts</a>
        </li>
        <li class="<?php classActiveUrl('/admin/posts/create'); ?>">
          <a href="<?php url('/posts/create'); ?>">Adicionar Post</a>
        </li>
      </ul>
    </li>
    <li class="<?php classActiveUrl('/'); ?>">
      <a href="<?php url('/admin/mensagens'); ?>">
        <i class="fa fa-envelope"></i>
        <span>Mensagens</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-red">15</small>
        </span>
      </a>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
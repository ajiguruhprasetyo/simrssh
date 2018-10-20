<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/photo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>RSU Sarila Husada</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DASHBOARD</li>
        <?php if (\Entrust::can('')) : ?>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo e(route('jabatan.index')); ?>"><i class="fa fa-circle-o"></i> Jabatan</a></li>
            <li><a href="<?php echo e(route('unit_kerja.index')); ?>"><i class="fa fa-circle-o"></i> Unit Kerja</a></li>
          </ul>
        </li>
        <?php endif; // Entrust::can ?>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li> -->
        <?php if (\Entrust::can('read-rehabmedik')) : ?>
        <li>
          <a href="<?php echo e(route('rehabmedik.index')); ?>">
            <i class="fa fa-th"></i> <span>Rehabilitasi Medik</span>
          </a>
        </li>
        <?php endif; // Entrust::can ?>

         <?php if (\Entrust::can('ppi-list')) : ?>
        <li>
          <a href="<?php echo e(route('ppi.index')); ?>">
            <i class="fa fa-th"></i> <span>Surveilance</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <?php endif; // Entrust::can ?>

        <?php if (\Entrust::can('areaindikator-list')) : ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Indikator Mutu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('areaindikator.index')); ?>"><i class="fa fa-circle-o"></i> Kamus Indikator</a></li>
            <li><a href="<?php echo e(route('angkaindikator.index')); ?>"><i class="fa fa-circle-o"></i> Angka Indikator</a></li>
            <li><a href="<?php echo e(route('kejadianindikator.index')); ?>"><i class="fa fa-circle-o"></i> Kejadian Indikator</a></li>
          </ul>
        </li>
        <?php endif; // Entrust::can ?>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <?php if (\Entrust::can('laporan-rehabmedik')) : ?>
            <li><a href="<?php echo e(route('rehabmedik.laporan')); ?>"><i class="fa fa-circle-o"></i> Rehab Medik</a></li>
          <?php endif; // Entrust::can ?>

          <?php if (\Entrust::can('angkaindikator-laporan')) : ?>
            <li><a href="<?php echo e(route('angkaindikator.laporan')); ?>"><i class="fa fa-circle-o"></i> Angka Indikator</a></li>
          <?php endif; // Entrust::can ?>

          <?php if (\Entrust::can('kejadianindikator-laporan')) : ?>
            <li><a href="<?php echo e(route('kejadianindikator.laporan')); ?>"><i class="fa fa-circle-o"></i> Kejadian Indikator</a></li>
          <?php endif; // Entrust::can ?>
            <!-- <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li> -->
          </ul>
        </li>
        <?php if (\Entrust::can('role-list')) : ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User Manajemen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-circle-o"></i> User</a></li>
            <li><a href="<?php echo e(route('roles.index')); ?>"><i class="fa fa-circle-o"></i> Role</a></li>
          </ul>
        </li>
        <?php endif; // Entrust::can ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<h2>Administrasi</h2>
            <div class="panel-group">
                <div class="panel panel-success">          
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="<?php echo e(url('/home')); ?>">Dashboard</a>
                    </h4>
                  </div>
                </div>
            </div>

  <div class="panel-group" id="accordion">
    <div class="panel panel-info">

      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapsex">Master</a>
        </h4>
      </div>
      <div id="collapsex" class="panel-collapse collapse">
        <div class="panel-body">
          <?php if (\Entrust::can('unit_kerja-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('unit_kerja.index')); ?>">Unit Kerja</a>
          <?php endif; // Entrust::can ?>

          <?php if (\Entrust::can('jabatan-list')) : ?>  
            <a class="list-group-item" href="<?php echo e(route('jabatan.index')); ?>">Jabatan</a>
          <?php endif; // Entrust::can ?>

          <?php if (\Entrust::can('karyawan-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('karyawan.index')); ?>">Karyawan</a>
          <?php endif; // Entrust::can ?>
        </div>
      </div>

      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Inventory</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <?php if (\Entrust::can('item-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('itemCRUD2.index')); ?>">Barang ATK</a>
          <?php endif; // Entrust::can ?>
            <a class="list-group-item" href="#">Barang Alkes</a>
            <a class="list-group-item" href="#">Barang IT</a>
        </div>
      </div>
   
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Administasi</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          
          <?php if (\Entrust::can('humas-list')) : ?>
           <a class="list-group-item" href="<?php echo e(route('humas.index')); ?>">SK Karyawan</a>
          <?php endif; // Entrust::can ?>

          <?php if (\Entrust::can('complaint-list')) : ?>
           <a class="list-group-item" href="<?php echo e(route('complaint.index')); ?>">Kritik Saran</a>
          <?php endif; // Entrust::can ?>
          
          <?php if (\Entrust::can('cuti-list')) : ?>
           <a class="list-group-item" href="<?php echo e(route('cuti.index')); ?>">Cuti</a>
          <?php endif; // Entrust::can ?>

           <?php if (\Entrust::can('arisan-list')) : ?>
           <a class="list-group-item" href="<?php echo e(route('arisan.index')); ?>">Arisan</a>
          <?php endif; // Entrust::can ?>

        </div>
      </div>
   
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Laporan</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="list-group">

              <?php if (\Entrust::can('humas-laporan')) : ?>
                <a class="list-group-item" href="<?php echo e(route('humas.laporan')); ?>">Surat Keputusan</a>
              <?php endif; // Entrust::can ?>

              <?php if (\Entrust::can('complaint-laporan')) : ?>
                <a class="list-group-item" href="<?php echo e(route('complaint.laporan')); ?>">Kritik Saran</a>
              <?php endif; // Entrust::can ?>

                <a class="list-group-item" href="#">Barang ATK</a>
            </div>
        </div>
      </div>
      
      <?php if (\Entrust::can('role-list')) : ?>
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Manage user</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="list-group">
                <a class="list-group-item" href="<?php echo e(route('users.index')); ?>">Users</a>
                <a class="list-group-item" href="<?php echo e(route('roles.index')); ?>">Roles</a>
            </div>
        </div>
      </div>
      <?php endif; // Entrust::can ?>

    </div>
  </div> 
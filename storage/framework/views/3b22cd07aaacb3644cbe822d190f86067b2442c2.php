

            <div class="panel-group">
                <div class="panel panel-success">          
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <img height="55px" width="auto" src="<?php echo e(url('images/logo.png')); ?>"><br>
                      <a href="<?php echo e(url('/home')); ?>" class="text-center">E-SIMRS</a>
                    </h4>
                  </div>
                </div>
            </div>

  <div class="panel-group" id="accordion">
    <div class="panel panel-info">

      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapsex">Kamus Indikator RS</a>
        </h4>
      </div>
      <div id="collapsex" class="panel-collapse collapse">
        <div class="panel-body">
          <?php if (\Entrust::can('areaindikator-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('areaindikator.index')); ?>">Kamus Indikator</a>
          <?php endif; // Entrust::can ?>

          <!-- <?php if (\Entrust::can('areaindikator-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('subai.index')); ?>">Sub Area Indikator</a>
          <?php endif; // Entrust::can ?> -->

           <?php if (\Entrust::can('unit_kerja-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('unit_kerja.index')); ?>">Unit Kerja</a>
          <?php endif; // Entrust::can ?>

          <!--<?php if (\Entrust::can('jabatan-list')) : ?>  
            <a class="list-group-item" href="<?php echo e(route('jabatan.index')); ?>">Jabatan</a>
          <?php endif; // Entrust::can ?>

          <?php if (\Entrust::can('karyawan-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('karyawan.index')); ?>">Karyawan</a>
          <?php endif; // Entrust::can ?> -->
        </div>
      </div>

      <!-- <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Inventory</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <?php if (\Entrust::can('item-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('itemCRUD2.index')); ?>">Barang ATK</a>
          <?php endif; // Entrust::can ?>
        </div>
      </div> -->
      <?php if (\Entrust::can('pmkp-list')) : ?>
       <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse30">Input Data Mutu Harian</a>
        </h4>
      </div>
      <div id="collapse30" class="panel-collapse collapse">
        <div class="panel-body">
          
            <!-- <a class="list-group-item" href="<?php echo e(route('pmkp.index')); ?>">Rumus Indikator</a>
         
            <a class="list-group-item" href="<?php echo e(route('laporanpmkp.index')); ?>">Data Pmkp</a> -->

            
          <?php if (\Entrust::can('angkaindikator-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('angkaindikator.index')); ?>">Angka Indikator</a>
          <?php endif; // Entrust::can ?>

           <?php if (\Entrust::can('kejadianindikator-list')) : ?>
            <a class="list-group-item" href="<?php echo e(route('kejadianindikator.index')); ?>">Kejadian Indikator</a>
          <?php endif; // Entrust::can ?>
        </div>
      </div>
      <?php endif; // Entrust::can ?>
      
      <?php if (\Entrust::can('read-rehabmedik')) : ?>
      <div class="panel-heading">
        <h4 class="panel-title">
            <a href="<?php echo e(route('rehabmedik.index')); ?>">Rehab Medik</a>
        </h4>
      </div>
      <?php endif; // Entrust::can ?>
          
      <?php if (\Entrust::can('ppi-list')) : ?>
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="<?php echo e(route('ppi.index')); ?>">Surveilance</a>
        </h4>
      </div>
      <?php endif; // Entrust::can ?>
   
   
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

          <!-- <?php if (\Entrust::can('arisan-list')) : ?>
           <a class="list-group-item" href="<?php echo e(route('arisan.index')); ?>">Arisan</a>
          <?php endif; // Entrust::can ?> -->

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

              <?php if (\Entrust::can('laporan-rehabmedik')) : ?>
                <a class="list-group-item" href="<?php echo e(route('rehabmedik.laporan')); ?>">Rehab Medik</a>
              <?php endif; // Entrust::can ?>

              <?php if (\Entrust::can('complaint-laporan')) : ?>
                <a class="list-group-item" href="<?php echo e(route('complaint.laporan')); ?>">Kritik Saran</a>
              <?php endif; // Entrust::can ?>
              <?php if (\Entrust::can('ppi-laporan')) : ?>
                <a class="list-group-item" href="<?php echo e(route('ppi.laporan')); ?>">Surveilance</a>
              <?php endif; // Entrust::can ?>
              <?php if (\Entrust::can('angkaindikator-laporan')) : ?>
                <a class="list-group-item" href="<?php echo e(route('angkaindikator.laporan')); ?>">Angka Indikator</a>
              <?php endif; // Entrust::can ?>
              <?php if (\Entrust::can('kejadianindikator-laporan')) : ?>
                <a class="list-group-item" href="<?php echo e(route('kejadianindikator.laporan')); ?>">Kejadian Indikator</a>
              <?php endif; // Entrust::can ?>
              
            </div>
        </div>
      </div>
      
      <?php if (\Entrust::can('role-list')) : ?>
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Manage</a>
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
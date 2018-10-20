<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2> Data Karyawan</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="<?php echo e(route('karyawan.index')); ?>"> Back</a>

	        </div>

	    </div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <?php echo e($karyawan->nama_karyawan); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>TTL:</strong>

                <?php echo e($karyawan->tmp_lahir); ?>, <?php echo e($karyawan->tgl_lahir); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Agama:</strong>

                <?php echo e($karyawan->agama); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Status:</strong>

                <?php echo e($karyawan->status); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Hp:</strong>

                <?php echo e($karyawan->no_hp); ?>


            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Unit:</strong>

                <?php echo e($karyawan->id_unit_kerja); ?>


            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                <?php echo e($karyawan->alamat); ?>


            </div>

        </div>
		<div class="pull-left">

	        <a class="btn btn-sm btn-success" href="#">Print</a>

	    </div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
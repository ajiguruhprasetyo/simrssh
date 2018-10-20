<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2> Show Jabatan</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="<?php echo e(route('jabatan.index')); ?>"> Back</a>

	        </div>

	    </div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jabatan :</strong>

                <?php echo e($jabatan->jabatan); ?>


            </div>

        </div>

		<div class="pull-left">

	        <a class="btn btn-sm btn-success" href="#">Print</a>

	    </div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
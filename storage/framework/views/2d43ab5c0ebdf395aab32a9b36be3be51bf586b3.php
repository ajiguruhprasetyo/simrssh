<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-10 col-lg-offset-2 margin-tb">

	        <div class="pull-left">

	            <h2>Menambahkan No Surat RSSH</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="<?php echo e(route('humas.index')); ?>">Kembali</a>

	        </div>

	    </div>

	</div>

	<?php if(count($errors) > 0): ?>

		<div class="alert alert-danger">

			<strong>Whoops!</strong> There were some problems with your input.<br><br>

			<ul>

				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<li><?php echo e($error); ?></li>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</ul>

		</div>

	<?php endif; ?>

	<?php echo Form::open(array('route' => 'humas.store','method'=>'POST')); ?>


	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Surat :</strong>

                <?php echo Form::text('surat', null, array('placeholder' => 'XX/XX/XXX/2018','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Ditetapkan :</strong>

                <?php echo Form::date('tanggal', \Carbon\Carbon::now(), array('placeholder' => 'XX/XX/XXXX','class' => 'form-control')); ?>


            </div>

        </div>

     

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan:</strong>

                <?php echo Form::textarea('keterangan', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-sm btn-primary">Submit</button>

        </div>

	</div>

	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
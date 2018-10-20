<?php $__env->startSection('content'); ?>

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

	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Menambahkan Jabatan</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('jabatan.index')); ?>"> Kembali</a> 
			<br>
			<?php echo Form::open(array('route' => 'jabatan.store','method'=>'POST')); ?>

			
					<div class="form-group">
						<strong>Jabatan :</strong>
						<?php echo Form::text('jabatan', null, array('placeholder' => 'Jabatan Anda ...','class' => 'form-control')); ?>

					</div>
					<button type="submit" class="btn btn-sm btn-primary">Submit</button>
				
			<?php echo Form::close(); ?>	
		</div><!-- /.box-body -->
	</div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
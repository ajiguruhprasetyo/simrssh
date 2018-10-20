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
			<h3 class="box-title">Menambahkan Unit Kerja</h3>
			<div class="box-tools pull-right">
				<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('unit_kerja.index')); ?>"> Kembali</a> 
			<br>
			<?php echo Form::open(array('route' => 'unit_kerja.store','method'=>'POST')); ?>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Unit Kerja :</strong>
							<?php echo Form::text('unit_kerja', null, array('placeholder' => 'Unit Kerja Anda ...','class' => 'form-control')); ?>

						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Keterangan:</strong>
							<?php echo Form::textarea('keterangan', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')); ?>

						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-center">
							<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			<?php echo Form::close(); ?>

		</div><!-- /.box-body -->
	</div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
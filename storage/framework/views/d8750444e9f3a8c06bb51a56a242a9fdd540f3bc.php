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
			<h3 class="box-title">Menambahkan Role Baru</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('roles.index')); ?>"> Kembali</a> 
			<br>
			<?php echo Form::open(array('route' => 'roles.store','method'=>'POST')); ?>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Name:</strong>
							<?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>

						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Display Name:</strong>
							<?php echo Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control')); ?>

						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Description:</strong>
							<?php echo Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')); ?>

						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Permission:</strong>
							<br/>
							<?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<label><?php echo e(Form::checkbox('permission[]', $value->id, false, array('class' => 'name'))); ?>

								<?php echo e($value->display_name); ?></label>
								<br/>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
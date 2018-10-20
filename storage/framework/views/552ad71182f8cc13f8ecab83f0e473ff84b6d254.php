<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-lg-12">
			
			<?php if($message = Session::get('success')): ?>
				<div class="alert alert-success">
					<p><?php echo e($message); ?></p>
				</div>
			<?php endif; ?>

				<div class="box box-primary">
				
					<div class="box-header with-border">
							<h3 class="box-title">Data Role</h3>
						<div class="box-tools pull-right">	
							<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
						</div><!-- /.box-tools -->
					</div><!-- /.box-header -->
					
					<div class="box-body">
						<?php if (\Entrust::can('role-create')) : ?>
							<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('roles.create')); ?>">Tambah</a>
						<?php endif; // Entrust::can ?>
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Description</th>
							<th width="280px">Action</th>
						</tr>
						<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e(++$i); ?></td>
								<td><?php echo e($role->display_name); ?></td>
								<td><?php echo e($role->description); ?></td>
								<td>
									<a class="btn btn-sm btn-info" href="<?php echo e(route('roles.show',$role->id)); ?>">Show</a>
									<?php if (\Entrust::can('role-edit')) : ?>
										<a class="btn btn-sm btn-primary" href="<?php echo e(route('roles.edit',$role->id)); ?>">Edit</a>
									<?php endif; // Entrust::can ?>
									<?php if (\Entrust::can('role-delete')) : ?>
										<?php echo Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']); ?>

											<?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>

										<?php echo Form::close(); ?>

									<?php endif; // Entrust::can ?>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
					<?php echo $roles->render(); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
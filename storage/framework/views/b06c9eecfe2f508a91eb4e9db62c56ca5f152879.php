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
						<h3 class="box-title">Data User</h3>
					<div class="box-tools pull-right">	
						<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">
					<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('users.create')); ?>"> Tambah User</a>
					<a class="btn btn-sm btn-default pull-right" href="<?php echo e(route('users.download')); ?>"> Download</a> 
				
						<table class="table table-bordered">
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Alamat Email</th>
								<th>Roles</th>
								<th width="280px">Action</th>
							</tr>
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e(++$i); ?></td>
								<td><?php echo e($user->name); ?></td>
								<td><?php echo e($user->email); ?></td>
								<td>
									<?php if(!empty($user->roles)): ?>
										<?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<label class="label label-success"><?php echo e($v->display_name); ?></label>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
								</td>
								<td>
									<a class="btn btn-info" href="<?php echo e(route('users.show',$user->id)); ?>">Show</a>
									<a class="btn btn-primary" href="<?php echo e(route('users.edit',$user->id)); ?>">Edit</a>
									<?php echo Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']); ?>

									<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

									<?php echo Form::close(); ?>

								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
					<?php echo $data->render(); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
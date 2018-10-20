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
				<h3 class="box-title">Data Jabatan</h3>
				<div class="box-tools pull-right">
						
							<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
						
				</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">
					<?php if (\Entrust::can('jabatan-create')) : ?>
						<a class="pull-right btn btn-sm btn-success" href="<?php echo e(route('jabatan.create')); ?>">Tambah</a> 
					<?php endif; // Entrust::can ?>

						<table class="table table-bordered">

							<tr>
								<th>No</th>
								<th>Jabatan</th>
								<th width="280px">Aksi</th>
							</tr>

						<?php $__currentLoopData = $jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<tr>
							<td><?php echo e(++$i); ?></td>
							<td><?php echo e($j->jabatan); ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="<?php echo e(route('jabatan.show',$j->id)); ?>">Show</a>
								
								<?php if (\Entrust::can('jabatan-edit')) : ?>
									<a class="btn btn-sm btn-primary" href="<?php echo e(route('jabatan.edit',$j->id)); ?>">Edit</a>
								<?php endif; // Entrust::can ?>

								<?php if (\Entrust::can('jabatan-delete')) : ?>
									<?php echo Form::open(['method' => 'DELETE','route' => ['jabatan.destroy', $j->id],'style'=>'display:inline']); ?>

									<?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>

									<?php echo Form::close(); ?>

								<?php endif; // Entrust::can ?>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
					<?php echo $jabatans->render(); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
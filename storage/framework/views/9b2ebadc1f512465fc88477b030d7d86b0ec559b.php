<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Unit Kerja</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	<?php if (\Entrust::can('unit_kerja-create')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('unit_kerja.create')); ?>"> Create New Unit Kerja</a>

	            <?php endif; // Entrust::can ?>

	        </div>

	    </div>

	</div>

	<?php if($message = Session::get('success')): ?>

		<div class="alert alert-success">

			<p><?php echo e($message); ?></p>

		</div>

	<?php endif; ?>

	<table class="table table-bordered">

		<tr>

			<th>No</th>

			<th>Unit Kerja</th>

			<th>Keterangan</th>

			<th width="280px">Aksi</th>

		</tr>

	<?php $__currentLoopData = $unit_kerja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>

		<td><?php echo e(++$i); ?></td>

		<td><?php echo e($uk->unit_kerja); ?></td>

		<td><?php echo e($uk->keterangan); ?></td>

		<td>

			<a class="btn btn-sm btn-info" href="<?php echo e(route('unit_kerja.show',$uk->id)); ?>">Show</a>

			<?php if (\Entrust::can('unit_kerja-edit')) : ?>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('unit_kerja.edit',$uk->id)); ?>">Edit</a>

			<?php endif; // Entrust::can ?>

			<?php if (\Entrust::can('unit_kerja-delete')) : ?>

				<?php echo Form::open(['method' => 'DELETE','route' => ['unit_kerja.destroy', $uk->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


        	<?php endif; // Entrust::can ?>

		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $unit_kerja->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
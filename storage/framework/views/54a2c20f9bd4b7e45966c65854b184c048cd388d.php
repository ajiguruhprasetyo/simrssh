<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Arisan</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	<?php if (\Entrust::can('arisan-create')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('arisan.create')); ?>"> Menambahkan data arisan</a>

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

			<th>Nama</th>

			<th>Tanggal</th>

			<th>Status</th>

			<th>Jumlah Setoran</th>

			<th></th>

		</tr>

	<?php $__currentLoopData = $arisans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>

		<td><?php echo e(++$i); ?></td>

		<td><?php echo e($a->nama); ?></td>

		<td><?php echo e(date_format ( date_create($a->tanggal), "d F Y" )); ?></td>

		<td><?php echo e(($a->status)); ?></td>

		<td><?php echo e($a->setoran); ?></td>

		<td>

			<a class="btn btn-sm btn-info" href="<?php echo e(route('arisan.show',$a->id)); ?>">Show</a>

			<?php if (\Entrust::can('arisan-edit')) : ?>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('arisan.edit',$a->id)); ?>">Edit</a>

			<?php endif; // Entrust::can ?>

			<?php if (\Entrust::can('arisan-delete')) : ?>

				<?php echo Form::open(['method' => 'DELETE','route' => ['arisan.destroy', $a->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


        	<?php endif; // Entrust::can ?>

		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $arisans->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
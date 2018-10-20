 

<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Kritik dan Saran Pasien</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	<?php if (\Entrust::can('complaint-create')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('complaint.create')); ?>"> Create New Data</a>

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

			<th>No HP</th>

			<th>Tanggal</th>

			<th>Alamat</th>

			<th>Kritik Saran</th>

			<th>Tanggal Feedback</th>

			<th>Feedback</th>

			<th width="280px">Aksi</th>

		</tr>

	<?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>

		<td><?php echo e(++$i); ?></td>

		<td><?php echo e($c->nama); ?></td>

		<td><?php echo e($c->no_hp); ?></td>

		<td><?php echo e(date_format ( date_create($c->tanggal), "d F Y" )); ?></td>

		<td><?php echo e($c->alamat); ?></td>

		<td><?php echo e($c->kritik_saran); ?></td>

		<td><?php echo e(date_format ( date_create($c->tgl_feedback), "d F Y" )); ?></td>

		<td><?php echo e($c->feedback); ?></td>

		<td>

			<a class="btn btn-sm btn-info" href="<?php echo e(route('complaint.show',$c->id)); ?>">Show</a>

			<?php if (\Entrust::can('complaint-edit')) : ?>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('complaint.edit',$c->id)); ?>">Edit</a>

			<?php endif; // Entrust::can ?>

			<?php if (\Entrust::can('complaint-delete')) : ?>

				<?php echo Form::open(['method' => 'DELETE','route' => ['complaint.destroy', $c->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


        	<?php endif; // Entrust::can ?>

		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $complaints->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
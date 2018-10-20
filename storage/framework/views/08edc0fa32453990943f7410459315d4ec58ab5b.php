<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Indikator Mutu</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('laporanpmkp.create')); ?>"> Menambah Indikator Mutu</a>

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

			<th>Judul Indikator</th>

			<th>Numerator</th>

			<th>Denumerator</th>

			<th>Tanggal</th>


			<th width="280px">Aksi</th>

		</tr>

	<?php $__currentLoopData = $lappmkps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>

		<td><?php echo e($p->id); ?></td>

		<td><?php echo e($p->judul_indikator); ?></td>

		<td><?php echo e($p->numerator); ?></td>

		<td><?php echo e($p->denominator); ?></td>

		<td><?php echo e($p->created_at); ?></td>

		<td>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('laporanpmkp.edit',$p->id)); ?>">Edit</a>


				<?php echo Form::open(['method' => 'DELETE','route' => ['laporanpmkp.destroy', $p->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
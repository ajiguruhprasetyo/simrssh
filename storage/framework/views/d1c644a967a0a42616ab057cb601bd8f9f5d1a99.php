<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Indikator Mutu</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('pmkp.create')); ?>"> Menambah Indikator Mutu</a>

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

			<th>No. Dokumen</th>

			<th>Judul Sasaran Mutu</th>

			<th>Target</th>


			<th width="280px">Aksi</th>

		</tr>

	<?php $__currentLoopData = $pmkps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>

		<td><?php echo e($p->id); ?></td>

		<td><?php echo e($p->unitkerja); ?></td>

		<td><?php echo e($p->kode_pmkp); ?></td>

		<td><?php echo e($p->nama_ind_mutu); ?></td>

		<td><?php echo e($p->t_kerja); ?></td>

		<td>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('pmkp.edit',$p->id)); ?>">Edit</a>


				<?php echo Form::open(['method' => 'DELETE','route' => ['pmkp.destroy', $p->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $pmkps->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Sub Kategori Area Indikator</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	<?php if (\Entrust::can('subai-create')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('subai.create')); ?>"> Tambah Data</a>

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

			<th>Area Indikator</th>

		</tr>

	<?php $__currentLoopData = $subais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>

		<td><?php echo e(++$i); ?></td>

		<td><?php echo e($sub->sub_category); ?></td>

		<td><?php echo e($sub->areaindikator->nama_area_indikator); ?></td>

		<td>

<!-- 			<a class="btn btn-sm btn-info" href="<?php echo e(route('subai.show',$sub->id)); ?>">Show</a>
 -->
			<?php if (\Entrust::can('subai-edit')) : ?>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('subai.edit',$sub->id)); ?>">Edit</a>

			<?php endif; // Entrust::can ?>

			<?php if (\Entrust::can('subai-delete')) : ?>

				<?php echo Form::open(['method' => 'DELETE','route' => ['subai.destroy', $sub->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


        	<?php endif; // Entrust::can ?>

		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $subais->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
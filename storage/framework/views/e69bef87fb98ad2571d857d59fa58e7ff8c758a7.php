 

<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Karyawan</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	<?php if (\Entrust::can('karyawan-create')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('karyawan.create')); ?>"> Menambahkan karyawan baru</a>

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

			<th>Tempat Lahir</th>

			<th>Tanggal Lahir</th>

			<th>Agama</th>

			<th>Status</th>

			<th>No Hp</th>

			<th>Unit Kerja</th>

			<th>Alamat</th>

			<th width="280px">Aksi</th>

		</tr>

	<?php $__currentLoopData = $karyawans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>

		<td><?php echo e(++$i); ?></td>

		<td><?php echo e($k->nama_karyawan); ?></td>

		<td><?php echo e(($k->tmp_lahir)); ?></td>

		<td><?php echo e(date_format ( date_create($k->tgl_lahir), "d F Y" )); ?></td>

		<td><?php echo e($k->agama); ?></td>

		<td><?php echo e($k->status); ?></td>

		<td><?php echo e($k->no_hp); ?></td>
		
		<td><?php echo e($k->id_unit_kerja); ?></td>

		<td><?php echo e($k->alamat); ?></td>

		<td>

			<a class="btn btn-sm btn-info" href="<?php echo e(route('karyawan.show',$k->id)); ?>">Show</a>

			<?php if (\Entrust::can('karyawan-edit')) : ?>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('karyawan.edit',$k->id)); ?>">Edit</a>

			<?php endif; // Entrust::can ?>

			<?php if (\Entrust::can('karyawan-delete')) : ?>

				<?php echo Form::open(['method' => 'DELETE','route' => ['karyawan.destroy', $k->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


        	<?php endif; // Entrust::can ?>

		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $karyawans->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
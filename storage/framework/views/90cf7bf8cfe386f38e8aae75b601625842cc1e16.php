<?php $__env->startSection('content'); ?>
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Cuti Pegawai</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	<?php if (\Entrust::can('cuti-create')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('cuti.create')); ?>"> Create New Data</a>

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

			<th>Cuti</th>

			<th>Lama Cuti</th>

			<th>Unit Kerja</th>

			<th>Keterangan</th>

			<th width="280px">Aksi</th>

		</tr>

	<?php

    function tgl_indo($tanggal)
    {
    $bulan = array (
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
        );
        $sp = explode('-', $tanggal);

        $tgl_ind = $sp[2] . ' ' . $bulan[ (int)$sp[1] ] . ' ' . $sp[0];

        return $tgl_ind;
}
?>


	<?php $__currentLoopData = $cutis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


	<tr>

		<td><?php echo e(++$i); ?></td>

		<td><?php echo e($cu->id_karyawan); ?></td>

		<td><?php echo e($cu->cuti); ?></td>

		<td><?php echo e($cu->hari); ?> Hari</td> 

		<td><?php echo e($cu->id_unit_kerja); ?></td> 

		<td><?php echo e($cu->keterangan); ?></td>

		<td>

			<a class="btn btn-sm btn-info" href="<?php echo e(route('cuti.show',$cu->id)); ?>">Show</a>

			<?php if (\Entrust::can('cuti-edit')) : ?>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('cuti.edit',$cu->id)); ?>">Edit</a>

			<?php endif; // Entrust::can ?>

			<?php if (\Entrust::can('cuti-delete')) : ?>

				<?php echo Form::open(['method' => 'DELETE','route' => ['cuti.destroy', $cu->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


        	<?php endif; // Entrust::can ?>

		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $cutis->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
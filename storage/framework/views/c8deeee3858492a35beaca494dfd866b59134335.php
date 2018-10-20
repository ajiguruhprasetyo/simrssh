<?php $__env->startSection('content'); ?>
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>SK Pegawai</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	<?php if (\Entrust::can('humas-create')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('humas.create')); ?>"> Create New Data</a>

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

			<th>No SK</th>

			<th>Tanggal Ditetapkan</th>

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


	<?php $__currentLoopData = $humas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


	<tr>

		<td><?php echo e(++$i); ?></td>

		<td><?php echo e($h->surat); ?></td>

		<td> <?php echo e(tgl_indo( $h->tanggal, true)); ?> </td>

		<!-- <td><?php echo e(date_format ( date_create($h->tanggal), "d F Y" )); ?></td>
			format internasional --> 

		<td><?php echo e($h->keterangan); ?></td>

		<td>

			<a class="btn btn-sm btn-info" href="<?php echo e(route('humas.show',$h->id)); ?>">Show</a>

			<?php if (\Entrust::can('humas-edit')) : ?>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('humas.edit',$h->id)); ?>">Edit</a>

			<?php endif; // Entrust::can ?>

			<?php if (\Entrust::can('humas-delete')) : ?>

				<?php echo Form::open(['method' => 'DELETE','route' => ['humas.destroy', $h->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


        	<?php endif; // Entrust::can ?>

		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $humas->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
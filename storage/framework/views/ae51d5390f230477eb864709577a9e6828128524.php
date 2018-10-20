<?php $__env->startSection('content'); ?>
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Kritik dan Saran</h2>
				<hr>
	        </div>

	    </div>

	</div>

	<?php if($message = Session::get('success')): ?>

		<div class="alert alert-success">

			<p><?php echo e($message); ?></p>

		</div>

	<?php endif; ?>

	<table class="table table-bordered">

		<tr  style="background: orange;color: #ffffff;">

			<th>No</th>

			<th>Nama</th>

			<th>Nomor HP</th>

			<th>Tanggal</th>

			<th>Alamat</th>

			<th>Kritik Saran</th>

			<th>Tanggal Feedback</th>

			<th>Feedback</th>

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


	<?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


	<tr>

		<td><?php echo e(++$i); ?></td>

		<td><?php echo e($c->nama); ?></td>

		<td><?php echo e($c->no_hp); ?></td>

		<td> <?php echo e(tgl_indo( $c->tanggal, true)); ?> </td>

		<!-- <td><?php echo e(date_format ( date_create($c->tanggal), "d F Y" )); ?></td>
			format internasional --> 

		<td><?php echo e($c->alamat); ?></td>

		<td><?php echo e($c->kritik_saran); ?></td>

		<td><?php echo e(tgl_indo( $c->tgl_feedback, true)); ?></td>

		<td><?php echo e($c->feedback); ?></td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $complaints->render(); ?>


			<div class="pull-left">


				<?php if (\Entrust::can('complaint-download')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('complaint.download')); ?>"> Download</a>

	            <?php endif; // Entrust::can ?>	            

	        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
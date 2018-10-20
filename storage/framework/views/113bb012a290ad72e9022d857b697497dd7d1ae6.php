<?php $__env->startSection('content'); ?>
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>SK Pegawai</h2>
				<hr>
	        </div>

	        <div class="pull-right">
                <form action="<?php echo e(route('humas.index')); ?>" method="get" class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" name="s" placeholder="Cari" value="<?php echo e(isset($s) ? $s : ''); ?>">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> Cari</button>
                    </div>
                    
                </form>
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

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo e($humas->links()); ?>

			<div class="pull-left">


				<?php if (\Entrust::can('humas-download')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('humas.download')); ?>"> Download</a>

	            <?php endif; // Entrust::can ?>	            

	        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
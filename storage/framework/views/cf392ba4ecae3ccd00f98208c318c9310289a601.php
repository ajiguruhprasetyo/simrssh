<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data SK RSSH</h2>

	        </div>

	        <div class="pull-left">

	            <a class="btn btn-sm btn-primary" href="<?php echo e(route('humas.index')); ?>"> Back</a>

	        </div>

	    </div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Surat Keputusan:</strong>

                <?php echo e($humas->surat); ?>


            </div>

        </div>

         
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

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Surat Keputusan:</strong>
          
                <!-- <td><?php echo e(date_format ( date_create($humas->tanggal), "d F Y" )); ?></td>
                format internasional --> 
                <td> <?php echo e(tgl_indo( $humas->tanggal, true)); ?> </td>

            </div>

        </div>


       
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan:</strong>

                <?php echo e($humas->keterangan); ?>


            </div>

        </div>
		<div class="pull-left">

	        <a class="btn btn-sm btn-success" href="#">Print</a>

	    </div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
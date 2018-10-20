<?php $__env->startSection('content'); ?>
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Indikator MUtu</h2>
				<hr>
	        </div>

	        <div class="pull-right">
                <form action="<?php echo e(route('laporanpmkp.laporan')); ?>" method="get" class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="Cari" aria-label="Search">
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
			<th>Periode Laporan</th>
			<th>Judul Indikator</th>
			<th>Numerator</th>
			<th>Denominator</th>
		
		</tr>
	<?php if(count($result) > 0): ?>
		<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pmkp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td>
						<?php echo e($pmkp->id); ?>

					</td>
					<td>
						<?php echo e(date_format( date_create($pmkp->created_at), 'F, Y')); ?>

					</td>
					<td>
						<?php echo e($pmkp->judul_indikator); ?>

					</td>
					<td>
						<?php echo e($pmkp->numerator); ?>

					</td>
					<td>
						<?php echo e($pmkp->denominator); ?>

					</td>
					
				</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php else: ?>
	<p>Data tidak tersedia</p>
	<?php endif; ?>
	</table>

	
			<div class="pull-left">
				<?php if (\Entrust::can('pmkp-download')) : ?>
	            	<a class="btn btn-sm btn-default" href="<?php echo e(route('laporanpmkp.download')); ?>">Download </a>
	            <?php endif; // Entrust::can ?>	            
	        </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
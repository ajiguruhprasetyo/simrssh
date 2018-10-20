<?php $__env->startSection('content'); ?>
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Indikator MUtu</h2>
				<hr>
	        </div>

	        <div class="pull-right">
                <form action="<?php echo e(route('pmkp.index')); ?>" method="get" class="form-inline">
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
			<th>Periode Laporan</th>
			<th>Kode Unit</th>
			<th>Judul Sasaran Mutu</th>
			<th>Target</th>
			<th>Capaian</th>
		</tr>

	<?php $__currentLoopData = $pmkps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pmkp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td>
					<?php echo e($pmkp->id); ?>

				</td>
				<td>
					<?php echo e(date_format( date_create($pmkp->created_at), 'F, Y')); ?>

				</td>
				<td>
					<?php echo e($pmkp->kategori_pmkp); ?>

				</td>
				<td>
					<?php echo e($pmkp->nama_ind_mutu); ?>

				</td>
				<td>
					<?php echo e($pmkp->t_kerja); ?>

				</td>
				<td>
					<?php echo e($pmkp->capaian); ?>

				</td>	
			</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo e($pmkps->links()); ?>

			<div class="pull-left">
				<?php if (\Entrust::can('pmkp-download')) : ?>
	            	<a class="btn btn-sm btn-default" href="<?php echo e(route('pmkp.download')); ?>">Download </a>
	            <?php endif; // Entrust::can ?>	            
	        </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
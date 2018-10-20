<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-lg-12">
		
		<?php if($message = Session::get('success')): ?>
			<div class="alert alert-success">
				<p><?php echo e($message); ?></p>
			</div>
		<?php endif; ?>

			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Data Angka Indikator</h3>
					<div class="box-tools pull-right">
						<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">

					<?php echo e(Form::open(['method' => 'get', 'class' => 'form-inline pull-left'])); ?>

					
                        <?php echo Form::text('data',null, array ('value' => request('data'),
                            'class' => 'input-sm form-control',
                            'placeholder' => 'Nama Kamus Indikator',
                            'style' => 'width:200px')); ?>  

                        <?php echo e(Form::submit('Search', ['class' => 'btn btn-sm btn-warning'])); ?>

                    <?php echo e(Form::close()); ?>


					<?php if (\Entrust::can('angkaindikator-create')) : ?>
						<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('angkaindikator.create')); ?>"> Input Indikator Mutu</a>
					<?php endif; // Entrust::can ?>

						<table class="table table-bordered">
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Judul</th>
								<th>Numerator</th>
								<th>Denumerator</th>
								<th>Persentase</th>
								<th>Standard</th>
								<th></th>
							</tr>
							<?php $__currentLoopData = $ais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e(++$i); ?> </td>
									<td><?php echo e($ai->tgl_input); ?></td>
									<td><?php echo e($ai->areaindikator->nama_area_indikator); ?></td>
									<td><?php echo e($ai->angka_persentase); ?></td>
									<td><?php echo e($ai->jumlah); ?></td>	
									<td><?php echo e($ai->persentase); ?> %</td>	
									<td><?php echo e($ai->standard); ?></td>
									<td>
										<?php if (\Entrust::can('angkaindikator-edit')) : ?>
											<a class="btn btn-sm btn-primary" href="<?php echo e(route('angkaindikator.edit',$ai->id)); ?>">Edit</a>
										<?php endif; // Entrust::can ?>
										<?php if (\Entrust::can('angkaindikator-delete')) : ?>
											<?php echo Form::open(['method' => 'DELETE','route' => ['angkaindikator.destroy', $ai->id],'style'=>'display:inline']); ?>

											<?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>

											<?php echo Form::close(); ?>

										<?php endif; // Entrust::can ?>
									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
					<?php echo $ais->render(); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
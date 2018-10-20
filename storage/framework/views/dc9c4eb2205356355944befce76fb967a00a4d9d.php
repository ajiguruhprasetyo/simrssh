<?php $__env->startSection('content'); ?>

<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>List data Surveilance</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	<?php if (\Entrust::can('ppi-create')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('ppi.create')); ?>"> Create New Data</a>

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
			<th rowspan="2">No Reg</th>
			<th rowspan="2">Nama Pasien</th>
			<th rowspan="2">Tanggal Input</th>
			<th rowspan="2">Ruang</th>
			<th rowspan="2">Jumlah pasien di rawat</th>
			<th rowspan="2">Jumlah tirah baring</th>
			<th rowspan="2">Total operasi</th>
			<th colspan="4">Jumlah pakai alat</th>
			<th colspan="6">Jenis Infeksi</th>
			<th rowspan="2">Hasil Kultur</th>
			<th rowspan="2">Opsi</th>
		</tr>

		<tr>
				<th>IVC</th>
				<th>UC</th>
				<th>VM</th>
				<th>ETT</th>
				<th>Plebitis</th>
				<th>ISK</th>
				<th>VAP</th>
				<th>HAP</th>
				<th>Dekubitus</th>
				<th>IDO</th>
			</tr>

	<?php $__currentLoopData = $ppis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td>
					<?php echo e($p->no_reg); ?>

				</td>
				<td>
					<?php echo e($p->nama_pasien); ?>

				</td>
				<td>
					<?php echo e(date ('j, F, o', strtotime($p->created_at))); ?>

				</td>
				<td>
					<?php echo e($p->ruang); ?>

				</td>
				<td>
					<?php echo e($p->jml_pasien_rawat); ?>

				</td>
				<td>
					<?php echo e($p->jml_tirah_baring); ?>

				</td>
				<td>
					<?php echo e($p->total_operasi); ?>

				</td>
				<td>
					<?php echo e($p->ivc); ?>

				</td>
				<td>
					<?php echo e($p->uc); ?>

				</td>
				<td><?php echo e($p->vm); ?>

				</td>
				<td>
					<?php echo e($p->ett); ?>

				</td>
				<td>
					<?php echo e($p->plebitis); ?>

				</td>
				<td>
					<?php echo e($p->isk); ?>

				</td>
				<td>
					<?php echo e($p->vap); ?>

				</td>
				<td>
					<?php echo e($p->hap); ?>

				</td>
				<td>
					<?php echo e($p->dekubitus); ?>

				</td>
				<td>
					<?php echo e($p->ido); ?>

				</td>
				<td><?php echo e($p->hsl_kultur); ?></td>

				<td>
						<a class="btn btn-sm btn-default" href="<?php echo e(route('ppi.edit',$p->id)); ?>">edit</a>

						<?php echo Form::open(['method' => 'DELETE','route' => ['ppi.destroy', $p->id],'style'=>'display:inline']); ?>

			            <?php echo Form::submit('X', ['class' => 'btn btn-sm btn-danger', 'url' => 'image/crud/delete.png']); ?>

			        	<?php echo Form::close(); ?>


				</td>
			</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $ppis->render(); ?>

	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
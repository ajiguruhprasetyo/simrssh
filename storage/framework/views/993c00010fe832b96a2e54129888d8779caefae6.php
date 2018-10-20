<?php $__env->startSection('content'); ?>
<?php if(count($errors) > 0): ?>
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	<?php endif; ?>

<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Edit Rumus Indikator</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('areaindikator.index')); ?>"> Kembali</a> 
			<br>
			<?php echo Form::model($areaindikators, ['method' => 'PATCH','route' => ['areaindikator.update', $areaindikators->id]]); ?>

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('kode_area_indikator', 'Area Indikator :'); ?>

						<?php echo Form::text('kode_area_indikator', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('id_unitkerja', 'Unit Kerja :'); ?>

						<select name="id_unitkerja" class="form-control">
							<?php $__currentLoopData = $unitkerjas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($uk->id); ?>"><?php echo e($uk->unit_kerja); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						<!-- <?php echo Form::text('id_unitkerja', null, array('placeholder' => '','class' => 'form-control')); ?> -->
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('ruang_lingkup', 'Ruang Lingkup :'); ?>

						<?php echo Form::text('ruang_lingkup', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('nama_area_indikator', 'Judul Indikator :'); ?>

						<?php echo Form::text('nama_area_indikator', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('dasar_pemikiran', 'Dasar Pemikiran :'); ?>

						<?php echo Form::text('dasar_pemikiran', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('definisi_ind', 'Definisi Indikator :'); ?>

						<?php echo Form::text('definisi_ind', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('k_inklusi', 'Kriteria Inklusi'); ?>

						<?php echo Form::text('k_inklusi', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('k_eksklusi', 'Kriteria Eksklusi'); ?>

						<?php echo Form::text('k_eksklusi', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('tipe_ind', 'Tipe Indikator'); ?>

						<?php echo Form::text('tipe_ind', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('numerator', 'Numerator'); ?>

						<?php echo Form::text('numerator', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('denumerator', 'Denumerator'); ?>

						<?php echo Form::text('denumerator', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('target_kerja', 'Target Kinerja :'); ?>

						<?php echo Form::text('target_kerja', null, array('placeholder' => '%','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('standard', 'Standard'); ?>

						<?php echo Form::text('standard', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('sumber_data', 'Sumber Data :'); ?>

						<?php echo Form::text('sumber_data', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('fp_data', 'Frekuensi Pengumpulan Data :'); ?>

						<?php echo Form::select('fp_data', ['hari' => 'hari', 'minggu' => 'minggu','bulan' => 'bulan', 'triwulan' => 'triwulan','semester' => 'semester', 'tahun' => 'tahun']); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('periode_analisa', 'Periode Analisa'); ?>

						<?php echo Form::select('periode_analisa', ['hari' => 'hari', 'minggu' => 'minggu','bulan' => 'bulan', 'triwulan' => 'triwulan','semester' => 'semester', 'tahun' => 'tahun']); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('id_user', 'Penanggung Jawab Pengumpulan Data'); ?>

						<?php echo Form::text('id_user', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo Form::label('keterangan', 'Keterangan'); ?>

						<?php echo Form::text('keterangan', null, array('placeholder' => '','class' => 'form-control')); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>

			</div>
			<?php echo Form::close(); ?>

		</div><!-- /.box-body -->
	</div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
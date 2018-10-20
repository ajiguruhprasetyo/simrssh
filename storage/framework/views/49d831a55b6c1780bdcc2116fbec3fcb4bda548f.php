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
			<h3 class="box-title">Menambahkan Rehab Medik</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('rehabmedik.index')); ?>"> Kembali</a> 
			<br>
            <?php echo Form::open(['route' => 'rehabmedik.store', 'method' => 'POST']); ?>

            <div class="row">
                <div class="col-md-6">
                    <?php echo Form::label('no_rm', 'No RM'); ?>

                    <?php echo Form::number('no_rm', null, array('class' => 'form-control','placeholder' => 'Masukkan no rm')); ?>

                </div>
                <div class="col-md-6">
                    <?php echo Form::label('nama', 'Nama'); ?>

                    <?php echo Form::text('nama', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <div class="col-md-6">
                    <?php echo Form::label('no_reg', 'No Reg'); ?>

                    <?php echo Form::number('no_reg', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <div class="col-md-6">
                    <?php echo Form::label('tgl_periksa_dokter', 'Tanggal Periksa Dokter'); ?>

                    <?php echo Form::date('tgl_periksa_dokter', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <hr>
                <div class="col-md-6">
                    <?php echo Form::label('tgl_ft1', 'Tanggal FT 1'); ?>

                    <?php echo Form::date('tgl_ft1', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <div class="col-md-6">
                    <?php echo Form::label('tgl_ft2', 'Tanggal FT 2'); ?>

                    <?php echo Form::date('tgl_ft2', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <div class="col-md-6">
                    <?php echo Form::label('tgl_ft3', 'Tanggal FT 3'); ?>

                    <?php echo Form::date('tgl_ft3', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <div class="col-md-6">
                    <?php echo Form::label('tgl_ft4', 'Tanggal FT 4'); ?>

                    <?php echo Form::date('tgl_ft4', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <div class="col-md-6">
                    <?php echo Form::label('tgl_ft5', 'Tanggal FT 5'); ?>

                    <?php echo Form::date('tgl_ft5', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <div class="col-md-6">
                    <?php echo Form::label('tgl_ft6', 'Tanggal FT 6'); ?>

                    <?php echo Form::date('tgl_ft6', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <div class="col-md-12">
                    <?php echo Form::label('tgl_ft7', 'Tanggal FT 7'); ?>

                    <?php echo Form::date('tgl_ft7', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
                <div class="col-md-12">
                    <?php echo Form::label('keterangan', 'Keterangan'); ?>

                    <?php echo Form::textarea('keterangan', null, array('class' => 'form-control','placeholder' => '')); ?>

                </div>
            </div>
            <div class="col-md-4">
                <?php echo Form::submit('Simpan', ['class' => 'btn btn-sm btn-primary']); ?>

            </div>
        <?php echo Form::close(); ?>

		</div><!-- /.box-body -->
	</div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
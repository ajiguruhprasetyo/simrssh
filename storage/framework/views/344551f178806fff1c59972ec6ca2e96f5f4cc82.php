<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Menambahkan Surveilance</h2>

	        </div>

	    </div>

	</div>

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

	<?php echo Form::open(array('route' => 'ppi.store','method'=>'POST')); ?>


	<div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo e(Form::label('no_reg', 'Nomor Registrasi :')); ?>

                    
                <?php echo Form::number('no_reg', null, array('placeholder' => 'No Reg Pasien','class' => 'form-control')); ?>

                   
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo e(Form::label('nama_pasien', 'Nama Pasien :')); ?>

                    
                <?php echo Form::text('nama_pasien', null, array('placeholder' => 'Nama Pasien','class' => 'form-control')); ?>

                   
            </div>

        </div>


		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo e(Form::label('ruang', 'Nama Ruang :')); ?>

                    
                <?php echo Form::text('ruang', null, array('placeholder' => 'Ruang anda..','class' => 'form-control')); ?>

                   
            </div>

        </div>

      <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jumlah pasien yang di rawat :</strong>

                <?php echo Form::text('jml_pasien_rawat', null, array('placeholder' => 'Jumlah Pasien dirawat di rs ...','class' => 'form-control')); ?>


            </div>

        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jumlah tirah baring :</strong>
                
                <?php echo Form::text('jml_tirah_baring', null, array('placeholder' => 'Jumlah Tirah Baring di rs ...','class' => 'form-control')); ?>


            </div>

        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Total Operasi :</strong>

                <?php echo Form::number('total_operasi', null, array('placeholder' => 'Total operasi ...','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>IVC Intra Venuos Cateter :</strong>

                <?php echo Form::number('ivc', null, array('placeholder' => 'Kejadian IVC','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>UC Urin Cateter :</strong>

                <?php echo Form::number('uc', null, array('placeholder' => 'Kejadian UC','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>VM Ventilator Mekanik :</strong>

                <?php echo Form::number('vm', null, array('placeholder' => 'Kejadian VM','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ETT Endo Tracheal Tube :</strong>

                <?php echo Form::number('ett', null, array('placeholder' => 'Kejadian ETT','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>PLEBITIS :</strong>

                <?php echo Form::number('plebitis', null, array('placeholder' => 'Kejadian Plebitis','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ISK :</strong>

                <?php echo Form::number('isk', null, array('placeholder' => 'Kejadian ISK','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>VAP :</strong>

                <?php echo Form::number('vap', null, array('placeholder' => 'Kejadian VAP','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>HAP :</strong>

                <?php echo Form::number('hap', null, array('placeholder' => 'Kejadian HAP','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Dekubitus :</strong>

                <?php echo Form::number('dekubitus', null, array('placeholder' => 'Kejadian dekubitus','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>IDO :</strong>

                <?php echo Form::number('ido', null, array('placeholder' => 'Kejadian IDO','class' => 'form-control')); ?>


            </div>

        </div>



         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Hasil Kultur :</strong>

                 <?php echo Form::text('hsl_kultur', null, array('placeholder' => 'Total operasi ...','class' => 'form-control')); ?>


            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Simpan</button>
				<a class="btn btn-primary" href="<?php echo e(route('ppi.index')); ?>">Kembali</a>
        </div>

	</div>

	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
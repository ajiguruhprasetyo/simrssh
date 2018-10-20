 

<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Tambah Data Karyawan</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-primary" href="<?php echo e(route('karyawan.index')); ?>"> Back</a>

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

	<?php echo Form::open(array('route' => 'karyawan.store','method'=>'POST')); ?>


	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama :</strong>

                <?php echo Form::text('nama_karyawan', null, array('placeholder' => 'Nama anda...','class' => 'form-control')); ?>


            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tempat lahir:</strong>

                <?php echo Form::text('tmp_lahir', null, array('placeholder' => 'Kota ...','class' => 'form-control')); ?>


            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Lahir:</strong>

                 <?php echo Form::date('tgl_lahir', \Carbon\Carbon::now(), null, ['class' => 'form-control', 'placeholder' => 'XX/XX/XXXX']); ?>



            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Agama:</strong>

                <?php echo Form::select('agama', ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Khatolik' => 'Khatolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha'], null, ['placeholder' => 'Pilih agama', 'class' => 'form-control']); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Status:</strong>

                <?php echo Form::select('status', ['Single' => 'Single', 'Menikah' => 'Menikah', 'Janda' => 'Janda', 'Duda' => 'Duda'], null, ['placeholder' => 'Pilih status', 'class' => 'form-control']); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nomor HP:</strong>

                <?php echo Form::number('no_hp', null, array('class'=> 'form-control', 'placeholder' => '08XXXXXXXXX')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Unit Kerja:</strong>

                <?php echo Form::text('id_unit_kerja', null, array('class' => 'form-control', 'placeholder' => 'Unit Kerja anda')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                <?php echo Form::textarea('alamat', null, array('placeholder' => 'alamat lengkap ...','class' => 'form-control','style'=>'height:100px')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Submit</button>

        </div>

	</div>

	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
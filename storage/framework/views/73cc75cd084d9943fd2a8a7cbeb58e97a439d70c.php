<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-10 col-lg-offset-2 margin-tb">

	        <div class="pull-left">

	            <h2>Menambahkan Indikator Mutu</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="<?php echo e(route('pmkp.index')); ?>">Kembali</a>

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

	<?php echo Form::model($pmkp, ['method' => 'PATCH','route' => ['pmkp.update', $pmkp->id]]); ?>


	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kategori PMKP :</strong>

                <?php echo Form::select('kategori_pmkp', ['Indikator Area Klinis' => 'Indikator Area Klinis','Indikator Area Manajemen' => 'Indikator Area Manajemen','Indikator Area Keselamatan Pasien' => 'Indikator Area Keselamatan Pasien','International Library' => 'International Library','Indikator Mutu Unit' => 'Indikator Mutu Unit','Indikator Mutu Lainnya' => 'Indikator Mutu Lainnya'], null, ['placeholder' => '---', 'class' => 'form-control']); ?>

<!-- 
                <?php echo Form::text('surat', null, array('placeholder' => 'XX/XX/XXX/2018','class' => 'form-control')); ?> -->

            </div>

        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Unit Kerja :</strong>

                <?php echo Form::text('unitkerja', null, array('placeholder' => 'Unit Kerja di RS','class' => 'form-control')); ?>


            </div>

        </div>        

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Keputusan Pmkp :</strong>

                <?php echo Form::text('kode_pmkp', null, array('placeholder' => 'XX/XX/PMKP/RSSH/2018','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Indikator Mutu:</strong>

                <?php echo Form::text('nama_ind_mutu', null, array('placeholder' => 'Judul Indikator Mutu Unit Anda ...','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Definisi:</strong>

                <?php echo Form::text('def_oprs', null, array('placeholder' => 'Definisi Indikator','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Penanggung Jawab:</strong>

                <?php echo Form::text('p_jawab', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kebijakan Mutu:</strong>

                <?php echo Form::text('kbjkan_mutu', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Dasar Pemikiran:</strong>

                <?php echo Form::text('d_pemikiran', null, array('placeholder' => 'UU No.XX Mengatur tentang xxxxx','class' => 'form-control')); ?>


            </div>

        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numerator:</strong>

                <?php echo Form::text('numerator', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Denominator:</strong>

                <?php echo Form::text('denominator', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Formula:</strong>

                <?php echo Form::textarea('formula', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Inklusi:</strong>

                <?php echo Form::text('k_inklusi', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Eksklusi:</strong>

                <?php echo Form::text('k_eksklusi', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Metode:</strong>

                <?php echo Form::select('metode', ['Concurrent' => 'Concurrent','Retrospective' => 'Retrospective'], null, ['placeholder' => '---', 'class' => 'form-control']); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Type:</strong>

                <?php echo Form::select('type', ['Input' => 'Input','Proses' => 'Proses','Outcome' => 'Outcome'], null, ['placeholder' => '---', 'class' => 'form-control']); ?>


            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Area Monitoring:</strong>

                <?php echo Form::text('area_monitor', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Waktu Lapor:</strong>

                <?php echo Form::text('w_lapor', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Periode Analisa:</strong>

                <?php echo Form::select('p_analisa', ['Hari' => 'Hari','Minggu' => 'Minggu','Bulan' => 'Bulan','Triwulan' => 'Triwulan','Semester' => 'Semester','Tahun' => 'Tahun'], null, ['placeholder' => '---', 'class' => 'form-control']); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nilai Standar:</strong>

                <?php echo Form::text('n_standar', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Target Kerja:</strong>

                <?php echo Form::text('t_kerja', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Waktu Lapor:</strong>

                <?php echo Form::text('w_lapor', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jumlah Sampel:</strong>

                <?php echo Form::text('j_sampel', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Hubungan Komunikasi:</strong>

                <?php echo Form::text('h_komunikasi', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Capaian:</strong>

                <?php echo Form::text('capaian', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>


       

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-sm btn-primary">Submit</button>

        </div>

	</div>

	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
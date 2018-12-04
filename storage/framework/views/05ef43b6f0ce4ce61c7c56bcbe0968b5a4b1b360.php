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
			<h3 class="box-title">Menambahkan Data Indikator Mutu</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('angkaindikator.index')); ?>"> Kembali</a> 
			<br>
			<?php echo Form::open(array('route' => 'angkaindikator.store','method'=>'POST', 'name' => 'autoSumForm')); ?>

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo Form::label('id_areaindikator', 'Judul Indikator:'); ?>

                            <select name="id_areaindikator" class="form-control">
                                <?php $__currentLoopData = $ais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ai->id); ?>"><?php echo e($ai->nama_area_indikator); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tanggal:</strong>
                            <?php echo Form::date('tgl_input', null, array('placeholder' => '','class' => 'form-control', 'id'=> 'datepicker')); ?>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Numerator:</strong>
                            <input type="number" class="form-control" name="angka_persentase" onFocus="startPercent();" onBlur="stopPercent();" >
                            <!-- <?php echo Form::number('angka_persentase', null, array('placeholder' => '','class' => 'form-control')); ?> -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Denumerator:</strong>
                            <input type="number" class="form-control" name="jumlah" onFocus="startPercent();" onBlur="stopPercent();" >
                        <!--   <?php echo Form::number('jumlah', null, array('placeholder' => '','class' => 'form-control')); ?> -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Persentase :</strong>
                            <input type="text" class="form-control" name="persentase" value='0' readonly >
                        <!--  <?php echo Form::text('persentase', null, array('placeholder' => '<?php echo e(jumlah * angka_persentase); ?>','class' => 'form-control')); ?> -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo Form::label('standard', 'Standard :'); ?>

                            <?php echo Form::text('standard', null, array('class' => 'form-control', 'placeholder' => '')); ?>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </div>
            <?php echo Form::close(); ?>

		</div><!-- /.box-body -->
	</div><!-- /.box -->

    <script>
        function startPercent(){
            interval = setInterval("percent()", 1);
        }
            function percent(){
                one = document.autoSumForm.angka_persentase.value;
                two = document.autoSumForm.jumlah.value;
            document.autoSumForm.persentase.value = (one * 1) / (two * 1) * 100 || 0;
        }
            function stopPercent(){
                clearInterval(interval);
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
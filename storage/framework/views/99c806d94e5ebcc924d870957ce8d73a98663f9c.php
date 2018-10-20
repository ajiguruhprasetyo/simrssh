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
			<h3 class="box-title">Edit Kejadian Indikator</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('kejadianindikator.index')); ?>"> Kembali</a> 
			<br>
			<?php echo Form::model($kis, ['method'=>'PATCH', 'route' => ['kejadianindikator.update', $kis->id]]); ?>


            <?php echo e(method_field('PATCH')); ?>

            <?php echo e(csrf_field()); ?>

            <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo Form::label('tgl_kejadian', 'Tanggal Kejadian :'); ?>


                <?php echo Form::date('tgl_kejadian', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo Form::label('id_area_indikator', 'Judul Indikator :'); ?>

                <select name="id_area_indikator" class="form-control">
                    <?php $__currentLoopData = $ais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($sc->id); ?>"><?php echo e($sc->nama_area_indikator); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            
            </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <?php echo Form::label('kejadian', 'Kejadian :'); ?>

                    
                    <?php echo Form::text('kejadian', null, array('placeholder' => '','class' => 'form-control')); ?>


                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <?php echo Form::label('standard_indikator', 'Standard indikator :'); ?>

                
                    <?php echo Form::text('standard_indikator', null, array('placeholder' => '','class' => 'form-control')); ?>


                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                    <button type="submit" class="btn btn-primary">Simpan</button>

            </div>

            </div>

            <?php echo Form::close(); ?>

		</div><!-- /.box-body -->
	</div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
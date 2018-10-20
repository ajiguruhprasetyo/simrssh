<?php $__env->startSection('content'); ?>

		<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Edit SUb Area Indikator</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-primary" href="<?php echo e(route('subai.index')); ?>"> Kembali</a>

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

	<?php echo Form::model($subais, ['method' => 'PATCH','route' => ['subai.update', $subais->id]]); ?>


	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>SUB KATEGORI :</strong>

                <?php echo Form::text('sub_category', null, array('placeholder' => '','class' => 'form-control')); ?>


            </div>

        </div>

     

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                    
			<?php echo Form::label('id_area_indikator', 'Area Indikator :'); ?>


              <select class="form-control" name="id_area_indikator">
              	<?php $__currentLoopData = $areainds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_area_indikator); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </select>
              
            </div>

        </div>

      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Submit</button>

        </div>
	</div>

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
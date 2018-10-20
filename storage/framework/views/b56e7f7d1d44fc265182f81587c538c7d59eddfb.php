 

<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Edit New Item</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-primary" href="<?php echo e(route('itemCRUD2.index')); ?>"> Back</a>

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

	<?php echo Form::model($item, ['method' => 'PATCH','route' => ['itemCRUD2.update', $item->id]]); ?>


	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama :</strong>

                <?php echo Form::text('nama', null, array('placeholder' => 'Nama','class' => 'form-control')); ?>


            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Harga:</strong>

                <?php echo Form::number('harga', null, array('placeholder' => 'Harga','class' => 'form-control')); ?>


            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Satuan:</strong>

                <?php echo Form::select('satuan', ['box' => 'BOX','lembar' => 'Lembar','lusin' => 'Lusin','pcs' => 'Pcs','biji' => 'Biji','buah' => 'Buah','meter' => 'Meter','cm' => 'Centimeter','kg' => 'KG','gram' => 'Gram','roll' => 'Roll','botol' => 'Botol', 'kodi' => 'Kodi','rim' => 'Rim'], null, ['placeholder' => 'Satuan']); ?>


            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Stok:</strong>

                <?php echo Form::number('stok', null, array('placeholder' => 'Stok','class' => 'form-control')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan:</strong>

                <?php echo Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Submit</button>

        </div>

	</div>

	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
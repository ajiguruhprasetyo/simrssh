 

<?php $__env->startSection('content'); ?>

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Barang ATK</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	<?php if (\Entrust::can('item-create')) : ?>

	            <a class="btn btn-sm btn-success" href="<?php echo e(route('itemCRUD2.create')); ?>"> Create New Item</a>

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

			<th>No</th>

			<th>Nama</th>

			<th>Harga</th>

			<th>Satuan</th>

			<th>Stok</th>

			<th>Keterangan</th>

			<th width="280px">Aksi</th>

		</tr>

	<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>

		<td><?php echo e(++$i); ?></td>

		<td><?php echo e($item->nama); ?></td>

		<td>Rp. <?php echo e(number_format ($item->harga,2,",",".")); ?></td>

		<td><?php echo e($item->satuan); ?></td>

		<td><?php echo e($item->stok); ?></td>

		<td><?php echo e($item->description); ?></td>

		<td>

			<a class="btn btn-sm btn-info" href="<?php echo e(route('itemCRUD2.show',$item->id)); ?>">Show</a>

			<?php if (\Entrust::can('item-edit')) : ?>

				<a class="btn btn-sm btn-primary" href="<?php echo e(route('itemCRUD2.edit',$item->id)); ?>">Edit</a>

			<?php endif; // Entrust::can ?>

			<?php if (\Entrust::can('item-delete')) : ?>

				<?php echo Form::open(['method' => 'DELETE','route' => ['itemCRUD2.destroy', $item->id],'style'=>'display:inline']); ?>


	            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>


	        	<?php echo Form::close(); ?>


        	<?php endif; // Entrust::can ?>

		</td>

	</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<?php echo $items->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
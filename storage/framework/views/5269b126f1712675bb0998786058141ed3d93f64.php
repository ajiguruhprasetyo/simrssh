<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12">
		
		<?php if($message = Session::get('success')): ?>
			<div class="alert alert-success">
				<p><?php echo e($message); ?></p>
			</div>
		<?php endif; ?>

			<div class="box box-primary">
			
				<div class="box-header with-border">
				    <h3 class="box-title">Data Kejadian Indikator</h3>
                    <div class="box-tools pull-right">
                        <a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
                    </div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">

                <?php echo e(Form::open(['method' => 'get', 'class' => 'form-inline pull-left'])); ?>

					
                    <?php echo Form::text('data',null, array ('value' => request('data'),
                        'class' => 'input-sm form-control',
                        'placeholder' => 'Nama Kamus Indikator',
                        'style' => 'width:200px')); ?>  

                    <?php echo e(Form::submit('Search', ['class' => 'btn btn-sm btn-warning'])); ?>

                <?php echo e(Form::close()); ?>

                
                <?php if (\Entrust::can('kejadianindikator-create')) : ?>
                    <a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('kejadianindikator.create')); ?>"> Tambah Kejadian Indikator</a>
                <?php endif; // Entrust::can ?>

					<table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Kejadian</th>
                            <th>Standard</th>
                            <th></th>
                        </tr>
                        <?php $__currentLoopData = $kejadianindikators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$i); ?></td>
                            <td><?php echo e($ki->tgl_kejadian); ?></td>
                            <td><?php echo e($ki->areaindikator->nama_area_indikator); ?></td>
                            <td><?php echo e($ki->kejadian); ?></td>
                            <td><?php echo e($ki->standard_indikator); ?></td>
                            <td>
                                <?php if (\Entrust::can('kejadianindikator-edit')) : ?>
                                    <a class="btn btn-sm btn-primary" href="<?php echo e(route('kejadianindikator.edit',$ki->id)); ?>">Edit</a>
                                <?php endif; // Entrust::can ?>
                                <?php if (\Entrust::can('kejadianindikator-delete')) : ?>
                                    <?php echo Form::open(['method' => 'DELETE','route' => ['kejadianindikator.destroy', $ki->id],'style'=>'display:inline']); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; // Entrust::can ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    <?php echo $kejadianindikators->render(); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
				    <h3 class="box-title">Data Pasien Rehab Medik</h3>
                    <div class="box-tools pull-right">        
                       <a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
                    </div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">

                    <?php echo e(Form::open(['method' => 'get', 'class' => 'form-inline pull-left'])); ?>

                        <?php echo Form::text('data',null, array ('value' => request('data'),
                            'class' => 'input-sm form-control',
                            'placeholder' => 'Nama Pasien atau No Reg',
                            'style' => 'width:200px')); ?>  

                        <?php echo e(Form::submit('Search', ['class' => 'btn btn-sm btn-warning'])); ?>

                    <?php echo e(Form::close()); ?>


					<?php if (\Entrust::can('create-rehabmedik')) : ?>
                        <a class="btn btn-sm btn-success pull-right" href="<?php echo e(route('rehabmedik.create')); ?>"><?php echo e(trans('create')); ?></a> 
					<?php endif; // Entrust::can ?>

						 <table class="table `table-responsive">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No RM</th>
                                    <th>Nama</th>
                                    <th>No Reg</th>
                                    <th>Tanggal periksa</th>
                                    <th>Keterangan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $rehabmediks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$i); ?></td>
                                        <td><?php echo e($rm->no_rm); ?></td>
                                        <td><?php echo e($rm->nama); ?></td>
                                        <td><?php echo e($rm->no_reg); ?></td>
                                        <td><?php echo e($rm->tgl_periksa_dokter); ?></td>
                                        <td><?php echo e($rm->keterangan); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('rehabmedik.edit', $rm->id)); ?>" class="btn btn-sm btn-primary"><?php echo e(trans('adminlte.edit')); ?></a> 
                                            <?php echo Form::open(['method' => 'DELETE', 'route' => ['rehabmedik.destroy', $rm->id], 'style' => 'display:inline']); ?>

                                                <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>

                                            <?php echo Form::close(); ?>              
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <div class="text-center">
                            <?php echo e($rehabmediks->links()); ?>

                        </div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
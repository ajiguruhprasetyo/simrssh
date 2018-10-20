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
				    <h3 class="box-title"><?php echo e(trans('adminlte.list-rehabmedik')); ?></h3>
                    <div class="box-tools pull-right">        
                       <a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
                    </div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
                    <?php echo e(Form::open(['method' => 'get', 'class' => 'form-inline pull-right'])); ?>

                        <?php echo Form::text('data',null, array ('value' => request('data'),
                            'class' => 'input-md form-control',
                            'placeholder' => 'Nama Pasien atau No Reg',
                            'style' => 'width:300px')); ?>  
                        <?php echo e(Form::submit('Search', ['class' => 'btn btn-md'])); ?>

                    <?php echo e(Form::close()); ?>

						 <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No RM</th>
                                    <th>Nama</th>
                                    <th>No Reg</th>
                                    <th>Tgl Periksa</th>
                                    <th>FT1</th>
                                    <th>FT2</th>
                                    <th>FT3</th>
                                    <th>FT4</th>
                                    <th>FT5</th>
                                    <th>FT6</th>
                                    <th>FT7</th>
                                    <th>FT8</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $rehabmediks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$i); ?></td>
                                        <td><?php echo e($rm->no_rm); ?></td>
                                        <td><?php echo e($rm->nama); ?></td>
                                        <td><?php echo e($rm->no_reg); ?></td>
                                        <td><?php echo e(date_format(date_create($rm->tgl_periksa_dokter), "d M y")); ?></td>
                                        <td><?php echo e($rm->tgl_ft1); ?></td>
                                        <td><?php echo e($rm->tgl_ft2); ?></td>
                                        <td><?php echo e($rm->tgl_ft3); ?></td>
                                        <td><?php echo e($rm->tgl_ft4); ?></td>
                                        <td><?php echo e($rm->tgl_ft5); ?></td>
                                        <td><?php echo e($rm->tgl_ft6); ?></td>
                                        <td><?php echo e($rm->tgl_ft7); ?></td>
                                        <td></td>
                                        <td><?php echo e($rm->keterangan); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    <div class="text-center">
                        <?php echo e($rehabmediks->links()); ?>

                    </div>
				</div><!-- /.box-body -->
            </div>
                <i style="color:green;">* NB untuk FT 1 s/d FT 8 tanggal berdasarkan 2018-09-30 tahun-bulan-tanggal. Terima kasih</i>
            </div>
		</div><!-- /.box -->
	</div><!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
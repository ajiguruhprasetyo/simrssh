<?php $__env->startSection('content'); ?>
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Data Kejadian Indikator</h2>
                <hr>
            </div>
            
        </div>

        <div class="container">
            <div class="box">
                <form class="form-horizontal" method="post" action="">
                
                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <?php echo Form::label('id_area_indikator', 'Judul Indikator :'); ?>


                            <select class="form-control" name="id_area_indikator">
                                <?php $__currentLoopData = $ares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($s->id); ?>"><?php echo e($s->nama_area_indikator); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <div>
                                 <?php echo Form::label('Tanggal :'); ?>

                                <input type="hidden" name="tgl_awal" id="tgl_awal" value="">
                                <input type="text" name="tgl_awal_show" id="tgl_awal_show" value="">
                                s.d 
                                <input type="hidden" name="tgl_akhir" id="tgl_akhir" value="">
                                <input type="text" name="tgl_akhir_show" id="tgl_akhir_show" value="">
                            </div> 
                        </div>

                        <div class="form-group">

                            <?php echo Form::label('&nbsp;'); ?>


                            <div class="col-md-4">
                                <?php echo e(Form::submit('Filter')); ?>

                            </div>

                        </div>
                        
                    </div>
                </form>
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

            <th>Tanggal</th>

            <th>Judul</th>

            <th>Kejadian</th>

            <th>Standard</th>

        </tr>

        <?php $__currentLoopData = $kis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>

            <td><?php echo e(++$i); ?></td>

            <td><?php echo e($ki->tgl_kejadian); ?></td>

            <td><?php echo e($ki->areaindikator->nama_area_indikator); ?></td>

            <td><?php echo e($ki->kejadian); ?></td>

            <td><?php echo e($ki->standard_indikator); ?></td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

    <?php echo $kis->render(); ?>


       <div class="pull-left">


        <a class="btn btn-sm btn-success" href="<?php echo e(route('kejadianindikator.download')); ?>"> Download</a>

        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
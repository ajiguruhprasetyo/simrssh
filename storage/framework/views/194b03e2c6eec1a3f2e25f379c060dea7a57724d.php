<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel panel-head">
            </div>
            <div class="panel panel-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>List Indikator Mutu</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $ais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a href="<?php echo e(route('angkaindikator.listlaporan', $a->id_areaindikator)); ?>"><?php echo e($a->areaindikator->nama_area_indikator); ?></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

            <div class="panel panel-success">
                <div class="panel-heading"> Menu Admin</div>
                
                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel-body text-center">
                           
                                <h1>Selamat Datang di Sistem Informasi Manajemen Rumah Sakit</h1>
                           
                        </div>
                    </div>

                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
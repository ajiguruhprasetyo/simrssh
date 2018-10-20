<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo Form::label('id_unitkerja','UNIT KERJA :'); ?>

                <?php echo e($areaindikators->id); ?>

                <br>
        
                <?php echo Form::label('ruang_lingkup', 'RUANG LINGKUP :'); ?>

                <?php echo e($areaindikators->ruang_lingkup); ?>

                
                <hr>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo Form::label('nama_area_indikator', 'NAMA INDIKATOR :'); ?>

                <?php echo e($areaindikators->nama_area_indikator); ?>


                <hr>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo Form::label('dasar_pemikiran', 'DASAR PEMIKIRAN :'); ?>

                <?php echo e($areaindikators->dasar_pemikiran); ?>

                <br>
                <?php echo Form::label('definisi_ind', 'DEFINISI INDIKATOR :'); ?>

                <?php echo e($areaindikators->definisi_ind); ?>

                
                <br>
                <?php echo Form::label('k_inklusi', 'Inklusi :'); ?>

                <?php echo e($areaindikators->k_inklusi); ?>

                
                <br>
                <?php echo Form::label('k_eksklusi', 'Eksklusi :'); ?>

                <?php echo e($areaindikators->k_inklusi); ?>


                <br>
                <?php echo Form::label('tipe_ind', 'TIPE INDIKATOR :'); ?>

                <?php echo e($areaindikators->tipe_ind); ?>

                <hr>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo Form::label('numerator','PEMBILANG (Numerator)  :'); ?>

                <?php echo e($areaindikators->numerator); ?>

                <br>
                <?php echo Form::label('denumerator','PENYEBUT (Denumerator) :'); ?>

                <?php echo e($areaindikators->denumerator); ?>

                <hr>
            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <?php echo Form::label('standard','STANDARD :'); ?>

                <?php echo e($areaindikators->standard); ?>

                <br>
                <?php echo Form::label('keterangan','KETERANGAN :'); ?>

                <?php echo e($areaindikators->keterangan); ?>


            </div>

        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blank', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
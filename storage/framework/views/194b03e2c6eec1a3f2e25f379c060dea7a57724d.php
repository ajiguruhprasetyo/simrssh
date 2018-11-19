 
 
 <?php $__env->startSection('content'); ?>
 <div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Angka Indikator</h2>
            <hr>
        </div>

    </div>

    <div class="container">
            <div class="box">
                <form class="form-horizontal" method="post" action="">
                
                    <div class="col-xs-4 col-sm-4 col-md-4">

                        <div class="form-group">
                            <div>
                                <?php echo Form::label('Judul Indikator :'); ?>


                                <select class="form-control" name="id_area_indikator">
                                    <?php $__currentLoopData = $ares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($s->id); ?>"><?php echo e($s->nama_area_indikator); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                 <?php echo Form::label('Tanggal Input:'); ?>

                                 <br/>
                                <input type="hidden" name="start_date" id="start_date" value="<?php echo e($start_date); ?>"/>
                                <input type="text" name="start_date_show" id="start_date_show" value="<?php echo e($start_date); ?> "  style="width:150px; text-align: right;"/>
                                s.d 
                                <input type="hidden" name="end_date" id="end_date" value="<?php echo e($end_date); ?>"/>
                                <input type="text" name="tanggal_akhir_show" id="tanggal_akhir_show" value="<?php echo e($end_date); ?>"  style="width:150px; text-align: right;"/>
                            </div> 
                        </div>

                        <div class="form-group">

                            <?php echo Form::label('&nbsp;'); ?>


                            <div class="col-md-4">
                                <?php echo e(Form::submit('Filter', ['id' => 'btn-filter'])); ?>

                            </div>

                        </div>
                        
                    </div>
                </form>
            </div>   
        </div>

    <!-- <div class="pull-right">
        <form action="<?php echo e(route('angkaindikator.index')); ?>" method="get" class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" name="s" placeholder="Cari" value="<?php echo e(isset($s) ? $s : ''); ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit"> Cari</button>
            </div>
            
        </form>
    </div> -->


</div>

<?php if($message = Session::get('success')): ?>

<div class="alert alert-success">

    <p><?php echo e($message); ?></p>

</div>

<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>

            <th>No</th>

            <th>Area Indikator</th>

            <th>Tanggal Input</th>

            <th>Numerator</th>

            <th>Denumerator</th>

            <th>Persentase</th>

            <th>Standard</th>

        </tr>
    </thead>

<?php $__currentLoopData = $ais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tbody id="data_show">
    <tr>

        <td> <?php echo e(++$i); ?></td>

        <td> <?php echo e($h->areaindikator->nama_area_indikator); ?></td>

        <td> <?php echo e($h->tgl_input); ?> </td>

        <td> <?php echo e($h->angka_persentase); ?></td>

        <td> <?php echo e($h->jumlah); ?> </td>

        <td> <?php echo e($h->persentase); ?>% </td>

        <td> <?php echo e($h->standard); ?> </td>

    </tr>
</tbody>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php echo e($ais->links()); ?>

    <div class="pull-left">
        <?php if (\Entrust::can('angkaindikator-download')) : ?>
            <a class="btn btn-sm btn-success" href="<?php echo e(route('angkaindikator.download')); ?>"> Download</a>
        <?php endif; // Entrust::can ?>	            
    </div>
    <script>
    $(document).ready(function() {
         $('#btn-filter').on('click', function(){
            $('#data_show').empty();
            $('#data_show').append('<tr><td colspan="6">&nbsp;&nbsp; <b>Loading ....</b></td></tr>');
            
        })
        $("#start_date_show").attr('readonly', true);  
        $("#start_date_show").datepicker({
            changeMonth: true,
            changeYear: true,
            autoclose: true,
            format: 'd MM yyyy',
            linkFormat: "yy-mm-dd",
            linkField: '#tgl_pr'

        }).on("changeDate", function(e) {
            var newDate = e.format('yyyy-mm-dd')
            $("input[name='created_at']").val(newDate);
        });
        $("#end_date_show").attr('readonly', true);  
        $("#end_date_show").datepicker({
            changeMonth: true,
            changeYear: true,
            autoclose: true,
            format: 'd MM yyyy',
            linkFormat: "yy-mm-dd",
            linkField: '#tgl_pr'

        }).on("changeDate", function(e) {
            var newDate = e.format('yyyy-mm-dd')
            $("input[name='created_at']").val(newDate);
        });
    });

</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php echo $__env->yieldContent('title'); ?>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">  <!-- Tell the browser to be responsive to screen width -->
    
    <?php echo $__env->make('partials._css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php echo $__env->make('partials._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php echo $__env->make('partials._sidebaradminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <?php echo $__env->yieldContent('content-header'); ?>
        </section>

        <!-- Main content -->
        <section class="content">
          <?php echo $__env->yieldContent('content'); ?>

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
      <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Control Sidebar -->
      
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
          immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
            

        <?php echo $__env->make('partials._javascript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <?php echo $__env->yieldContent('script'); ?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    @yield('title')

    <meta name="csrf-token" content="{{ csrf_token() }}">  <!-- Tell the browser to be responsive to screen width -->
    
    @include('partials._css')
 
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      @include('partials._header')
      <!-- Left side column. contains the logo and sidebar -->
      @include('partials._sidebaradminlte')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">
          @yield('content')

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
      @include('partials._footer')
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
            

        @include('partials._javascript')
        
        @yield('script')
  </body>
</html>

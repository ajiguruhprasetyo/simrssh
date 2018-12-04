@extends('layouts.adminlte')

@section('content')
    @if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Pengajuan Kerusakan Alat</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="{{ route('ipsrs.index') }}"> Kembali</a> 
			<br>
            {!! Form::open(['route' => 'ipsrs.store', 'method' => 'POST']) !!}
           
            <div class="row">
                <div class="col-md-6">
                    {!! Form::label('nama_alat', 'Nama Alat') !!}
                    {!! Form::text('nama_alat', null, array('class' => 'form-control','placeholder' => 'Nama Alkes atau Alat Penunjang lainnya')) !!}
                </div>
                <div class="col-md-6">
                    {!! Form::label('ruang', 'Nama Ruang') !!}
                    {!! Form::text('ruang', null, array('class' => 'form-control','placeholder' => 'Contoh : Farmasi, Gudang B3 dll')) !!}
                </div>
                <div class="col-md-6">
                    {!! Form::label('kerusakan', 'Deskripsi Kerusakan') !!}
                    {!! Form::textarea('kerusakan', null, array('class' => 'form-control','placeholder' => '', 'rows' => '4', 'cols'=> '40')) !!}
                </div>
                
                <div class="col-md-6">
                    {!! Form::label('status', 'Status Alat Penunjang') !!}
                    {!! Form::select('status', ['BAIK' => 'BAIK', 'PROSES' => 'PROSES', 'RUSAK' => 'RUSAK']) !!}
                </div>
                <hr>
                <div class="col-md-6">
                    {!! Form::label('permintaan', 'Pengajuan Perbaikan') !!}
                    {!! Form::select('permintaan', ['PENGAJUAN' => 'PENGAJUAN', 'PROSES' => 'PROSES', 'SELESAI' => 'SELESAI']) !!}
                </div>
                <div class="col-md-6">
                    {!! Form::label('pelapor', 'Nama yang melaporkan kerusakan') !!}
                    {!! Form::text('pelapor', null, array('class' => 'form-control','placeholder' => '')) !!}
                </div>
            </div>
            <div class="col-md-4">
                {!! Form::submit('Simpan', ['class' => 'btn btn-sm btn-primary'])!!}
            </div>
        {!! Form::close() !!}
		</div><!-- /.box-body -->
	</div><!-- /.box -->
@stop
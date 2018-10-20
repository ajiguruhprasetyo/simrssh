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
			<h3 class="box-title">Edit Rehabilitasi Medik</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="{{ route('rehabmedik.index') }}"> Kembali</a> 
			<br>
			{!! Form::model($rehabmediks, ['method'=>'PATCH', 'route' => ['rehabmedik.update', $rehabmediks->id]]) !!}

            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-md-6">
                        {!! Form::label('no_rm', 'No RM') !!}
                        {!! Form::number('no_rm', null, array('class' => 'form-control','placeholder' => 'Masukkan no rm')) !!}
                    </div>
                    <div class="col-md-6">
                            {!! Form::label('nama', 'Nama') !!}
                            {!! Form::text('nama', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('no_reg', 'No Reg') !!}
                        {!! Form::number('no_reg', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('tgl_periksa_dokter', 'Tanggal Periksa Dokter') !!}
                        {!! Form::date('tgl_periksa_dokter', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <hr>
                    <div class="col-md-6">
                        {!! Form::label('tgl_ft1', 'Tanggal FT 1') !!}
                        {!! Form::date('tgl_ft1', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('tgl_ft2', 'Tanggal FT 2') !!}
                        {!! Form::date('tgl_ft2', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('tgl_ft3', 'Tanggal FT 3') !!}
                        {!! Form::date('tgl_ft3', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('tgl_ft4', 'Tanggal FT 4') !!}
                        {!! Form::date('tgl_ft4', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('tgl_ft5', 'Tanggal FT 5') !!}
                        {!! Form::date('tgl_ft5', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('tgl_ft6', 'Tanggal FT 6') !!}
                        {!! Form::date('tgl_ft6', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('tgl_ft7', 'Tanggal FT 7') !!}
                        {!! Form::date('tgl_ft7', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('keterangan', 'Keterangan') !!}
                        {!! Form::textarea('keterangan', null, array('class' => 'form-control','placeholder' => '')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
			{!! Form::close() !!}
		</div><!-- /.box-body -->
	</div><!-- /.box -->

@stop
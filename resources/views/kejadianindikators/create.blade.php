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
			<h3 class="box-title">Menambahkan Kejadian Indikator</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="{{ route('kejadianindikator.index') }}"> Kembali</a> 
			<br>
			{!! Form::open(array('route' => 'kejadianindikator.store','method'=>'POST')) !!}

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal:</strong>
                        {!! Form::date('tgl_kejadian', null, array('placeholder' => '','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {!! Form::label('id_area_indikator', 'Judul Indikator :') !!}
                        <select class="form-control" name="id_area_indikator">
                        @foreach($ares as $s)
                            <option value="{{ $s->id }}">{{ $s->nama_area_indikator}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>     

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {!! Form::label('kejadian', 'Kejadian :') !!}
                        {!! Form::text('kejadian', null, array('placeholder' => 'masukan kejadian anda','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {!! Form::label('standard_indikator', 'Standard Indikator :') !!}
                        {!! Form::text('standard_indikator', null, array('placeholder' => '','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            {!! Form::close() !!}	
		</div><!-- /.box-body -->
	</div><!-- /.box -->
@endsection
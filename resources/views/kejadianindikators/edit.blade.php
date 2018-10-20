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
			<h3 class="box-title">Edit Kejadian Indikator</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="{{ route('kejadianindikator.index') }}"> Kembali</a> 
			<br>
			{!! Form::model($kis, ['method'=>'PATCH', 'route' => ['kejadianindikator.update', $kis->id]]) !!}

            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {!! Form::label('tgl_kejadian', 'Tanggal Kejadian :') !!}

                {!! Form::date('tgl_kejadian', null, array('placeholder' => '','class' => 'form-control')) !!}

            </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {!! Form::label('id_area_indikator', 'Judul Indikator :') !!}
                <select name="id_area_indikator" class="form-control">
                    @foreach($ais as $sc)
                        <option value="{{ $sc->id}}">{{ $sc->nama_area_indikator}}</option>
                    @endforeach
                </select>
            
            </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    {!! Form::label('kejadian', 'Kejadian :') !!}
                    
                    {!! Form::text('kejadian', null, array('placeholder' => '','class' => 'form-control')) !!}

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    {!! Form::label('standard_indikator', 'Standard indikator :') !!}
                
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
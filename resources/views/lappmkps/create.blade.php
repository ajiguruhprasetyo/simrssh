@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-10 col-lg-offset-2 margin-tb">

	        <div class="pull-left">

	            <h2>Menambahkan Indikator Mutu</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="{{ route('laporanpmkp.index') }}">Kembali</a>

	        </div>

	    </div>

	</div>

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

	{!! Form::open(array('route' => 'laporanpmkp.store','method'=>'POST')) !!}

	<div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Judul Indikator:</strong>

                {!! Form::text('judul_indikator', null, array('placeholder' => 'Judul Indikator Mutu Unit Anda ...','class' => 'form-control')) !!}

            </div>

        </div>

       

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numerator:</strong>

                {!! Form::text('numerator', null, array('placeholder' => '','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Denominator:</strong>

                {!! Form::text('denominator', null, array('placeholder' => '','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-sm btn-primary">Submit</button>

        </div>

	</div>

	{!! Form::close() !!}

@endsection
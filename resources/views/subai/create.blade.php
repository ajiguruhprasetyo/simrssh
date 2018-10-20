@extends('layouts.adminapp')

@section('content')
	
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Menambahkan Sub Kategori Area Indikator</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-primary" href="{{ route('subai.index') }}"> Kembali</a>

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

	{!! Form::open(array('route' => 'subai.store','method'=>'POST')) !!}

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>SUB KATEGORI :</strong>

                {!! Form::text('sub_category', null, array('placeholder' => 'HURUF BESAR SEMUA','class' => 'form-control')) !!}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {!! Form::label('id_area_indikator', 'Area Indikator :') !!}
				<select name="id_area_indikator" class="form-control">
					@foreach($areainds as $ai)
						<option value="{{ $ai->id }}">{{ $ai->nama_area_indikator }}</option>
					@endforeach
				</select>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Simpan</button>

        </div>

	</div>

	{!! Form::close() !!}
@endsection
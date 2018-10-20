@extends('layouts.adminapp')

@section('content')

		<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Edit SUb Area Indikator</h2>

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

	{!! Form::model($subais, ['method' => 'PATCH','route' => ['subai.update', $subais->id]]) !!}

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>SUB KATEGORI :</strong>

                {!! Form::text('sub_category', null, array('placeholder' => '','class' => 'form-control')) !!}

            </div>

        </div>

     

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                    
			{!! Form::label('id_area_indikator', 'Area Indikator :')!!}

              <select class="form-control" name="id_area_indikator">
              	@foreach ($areainds as $data)
					<option value="{{ $data->id }}">{{ $data->nama_area_indikator }}</option>
				@endforeach
			  </select>
              
            </div>

        </div>

      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Submit</button>

        </div>
	</div>

	{!! Form::close() !!}
@endsection
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
			<h3 class="box-title">Edit Jabatan</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="{{ route('jabatan.index') }}"> Kembali</a> 
			<br>
			{!! Form::model($jabatan, ['method' => 'PATCH','route' => ['jabatan.update', $jabatan->id]]) !!}
				<div class="form-group">
					<strong>Jabatan :</strong>
					{!! Form::text('jabatan', null, array('placeholder' => 'Jabatan','class' => 'form-control')) !!}
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			{!! Form::close() !!}
		</div><!-- /.box-body -->
	</div><!-- /.box -->

@endsection
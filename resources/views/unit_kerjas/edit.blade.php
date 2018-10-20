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
				<h3 class="box-title">Edit Unit Kerja</h3>
				<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
				</div><!-- /.box-tools -->
			</div><!-- /.box-header -->
			
			<div class="box-body">
				<a class="btn btn-sm btn-success pull-right" href="{{ route('unit_kerja.index') }}"> Kembali</a> 
				<br>
				{!! Form::model($unit_kerja, ['method' => 'PATCH','route' => ['unit_kerja.update', $unit_kerja->id]]) !!}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Unit Kerja :</strong>
							{!! Form::text('unit_kerja', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Keterangan:</strong>
							{!! Form::textarea('keterangan', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-center">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div><!-- /.box-body -->
	</div><!-- /.box -->
@endsection
@extends('layouts.adminlte')

@section('content')
<div class="row">
	<div class="col-lg-12">
		
		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		@endif

			<div class="box box-primary">
			
				<div class="box-header with-border">
					<h3 class="box-title">Data Kamus Indikator</h3>
					<div class="box-tools pull-right">	
						<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">

					{{ Form::open(['method' => 'get', 'class' => 'form-inline pull-left']) }}
                        {!! Form::text('data',null, array ('value' => request('data'),
                            'class' => 'input-sm form-control',
                            'placeholder' => 'Nama Kamus Indikator',
                            'style' => 'width:200px')) !!}  

                        {{ Form::submit('Search', ['class' => 'btn btn-sm btn-warning']) }}
                    {{ Form::close() }}

				@permission('areaindikator-create')
					<a class="btn btn-sm btn-success pull-right" href="{{ route('areaindikator.create') }}"> Tambah Kamus Indikator</a>
				@endpermission

					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Area Indikator</th>
							<th>Kamus Indikator</th>
							<th></th>
						</tr>
						@foreach ($area_indikators as $areaindikator)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $areaindikator->kode_area_indikator }}</td>
								<td>{{ $areaindikator->nama_area_indikator }}</td>	
								<td>
									<a class="btn btn-sm btn-info" href="{{ route('areaindikator.show',$areaindikator->id) }}">Show</a>
									@permission('areaindikator-edit')
										<a class="btn btn-sm btn-primary" href="{{ route('areaindikator.edit',$areaindikator->id) }}">Edit</a>
									@endpermission
									@permission('areaindikator-delete')
										{!! Form::open(['method' => 'DELETE','route' => ['areaindikator.destroy', $areaindikator->id],'style'=>'display:inline']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
										{!! Form::close() !!}
									@endpermission
								</td>
							</tr>
						@endforeach
					</table>
					{!! $area_indikators->render() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
@endsection
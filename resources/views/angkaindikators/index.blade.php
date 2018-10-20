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
					<h3 class="box-title">Data Angka Indikator</h3>
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

					@permission('angkaindikator-create')
						<a class="btn btn-sm btn-success pull-right" href="{{ route('angkaindikator.create') }}"> Input Indikator Mutu</a>
					@endpermission

						<table class="table table-bordered">
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Judul</th>
								<th>Numerator</th>
								<th>Denumerator</th>
								<th>Persentase</th>
								<th>Standard</th>
								<th></th>
							</tr>
							@foreach ($ais as $ai)
								<tr>
									<td>{{ ++$i }} </td>
									<td>{{ $ai->tgl_input }}</td>
									<td>{{ $ai->areaindikator->nama_area_indikator }}</td>
									<td>{{ $ai->angka_persentase }}</td>
									<td>{{ $ai->jumlah }}</td>	
									<td>{{ $ai->persentase }} %</td>	
									<td>{{ $ai->standard }}</td>
									<td>
										@permission('angkaindikator-edit')
											<a class="btn btn-sm btn-primary" href="{{ route('angkaindikator.edit',$ai->id) }}">Edit</a>
										@endpermission
										@permission('angkaindikator-delete')
											{!! Form::open(['method' => 'DELETE','route' => ['angkaindikator.destroy', $ai->id],'style'=>'display:inline']) !!}
											{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
											{!! Form::close() !!}
										@endpermission
									</td>
								</tr>
							@endforeach
						</table>
					{!! $ais->render() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
@endsection
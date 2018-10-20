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
					<h3 class="box-title">Data Unit Kerja</h3>
				<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
				</div><!-- /.box-tools -->
			</div><!-- /.box-header -->
			<div class="box-body">
				@permission('unit_kerja-create')
					<a class="pull-right btn btn-sm btn-success" href="{{ route('unit_kerja.create') }}">Tambah</a> 
				@endpermission
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Unit Kerja</th>
							<th>Keterangan</th>
							<th width="280px">Aksi</th>	
						</tr>
						@foreach ( $unit_kerja as $uk)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $uk->unit_kerja }}</td>
								<td>{{ $uk->keterangan }}</td>
								<td>
										<a class="btn btn-sm btn-info" href="{{ route('unit_kerja.show',$uk->id) }}">Show</a>
									@permission('unit_kerja-edit')
										<a class="btn btn-sm btn-primary" href="{{ route('unit_kerja.edit',$uk->id) }}">Edit</a>
									@endpermission
									@permission('unit_kerja-delete')
										{!! Form::open(['method' => 'DELETE','route' => ['unit_kerja.destroy', $uk->id],'style'=>'display:inline']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
										{!! Form::close() !!}
									@endpermission
								</td>
							</tr>
							@endforeach
						</table>
					{!! $unit_kerja->render() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
@endsection
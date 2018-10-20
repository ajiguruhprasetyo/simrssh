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
				<h3 class="box-title">Data Jabatan</h3>
				<div class="box-tools pull-right">
						
							<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
						
				</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">
					@permission('jabatan-create')
						<a class="pull-right btn btn-sm btn-success" href="{{ route('jabatan.create') }}">Tambah</a> 
					@endpermission

						<table class="table table-bordered">

							<tr>
								<th>No</th>
								<th>Jabatan</th>
								<th width="280px">Aksi</th>
							</tr>

						@foreach ( $jabatans as $j)
						
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $j->jabatan }}</td>
							<td>
								<a class="btn btn-sm btn-info" href="{{ route('jabatan.show',$j->id) }}">Show</a>
								
								@permission('jabatan-edit')
									<a class="btn btn-sm btn-primary" href="{{ route('jabatan.edit',$j->id) }}">Edit</a>
								@endpermission

								@permission('jabatan-delete')
									{!! Form::open(['method' => 'DELETE','route' => ['jabatan.destroy', $j->id],'style'=>'display:inline']) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
									{!! Form::close() !!}
								@endpermission
							</td>
						</tr>
						@endforeach
						</table>
					{!! $jabatans->render() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
@endsection
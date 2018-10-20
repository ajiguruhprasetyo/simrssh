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
							<h3 class="box-title">Data Role</h3>
						<div class="box-tools pull-right">	
							<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
						</div><!-- /.box-tools -->
					</div><!-- /.box-header -->
					
					<div class="box-body">
						@permission('role-create')
							<a class="btn btn-sm btn-success pull-right" href="{{ route('roles.create') }}">Tambah</a>
						@endpermission
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Description</th>
							<th width="280px">Action</th>
						</tr>
						@foreach ($roles as $key => $role)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $role->display_name }}</td>
								<td>{{ $role->description }}</td>
								<td>
									<a class="btn btn-sm btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
									@permission('role-edit')
										<a class="btn btn-sm btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
									@endpermission
									@permission('role-delete')
										{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
											{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
										{!! Form::close() !!}
									@endpermission
								</td>
							</tr>
						@endforeach
					</table>
					{!! $roles->render() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
@endsection
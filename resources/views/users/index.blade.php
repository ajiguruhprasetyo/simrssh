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
						<h3 class="box-title">Data User</h3>
					<div class="box-tools pull-right">	
						<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">
					<a class="btn btn-sm btn-success pull-right" href="{{ route('users.create') }}"> Tambah User</a>
					<a class="btn btn-sm btn-default pull-right" href="{{ route('users.download') }}"> Download</a> 
				
						<table class="table table-bordered">
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Alamat Email</th>
								<th>Roles</th>
								<th width="280px">Action</th>
							</tr>
							@foreach ($data as $key => $user)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>
									@if(!empty($user->roles))
										@foreach($user->roles as $v)
											<label class="label label-success">{{ $v->display_name }}</label>
										@endforeach
									@endif
								</td>
								<td>
									<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
									<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
									{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</table>
					{!! $data->render() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
@endsection
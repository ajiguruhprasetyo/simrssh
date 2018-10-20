@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Arisan</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('arisan-create')

	            <a class="btn btn-sm btn-success" href="{{ route('arisan.create') }}"> New Data</a>

	            @endpermission

	        </div>

	    </div>

	</div>

	@if ($message = Session::get('success'))

		<div class="alert alert-success">

			<p>{{ $message }}</p>

		</div>

	@endif

	<table class="table table-bordered">

		<tr>

			<th>No</th>

			<th>Nama</th>

			<th>Tanggal</th>

			<th>Status</th>

			<th>Jumlah Setoran</th>

			<th></th>

		</tr>

	@foreach ($arisans as $key => $a)

	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $a->nama }}</td>

		<td>{{ date_format ( date_create($a->tanggal), "d F Y" ) }}</td>

		<td>{{($a->status) }}</td>

		<td>{{ $a->setoran }}</td>

		<td>

			<a class="btn btn-sm btn-info" href="{{ route('arisan.show',$a->id) }}">Show</a>

			@permission('arisan-edit')

				<a class="btn btn-sm btn-primary" href="{{ route('arisan.edit',$a->id) }}">Edit</a>

			@endpermission

			@permission('arisan-delete')

				{!! Form::open(['method' => 'DELETE','route' => ['arisan.destroy', $a->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

        	@endpermission

		</td>

	</tr>

	@endforeach

	</table>

	{!! $arisans->render() !!}

@endsection
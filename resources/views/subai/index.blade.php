@extends('layouts.adminapp')

@section('content')
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Sub Kategori Area Indikator</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('subai-create')

	            <a class="btn btn-sm btn-success" href="{{ route('subai.create') }}"> Tambah Data</a>

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

			<th>Area Indikator</th>

		</tr>

	@foreach ($subais as $key => $sub)

	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $sub->sub_category }}</td>

		<td>{{ $sub->areaindikator->nama_area_indikator }}</td>

		<td>

<!-- 			<a class="btn btn-sm btn-info" href="{{ route('subai.show',$sub->id) }}">Show</a>
 -->
			@permission('subai-edit')

				<a class="btn btn-sm btn-primary" href="{{ route('subai.edit',$sub->id) }}">Edit</a>

			@endpermission

			@permission('subai-delete')

				{!! Form::open(['method' => 'DELETE','route' => ['subai.destroy', $sub->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

        	@endpermission

		</td>

	</tr>

	@endforeach

	</table>

	{!! $subais->render() !!}
@endsection
@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Indikator Mutu</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-success" href="{{ route('pmkp.create') }}"> Menambah Indikator Mutu</a>

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

			<th>Unit Kerja</th>

			<th>No. Dokumen</th>

			<th>Judul Sasaran Mutu</th>

			<th>Target</th>


			<th width="280px">Aksi</th>

		</tr>

	@foreach ( $pmkps as $p)

	<tr>

		<td>{{ $p->id }}</td>

		<td>{{ $p->unitkerja }}</td>

		<td>{{ $p->kode_pmkp }}</td>

		<td>{{ $p->nama_ind_mutu }}</td>

		<td>{{ $p->t_kerja }}</td>

		<td>

				<a class="btn btn-sm btn-primary" href="{{ route('pmkp.edit',$p->id) }}">Edit</a>


				{!! Form::open(['method' => 'DELETE','route' => ['pmkp.destroy', $p->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

		</td>

	</tr>

	@endforeach

	</table>

	{!! $pmkps->render() !!}

@endsection
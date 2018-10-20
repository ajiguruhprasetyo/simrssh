@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Indikator Mutu</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-success" href="{{ route('laporanpmkp.create') }}"> Menambah Indikator Mutu</a>

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

			<th>Judul Indikator</th>

			<th>Numerator</th>

			<th>Denumerator</th>

			<th>Tanggal</th>


			<th width="280px">Aksi</th>

		</tr>

	@foreach ( $lappmkps as $p)

	<tr>

		<td>{{ $p->id }}</td>

		<td>{{ $p->judul_indikator }}</td>

		<td>{{ $p->numerator }}</td>

		<td>{{ $p->denominator }}</td>

		<td>{{ $p->created_at }}</td>

		<td>

				<a class="btn btn-sm btn-primary" href="{{ route('laporanpmkp.edit',$p->id) }}">Edit</a>


				{!! Form::open(['method' => 'DELETE','route' => ['laporanpmkp.destroy', $p->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

		</td>

	</tr>

	@endforeach

	</table>


@endsection
@extends('layouts.adminlte')

@section('content')

<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>List data Surveilance</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('ppi-create')

	            <a class="btn btn-sm btn-success" href="{{ route('ppi.create') }}"> Create New Data</a>

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
			<th rowspan="2">No Reg</th>
			<th rowspan="2">Nama Pasien</th>
			<th rowspan="2">Tanggal Input</th>
			<th rowspan="2">Ruang</th>
			<th rowspan="2">Jumlah pasien di rawat</th>
			<th rowspan="2">Jumlah tirah baring</th>
			<th rowspan="2">Total operasi</th>
			<th colspan="4">Jumlah pakai alat</th>
			<th colspan="6">Jenis Infeksi</th>
			<th rowspan="2">Hasil Kultur</th>
			<th rowspan="2">Opsi</th>
		</tr>

		<tr>
				<th>IVC</th>
				<th>UC</th>
				<th>VM</th>
				<th>ETT</th>
				<th>Plebitis</th>
				<th>ISK</th>
				<th>VAP</th>
				<th>HAP</th>
				<th>Dekubitus</th>
				<th>IDO</th>
			</tr>

	@foreach ( $ppis as $p)
			<tr>
				<td>
					{{ $p->no_reg  }}
				</td>
				<td>
					{{ $p->nama_pasien }}
				</td>
				<td>
					{{ date ('j, F, o', strtotime($p->created_at))  }}
				</td>
				<td>
					{{ $p->ruang }}
				</td>
				<td>
					{{ $p->jml_pasien_rawat }}
				</td>
				<td>
					{{ $p->jml_tirah_baring }}
				</td>
				<td>
					{{ $p->total_operasi }}
				</td>
				<td>
					{{ $p->ivc }}
				</td>
				<td>
					{{ $p->uc }}
				</td>
				<td>{{ $p->vm }}
				</td>
				<td>
					{{ $p->ett }}
				</td>
				<td>
					{{ $p->plebitis }}
				</td>
				<td>
					{{ $p->isk }}
				</td>
				<td>
					{{ $p->vap }}
				</td>
				<td>
					{{ $p->hap }}
				</td>
				<td>
					{{ $p->dekubitus }}
				</td>
				<td>
					{{ $p->ido }}
				</td>
				<td>{{ $p->hsl_kultur }}</td>

				<td>
						<a class="btn btn-sm btn-default" href="{{ route('ppi.edit',$p->id) }}">edit</a>

						{!! Form::open(['method' => 'DELETE','route' => ['ppi.destroy', $p->id],'style'=>'display:inline']) !!}
			            {!! Form::submit('X', ['class' => 'btn btn-sm btn-danger', 'url' => 'image/crud/delete.png']) !!}
			        	{!! Form::close() !!}

				</td>
			</tr>

		@endforeach

	</table>

	{!! $ppis->render() !!}
	
@endsection

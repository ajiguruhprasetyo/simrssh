@extends('layouts.adminlte')

@section('content')
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Surveilance</h2>
				<hr>
	        </div>

	        <div class="pull-right">
                <form action="{{ route('ppi.laporan') }}" method="get" class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="Cari" aria-label="Search">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> Cari</button>
                    </div>
                    
                </form>
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
		@if(count($resultppi) > 0)
			@foreach ( $resultppi as $p)
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
			</tr>

			@endforeach
		@else
		<p>Data yang anda cari tidak tersedia</p>
		@endif
	</table>

			<div class="pull-left">
				@permission('ppi-download')
	            	<a class="btn btn-sm btn-default" href="{{ route('ppi.download') }}">Download </a>
	            @endpermission	            
	        </div>

@endsection



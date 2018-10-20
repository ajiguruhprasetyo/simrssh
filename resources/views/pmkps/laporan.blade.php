@extends('layouts.adminapp')

@section('content')
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Indikator MUtu</h2>
				<hr>
	        </div>

	        <div class="pull-right">
                <form action="{{ route('pmkp.index') }}" method="get" class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" name="s" placeholder="Cari" value="{{ isset($s) ? $s : '' }}">
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
			<th>No</th>
			<th>Periode Laporan</th>
			<th>Kode Unit</th>
			<th>Judul Sasaran Mutu</th>
			<th>Target</th>
			<th>Capaian</th>
		</tr>

	@foreach ( $pmkps as $pmkp)
			<tr>
				<td>
					{{ $pmkp->id  }}
				</td>
				<td>
					{{ date_format( date_create($pmkp->created_at), 'F, Y') }}
				</td>
				<td>
					{{ $pmkp->kategori_pmkp }}
				</td>
				<td>
					{{ $pmkp->nama_ind_mutu }}
				</td>
				<td>
					{{ $pmkp->t_kerja }}
				</td>
				<td>
					{{ $pmkp->capaian }}
				</td>	
			</tr>
	@endforeach

	</table>

	{{ $pmkps->links() }}
			<div class="pull-left">
				@permission('pmkp-download')
	            	<a class="btn btn-sm btn-default" href="{{ route('pmkp.download') }}">Download </a>
	            @endpermission	            
	        </div>

@endsection



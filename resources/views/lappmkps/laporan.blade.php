@extends('layouts.adminapp')

@section('content')
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Indikator MUtu</h2>
				<hr>
	        </div>

	        <div class="pull-right">
                <form action="{{ route('laporanpmkp.laporan') }}" method="get" class="form-inline">
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
			<th>No</th>
			<th>Periode Laporan</th>
			<th>Judul Indikator</th>
			<th>Numerator</th>
			<th>Denominator</th>
		
		</tr>
	@if(count($result) > 0)
		@foreach ( $result as $pmkp)
				<tr>
					<td>
						{{ $pmkp->id  }}
					</td>
					<td>
						{{ date_format( date_create($pmkp->created_at), 'F, Y') }}
					</td>
					<td>
						{{ $pmkp->judul_indikator }}
					</td>
					<td>
						{{ $pmkp->numerator }}
					</td>
					<td>
						{{ $pmkp->denominator }}
					</td>
					
				</tr>
		@endforeach
	@else
	<p>Data tidak tersedia</p>
	@endif
	</table>

	
			<div class="pull-left">
				@permission('pmkp-download')
	            	<a class="btn btn-sm btn-default" href="{{ route('laporanpmkp.download') }}">Download </a>
	            @endpermission	            
	        </div>

@endsection



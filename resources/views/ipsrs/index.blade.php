@extends('layouts.adminlte')

@section('content')

<div class="row">
	<div class="col-lg-12">
		
		

			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Pengajuan Perbaikan IPSRS</h3>
					   
					<div class="box-tools pull-right">
						<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
					</div><!-- /.box-tools -->
					
				</div><!-- /.box-header -->
				<div class="box-body">
					@if ($message = Session::get('success'))
						<div class="alert alert-success">
							<p>{{ $message }}</p>
						</div>
					@endif
					<div class="pull-right">
						<a class="btn btn-sm btn-success" href="{{ route('ipsrs.create') }}"> Hubungi Teknisi</a>
					</div>
	            		
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Jam</th>
								<th>Nama Alat</th>
								<th>Ruang</th>
								<th>Kerusakan</th>
								<th>Status</th>
								<th>Pelapor</th>
								<th>Sparepart</th>
								<th>Keterangan</th>
								<th>Permintaan</th>
								
							</tr>
						</thead>
					@foreach ($ipsrs as $key => $p)
						
						<tbody>
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ date("d M Y", strtotime($p->created_at)) }}</td>
								<td>{{ date("H:i", strtotime($p->created_at)) }} WIB</td>
								<td>{{ $p->nama_alat }}</td>
								<td>{{ $p->ruang }}</td>
								<td>{{ $p->kerusakan }}</td>
								<td>
									@if ($p->status == 'RUSAK')
										<label class="label label-danger">{{ $p->status }}</label>
									@elseif ($p->status == 'PROSES')
										<label class="label label-warning">{{ $p->status }}</label>
									@else
										<label class="label label-success">{{ $p->status }}</label>
									@endif
								</td>
								<td>{{ $p->pelapor }}</td>
								<td>{{ $p->sparepart }}</td>
								<td>{{ $p->keterangan }}</td>
								<td>
									@if ($p->permintaan == 'PENGAJUAN')
										<label class="label label-danger">{{ $p->permintaan }}</label>
									@elseif ($p->permintaan == 'PROSES')
										<label class="label label-warning">{{ $p->permintaan }}</label>
									@else
										<label class="label label-success">{{ $p->permintaan }}</label>
									@endif
								</td>
								<td>
									<!-- <a class="btn btn-sm btn-info" href="{{ route('ipsrs.show',$p->id) }}">Show</a> -->
									@permission('ipsrs-edit')
										<a class="btn btn-sm btn-primary" href="{{ route('ipsrs.edit',$p->id) }}">Edit</a>
									@endpermission

									@permission('ipsrs-delete')
										{!! Form::open(['method' => 'DELETE','route' => ['ipsrs.destroy', $p->id],'style'=>'display:inline']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
										{!! Form::close() !!}
									@endpermission
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>

					{!! $ipsrs->render() !!}
				</div>
				
	    </div>

	</div>
@stop
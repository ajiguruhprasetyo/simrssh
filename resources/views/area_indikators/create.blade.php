@extends('layouts.adminlte')


@section('content')
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Menambahkan Kamus Indikator</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="{{ route('areaindikator.index') }}"> Kembali</a> 
			<br>
			{!! Form::open(array('route' => 'areaindikator.store','method'=>'POST')) !!}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('kode_area_indikator', 'Area Indikator :') !!}
							{!! Form::text('kode_area_indikator', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('id_unitkerja', 'Unit Kerja :') !!}
							<select name="id_unitkerja" class="form-control">
								@foreach($unitkerjas as $uk)
									<option value="{{ $uk->id }}">{{ $uk->unit_kerja }}</option>
								@endforeach
							</select>
							<!-- {!! Form::text('id_unitkerja', null, array('placeholder' => '','class' => 'form-control')) !!} -->
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('ruang_lingkup', 'Ruang Lingkup :') !!}
							{!! Form::text('ruang_lingkup', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('nama_area_indikator', 'Judul Indikator :') !!}
							{!! Form::text('nama_area_indikator', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('dasar_pemikiran', 'Dasar Pemikiran :') !!}
							{!! Form::text('dasar_pemikiran', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('definisi_ind', 'Definisi Operasional :') !!}
							{!! Form::text('definisi_ind', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('k_inklusi', 'Kriteria Inklusi') !!}
							{!! Form::text('k_inklusi', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('k_eksklusi', 'Kriteria Eksklusi') !!}
							{!! Form::text('k_eksklusi', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('tipe_ind', 'Tipe Indikator') !!}
							{!! Form::text('tipe_ind', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('numerator', 'Numerator') !!}
							{!! Form::text('numerator', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('denumerator', 'Denumerator') !!}
							{!! Form::text('denumerator', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('target_kerja', 'Target Kinerja :') !!}
							{!! Form::text('target_kerja', null, array('placeholder' => '%','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('standard', 'Standard') !!}
							{!! Form::text('standard', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('sumber_data', 'Sumber Data :') !!}
							{!! Form::text('sumber_data', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('fp_data', 'Frekuensi Pengumpulan Data :') !!}
							{!! Form::select('fp_data', ['hari' => 'hari', 'minggu' => 'minggu','bulan' => 'bulan', 'triwulan' => 'triwulan','semester' => 'semester', 'tahun' => 'tahun']) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('periode_analisa', 'Frekuensi Analisis Data') !!}
							{!! Form::select('periode_analisa', ['hari' => 'hari', 'minggu' => 'minggu','bulan' => 'bulan', 'triwulan' => 'triwulan','semester' => 'semester', 'tahun' => 'tahun']) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('id_user', 'Penanggung Jawab Pengumpulan Data') !!}
							{!! Form::text('id_user', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							{!! Form::label('keterangan', 'Keterangan') !!}
							{!! Form::text('keterangan', null, array('placeholder' => '','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			{!! Form::close() !!}	
		</div><!-- /.box-body -->
	</div><!-- /.box -->	
@endsection
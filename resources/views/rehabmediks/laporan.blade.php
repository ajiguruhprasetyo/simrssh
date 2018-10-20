@extends('layouts.adminlte')


@section('content')
<div class="row">
	<div class="col-lg-12">
		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		@endif
			<div class="box box-primary">
				<div class="box-header with-border">
				    <h3 class="box-title">{{ trans('adminlte.list-rehabmedik') }}</h3>
                    <div class="box-tools pull-right">        
                       <a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
                    </div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
                    {{ Form::open(['method' => 'get', 'class' => 'form-inline pull-right']) }}
                        {!! Form::text('data',null, array ('value' => request('data'),
                            'class' => 'input-md form-control',
                            'placeholder' => 'Nama Pasien atau No Reg',
                            'style' => 'width:300px')) !!}  
                        {{ Form::submit('Search', ['class' => 'btn btn-md']) }}
                    {{ Form::close() }}
						 <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No RM</th>
                                    <th>Nama</th>
                                    <th>No Reg</th>
                                    <th>Tgl Periksa</th>
                                    <th>FT1</th>
                                    <th>FT2</th>
                                    <th>FT3</th>
                                    <th>FT4</th>
                                    <th>FT5</th>
                                    <th>FT6</th>
                                    <th>FT7</th>
                                    <th>FT8</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach( $rehabmediks as $rm)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $rm->no_rm}}</td>
                                        <td>{{ $rm->nama}}</td>
                                        <td>{{ $rm->no_reg}}</td>
                                        <td>{{ date_format(date_create($rm->tgl_periksa_dokter), "d M y") }}</td>
                                        <td>{{ $rm->tgl_ft1 }}</td>
                                        <td>{{ $rm->tgl_ft2}}</td>
                                        <td>{{ $rm->tgl_ft3}}</td>
                                        <td>{{ $rm->tgl_ft4}}</td>
                                        <td>{{ $rm->tgl_ft5}}</td>
                                        <td>{{ $rm->tgl_ft6}}</td>
                                        <td>{{ $rm->tgl_ft7}}</td>
                                        <td></td>
                                        <td>{{ $rm->keterangan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    <div class="text-center">
                        {{ $rehabmediks->links() }}
                    </div>
				</div><!-- /.box-body -->
            </div>
                <i style="color:green;">* NB untuk FT 1 s/d FT 8 tanggal berdasarkan 2018-09-30 tahun-bulan-tanggal. Terima kasih</i>
            </div>
		</div><!-- /.box -->
	</div><!-- /.row -->
@stop
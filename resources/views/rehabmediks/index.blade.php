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
				    <h3 class="box-title">Data Pasien Rehab Medik</h3>
                    <div class="box-tools pull-right">        
                       <a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
                    </div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">

                    {{ Form::open(['method' => 'get', 'class' => 'form-inline pull-left']) }}
                        {!! Form::text('data',null, array ('value' => request('data'),
                            'class' => 'input-sm form-control',
                            'placeholder' => 'Nama Pasien atau No Reg',
                            'style' => 'width:200px')) !!}  

                        {{ Form::submit('Search', ['class' => 'btn btn-sm btn-warning']) }}
                    {{ Form::close() }}

					@permission('create-rehabmedik')
                        <a class="btn btn-sm btn-success pull-right" href="{{ route('rehabmedik.create') }}">{{ trans('create') }}</a> 
					@endpermission

						 <table class="table `table-responsive">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No RM</th>
                                    <th>Nama</th>
                                    <th>No Reg</th>
                                    <th>Tanggal periksa</th>
                                    <th>Keterangan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $rehabmediks as $rm)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $rm->no_rm}}</td>
                                        <td>{{ $rm->nama}}</td>
                                        <td>{{ $rm->no_reg}}</td>
                                        <td>{{ $rm->tgl_periksa_dokter}}</td>
                                        <td>{{ $rm->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('rehabmedik.edit', $rm->id) }}" class="btn btn-sm btn-primary">{{ trans('adminlte.edit') }}</a> 
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['rehabmedik.destroy', $rm->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}              
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="text-center">
                            {{ $rehabmediks->links() }}
                        </div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->

@stop
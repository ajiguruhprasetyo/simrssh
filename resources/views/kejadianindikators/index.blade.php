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
				    <h3 class="box-title">Data Kejadian Indikator</h3>
                    <div class="box-tools pull-right">
                        <a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
                    </div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				
				<div class="box-body">

                {{ Form::open(['method' => 'get', 'class' => 'form-inline pull-left']) }}
					
                    {!! Form::text('data',null, array ('value' => request('data'),
                        'class' => 'input-sm form-control',
                        'placeholder' => 'Nama Kamus Indikator',
                        'style' => 'width:200px')) !!}  

                    {{ Form::submit('Search', ['class' => 'btn btn-sm btn-warning']) }}
                {{ Form::close() }}
                
                @permission('kejadianindikator-create')
                    <a class="btn btn-sm btn-success pull-right" href="{{ route('kejadianindikator.create') }}"> Tambah Kejadian Indikator</a>
                @endpermission

					<table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Kejadian</th>
                            <th>Standard</th>
                            <th></th>
                        </tr>
                        @foreach ($kejadianindikators as $ki)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $ki->tgl_kejadian }}</td>
                            <td>{{ $ki->areaindikator->nama_area_indikator }}</td>
                            <td>{{ $ki->kejadian }}</td>
                            <td>{{ $ki->standard_indikator }}</td>
                            <td>
                                @permission('kejadianindikator-edit')
                                    <a class="btn btn-sm btn-primary" href="{{ route('kejadianindikator.edit',$ki->id) }}">Edit</a>
                                @endpermission
                                @permission('kejadianindikator-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['kejadianindikator.destroy', $ki->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                @endpermission
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    {!! $kejadianindikators->render() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
@endsection
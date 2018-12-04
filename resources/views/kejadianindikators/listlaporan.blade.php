@extends('layouts.adminlte')

@section('content')
    <div class="container">
        <div class="box box-primary">
            <div class="box-header">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            </div>
            <div class="box-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Input</th>
                            <th>Nama Kejadian</th>
                            <th>Jumlah</th>
                            <th>Standard</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kejadian as $key => $h)
                            <tr>
                                <td>#</td>
                                <td>{{ date_format ( date_create($h->tgl_kejadian), "d M Y" ) }}</td>
                                <td>{{ $h->areaindikator->nama_area_indikator }}</td>
                                <td>{{ $h->kejadian }}</td>
                                <td>{{ $h->standard_indikator }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        Total data : <strong>{!! count($kejadian) !!}</strong>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@stop


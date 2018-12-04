@extends('layouts.adminlte')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
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
                                <th>Tanggal Input</th>
                                <th>Indikator Mutu</th>
                                <th>Num</th>
                                <th>Denum</th>
                                <th>Hasil</th>
                                <th>Standard</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($las as $key => $l)
                                <tr>
                                    <td>{{ date_format ( date_create($l->tgl_input), "d M Y" ) }}</td>
                                    <td>{{ $l->areaindikator->nama_area_indikator }}</td>
                                    <td>{{ $l->angka_persentase }}</td>
                                    <td>{{ $l->jumlah }}</td>
                                    <td>{{ $l->persentase }}</td>
                                    <td>{{ $l->standard }}</td>
                                 
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            Total data : <strong>{!! count($las) !!}</strong>
                        </tfoot>
                    </table>
                </div>
            </div>

            </div>
        </div>
        
    </div>
@stop


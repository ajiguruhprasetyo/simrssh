@extends('layouts.adminlte')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel panel-head">
            </div>
            <div class="panel panel-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>List Indikator Mutu</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ais as $key => $a)
                        <tr>
                            <td><a href="{{ route('angkaindikator.listlaporan', $a->id_areaindikator) }}">{{ $a->areaindikator->nama_area_indikator }}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection
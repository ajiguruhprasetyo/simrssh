@extends('layouts.adminlte')

@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Data Kejadian Indikator</h2>
                <hr>
            </div>
            
        </div>

        <div class="container">
            <div class="box">
                <form class="form-horizontal" method="post" action="">
                
                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            {!! Form::label('id_area_indikator', 'Judul Indikator :') !!}

                            <select class="form-control" name="id_area_indikator">
                                @foreach($ares as $s)
                                    <option value="{{ $s->id }}">{{ $s->nama_area_indikator}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div>
                                 {!! Form::label('Tanggal :') !!}
                                <input type="hidden" name="tgl_awal" id="tgl_awal" value="">
                                <input type="text" name="tgl_awal_show" id="tgl_awal_show" value="">
                                s.d 
                                <input type="hidden" name="tgl_akhir" id="tgl_akhir" value="">
                                <input type="text" name="tgl_akhir_show" id="tgl_akhir_show" value="">
                            </div> 
                        </div>

                        <div class="form-group">

                            {!! Form::label('&nbsp;')!!}

                            <div class="col-md-4">
                                {{ Form::submit('Filter') }}
                            </div>

                        </div>
                        
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

            <th>Tanggal</th>

            <th>Judul</th>

            <th>Kejadian</th>

            <th>Standard</th>

        </tr>

        @foreach ($kis as $ki)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $ki->tgl_kejadian }}</td>

            <td>{{ $ki->areaindikator->nama_area_indikator }}</td>

            <td>{{ $ki->kejadian }}</td>

            <td>{{ $ki->standard_indikator }}</td>

        </tr>

        @endforeach

    </table>

    {!! $kis->render() !!}

       <div class="pull-left">


        <a class="btn btn-sm btn-success" href="{{ route('kejadianindikator.download') }}"> Download</a>

        </div>

@endsection
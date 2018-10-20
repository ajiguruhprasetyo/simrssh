@extends('layouts.blank')

@section('content')

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {!! Form::label('id_unitkerja','UNIT KERJA :')!!}
                {{ $areaindikators->id }}
                <br>
        
                {!! Form::label('ruang_lingkup', 'RUANG LINGKUP :')!!}
                {{ $areaindikators->ruang_lingkup }}
                
                <hr>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {!! Form::label('nama_area_indikator', 'NAMA INDIKATOR :')!!}
                {{ $areaindikators->nama_area_indikator }}

                <hr>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {!! Form::label('dasar_pemikiran', 'DASAR PEMIKIRAN :')!!}
                {{ $areaindikators->dasar_pemikiran }}
                <br>
                {!! Form::label('definisi_ind', 'DEFINISI INDIKATOR :')!!}
                {{ $areaindikators->definisi_ind }}
                
                <br>
                {!! Form::label('k_inklusi', 'Inklusi :')!!}
                {{ $areaindikators->k_inklusi }}
                
                <br>
                {!! Form::label('k_eksklusi', 'Eksklusi :')!!}
                {{ $areaindikators->k_inklusi }}

                <br>
                {!! Form::label('tipe_ind', 'TIPE INDIKATOR :')!!}
                {{ $areaindikators->tipe_ind }}
                <hr>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {!! Form::label('numerator','PEMBILANG (Numerator)  :') !!}
                {{ $areaindikators->numerator }}
                <br>
                {!! Form::label('denumerator','PENYEBUT (Denumerator) :') !!}
                {{ $areaindikators->denumerator }}
                <hr>
            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {!! Form::label('standard','STANDARD :') !!}
                {{ $areaindikators->standard }}
                <br>
                {!! Form::label('keterangan','KETERANGAN :') !!}
                {{ $areaindikators->keterangan }}

            </div>

        </div>
</div>
@endsection
 @extends('layouts.adminlte')
 
 @section('content')
 <div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Angka Indikator</h2>
            <hr>
        </div>

    </div>

    <div class="container">
            <div class="box">
                <form class="form-horizontal" method="post" action="">
                
                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            {!! Form::label('Judul Indikator :') !!}

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

    <!-- <div class="pull-right">
        <form action="{{ route('angkaindikator.index') }}" method="get" class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" name="s" placeholder="Cari" value="{{ isset($s) ? $s : '' }}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit"> Cari</button>
            </div>
            
        </form>
    </div> -->


</div>

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif

<table class="table table-bordered">

<tr>

    <th>No</th>

    <th>Area Indikator</th>

    <th>Tanggal Input</th>

    <th>Numerator</th>

    <th>Denumerator</th>

    <th>Persentase</th>

    <th>Standard</th>

</tr>


@foreach ($ais as $key => $h)


<tr>

<td> {{ ++$i }}</td>

<td> {{ $h->areaindikator->nama_area_indikator }}</td>

<td> {{ $h->tgl_input}} </td>

<td> {{ $h->angka_persentase }}</td>

<td> {{  $h->jumlah }} </td>

<td> {{  $h->persentase }}% </td>

<td> {{  $h->standard }} </td>

</tr>

@endforeach

</table>

{{ $ais->links() }}
    <div class="pull-left">


        @permission('angkaindikator-download')

        <a class="btn btn-sm btn-success" href="{{ route('angkaindikator.download') }}"> Download</a>

        @endpermission	            

    </div>

 @endsection
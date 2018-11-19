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
                
                    <div class="col-xs-4 col-sm-4 col-md-4">

                        <div class="form-group">
                            <div>
                                {!! Form::label('Judul Indikator :') !!}

                                <select class="form-control" name="id_area_indikator">
                                    @foreach($ares as $s)
                                        <option value="{{ $s->id }}">{{ $s->nama_area_indikator}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                 {!! Form::label('Tanggal Input:') !!}
                                 <br/>
                                <input type="hidden" name="start_date" id="start_date" value="{{ $start_date }}"/>
                                <input type="text" name="start_date_show" id="start_date_show" value="{{ $start_date }} "  style="width:150px; text-align: right;"/>
                                s.d 
                                <input type="hidden" name="end_date" id="end_date" value="{{ $end_date }}"/>
                                <input type="text" name="tanggal_akhir_show" id="tanggal_akhir_show" value="{{ $end_date }}"  style="width:150px; text-align: right;"/>
                            </div> 
                        </div>

                        <div class="form-group">

                            {!! Form::label('&nbsp;')!!}

                            <div class="col-md-4">
                                {{ Form::submit('Filter', ['id' => 'btn-filter']) }}
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
    <thead>
        <tr>

            <th>No</th>

            <th>Area Indikator</th>

            <th>Tanggal Input</th>

            <th>Numerator</th>

            <th>Denumerator</th>

            <th>Persentase</th>

            <th>Standard</th>

        </tr>
    </thead>

@foreach ($ais as $key => $h)

<tbody id="data_show">
    <tr>

        <td> {{ ++$i }}</td>

        <td> {{ $h->areaindikator->nama_area_indikator }}</td>

        <td> {{ $h->tgl_input}} </td>

        <td> {{ $h->angka_persentase }}</td>

        <td> {{  $h->jumlah }} </td>

        <td> {{  $h->persentase }}% </td>

        <td> {{  $h->standard }} </td>

    </tr>
</tbody>



@endforeach

</table>

{{ $ais->links() }}
    <div class="pull-left">
        @permission('angkaindikator-download')
            <a class="btn btn-sm btn-success" href="{{ route('angkaindikator.download') }}"> Download</a>
        @endpermission	            
    </div>
    <script>
    $(document).ready(function() {
         $('#btn-filter').on('click', function(){
            $('#data_show').empty();
            $('#data_show').append('<tr><td colspan="6">&nbsp;&nbsp; <b>Loading ....</b></td></tr>');
            
        })
        $("#start_date_show").attr('readonly', true);  
        $("#start_date_show").datepicker({
            changeMonth: true,
            changeYear: true,
            autoclose: true,
            format: 'd MM yyyy',
            linkFormat: "yy-mm-dd",
            linkField: '#tgl_pr'

        }).on("changeDate", function(e) {
            var newDate = e.format('yyyy-mm-dd')
            $("input[name='created_at']").val(newDate);
        });
        $("#end_date_show").attr('readonly', true);  
        $("#end_date_show").datepicker({
            changeMonth: true,
            changeYear: true,
            autoclose: true,
            format: 'd MM yyyy',
            linkFormat: "yy-mm-dd",
            linkField: '#tgl_pr'

        }).on("changeDate", function(e) {
            var newDate = e.format('yyyy-mm-dd')
            $("input[name='created_at']").val(newDate);
        });
    });

</script>
 @endsection
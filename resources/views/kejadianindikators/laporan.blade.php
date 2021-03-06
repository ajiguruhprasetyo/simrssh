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
                    @foreach($kis as $key => $k)
                        <tr>
                            <td><a href="{{ route('kejadianindikator.listlaporan', $k->id_area_indikator) }}">{{ $k->areaindikator->nama_area_indikator }}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div id="list-data-kejadian">
        </div>
    </div>
@endsection

@section('script')
    <!-- <script type="text/javascript">
        $("#tgl_kejadian").datepicker({
            changeMonth     : true,
            changeMonth     : true,
            changeYear      : true,
            yearRange       : '1970:+0',
            dateFormat      : "yy-mm-dd",
            onSelect: function(dateText){
                var TglKejadian        = $('#tgl_kejadian').val();
                var EndDate            = $('#end_date').val();
                var IdAreaIndikator   = $('#id_area_indikator').val();
                listKejadian(TglKejadian, EndDate, IdAreaIndikator);
            }
        });

         $("#end_date").datepicker({
            changeMonth : true,
            changeMonth : true,
            changeYear  : true,
            yearRange   : '1970:+0',
            dateFormat  : "yy-mm-dd",
            onSelect    : function(dateText){
                var TglKejadian      = $('#tgl_kejadian').val();
                var EndDate          = $('#end_date').val();
                var IdAreaIndikator = $('#id_area_indikator').val();
                listKejadian(TglKejadian, EndDate, IdAreaIndikator);
            }
        });

      

        function listKejadian(criteria1, criteria2, criteria3){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                $.ajax({
                type    : 'get',
                url     : "{!!url('kejadianindikator.download')!!}",
                data    : {TglKejadian:criteria1,EndDate:criteria2,IdAreaIndikator:criteria3},
                success :function(data)
                {
                    $('.list-data-kejadian').empty().html(data);
                }
            })
        }
    </script> -->
@endsection

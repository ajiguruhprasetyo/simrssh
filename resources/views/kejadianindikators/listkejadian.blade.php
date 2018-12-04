@if (count($status))
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table-responsive" id="list-data-kejadian">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Kejadian</th>
                            <th>Standard</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $status as $key => $k)
                            <tr>
                                <td></td>
                                <td>{{ $k->tgl_kejadian}}</td>
                                <td>{{ $k->id_area_indikator}}</td>
                                <td>{{ $k->kejadian}}</td>
                                <td>{{ $k->standard_indikator}}</td>
                            </tr>
                        @endforeach    
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Number : {!! count($status) !!}</td>
                        </tr>  
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endif
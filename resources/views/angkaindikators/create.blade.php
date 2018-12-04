@extends('layouts.adminlte')

@section('content')

    @if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Menambahkan Data Indikator Mutu</h3>
			<div class="box-tools pull-right">
					<a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		
		<div class="box-body">
			<a class="btn btn-sm btn-success pull-right" href="{{ route('angkaindikator.index') }}"> Kembali</a> 
			<br>
			{!! Form::open(array('route' => 'angkaindikator.store','method'=>'POST', 'name' => 'autoSumForm')) !!}
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {!! Form::label('id_areaindikator', 'Judul Indikator:') !!}
                            <select name="id_areaindikator" class="form-control">
                                @foreach( $ais as $ai)
                                    <option value="{{ $ai->id }}">{{ $ai->nama_area_indikator }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tanggal:</strong>
                            {!! Form::date('tgl_input', null, array('placeholder' => '','class' => 'form-control', 'id'=> 'datepicker')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Numerator:</strong>
                            <input type="number" class="form-control" name="angka_persentase" onFocus="startPercent();" onBlur="stopPercent();" >
                            <!-- {!! Form::number('angka_persentase', null, array('placeholder' => '','class' => 'form-control')) !!} -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Denumerator:</strong>
                            <input type="number" class="form-control" name="jumlah" onFocus="startPercent();" onBlur="stopPercent();" >
                        <!--   {!! Form::number('jumlah', null, array('placeholder' => '','class' => 'form-control')) !!} -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Persentase :</strong>
                            <input type="text" class="form-control" name="persentase" value='0' readonly >
                        <!--  {!! Form::text('persentase', null, array('placeholder' => '{{ jumlah * angka_persentase }}','class' => 'form-control')) !!} -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {!! Form::label('standard', 'Standard :')!!}
                            {!! Form::text('standard', null, array('class' => 'form-control', 'placeholder' => '')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </div>
            {!! Form::close() !!}
		</div><!-- /.box-body -->
	</div><!-- /.box -->

    <script>
        function startPercent(){
            interval = setInterval("percent()", 1);
        }
            function percent(){
                one = document.autoSumForm.angka_persentase.value;
                two = document.autoSumForm.jumlah.value;
            document.autoSumForm.persentase.value = (one * 1) / (two * 1) * 100 || 0;
        }
            function stopPercent(){
                clearInterval(interval);
        }
    </script>

@stop
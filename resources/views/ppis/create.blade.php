@extends('layouts.adminlte')


@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Menambahkan Surveilance</h2>

	        </div>

	    </div>

	</div>

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

	{!! Form::open(array('route' => 'ppi.store','method'=>'POST')) !!}

	<div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {{ Form::label('no_reg', 'Nomor Registrasi :')}}
                    
                {!! Form::number('no_reg', null, array('placeholder' => 'No Reg Pasien','class' => 'form-control')) !!}
                   
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {{ Form::label('nama_pasien', 'Nama Pasien :')}}
                    
                {!! Form::text('nama_pasien', null, array('placeholder' => 'Nama Pasien','class' => 'form-control')) !!}
                   
            </div>

        </div>


		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {{ Form::label('ruang', 'Nama Ruang :')}}
                    
                {!! Form::text('ruang', null, array('placeholder' => 'Ruang anda..','class' => 'form-control')) !!}
                   
            </div>

        </div>

      <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jumlah pasien yang di rawat :</strong>

                {!! Form::text('jml_pasien_rawat', null, array('placeholder' => 'Jumlah Pasien dirawat di rs ...','class' => 'form-control')) !!}

            </div>

        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jumlah tirah baring :</strong>
                
                {!! Form::text('jml_tirah_baring', null, array('placeholder' => 'Jumlah Tirah Baring di rs ...','class' => 'form-control')) !!}

            </div>

        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Total Operasi :</strong>

                {!! Form::number('total_operasi', null, array('placeholder' => 'Total operasi ...','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>IVC Intra Venuos Cateter :</strong>

                {!! Form::number('ivc', null, array('placeholder' => 'Kejadian IVC','class' => 'form-control')) !!}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>UC Urin Cateter :</strong>

                {!! Form::number('uc', null, array('placeholder' => 'Kejadian UC','class' => 'form-control')) !!}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>VM Ventilator Mekanik :</strong>

                {!! Form::number('vm', null, array('placeholder' => 'Kejadian VM','class' => 'form-control')) !!}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ETT Endo Tracheal Tube :</strong>

                {!! Form::number('ett', null, array('placeholder' => 'Kejadian ETT','class' => 'form-control')) !!}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>PLEBITIS :</strong>

                {!! Form::number('plebitis', null, array('placeholder' => 'Kejadian Plebitis','class' => 'form-control')) !!}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ISK :</strong>

                {!! Form::number('isk', null, array('placeholder' => 'Kejadian ISK','class' => 'form-control')) !!}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>VAP :</strong>

                {!! Form::number('vap', null, array('placeholder' => 'Kejadian VAP','class' => 'form-control')) !!}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>HAP :</strong>

                {!! Form::number('hap', null, array('placeholder' => 'Kejadian HAP','class' => 'form-control')) !!}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Dekubitus :</strong>

                {!! Form::number('dekubitus', null, array('placeholder' => 'Kejadian dekubitus','class' => 'form-control')) !!}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>IDO :</strong>

                {!! Form::number('ido', null, array('placeholder' => 'Kejadian IDO','class' => 'form-control')) !!}

            </div>

        </div>



         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Hasil Kultur :</strong>

                 {!! Form::text('hsl_kultur', null, array('placeholder' => 'Total operasi ...','class' => 'form-control')) !!}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Simpan</button>
				<a class="btn btn-primary" href="{{ route('ppi.index') }}">Kembali</a>
        </div>

	</div>

	{!! Form::close() !!}

@endsection


            <div class="panel-group">
                <div class="panel panel-success">          
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <img height="55px" width="auto" src="{{ url('images/logo.png') }}"><br>
                      <a href="{{ url('/home') }}" class="text-center">E-SIMRS</a>
                    </h4>
                  </div>
                </div>
            </div>

  <div class="panel-group" id="accordion">
    <div class="panel panel-info">

      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapsex">Kamus Indikator RS</a>
        </h4>
      </div>
      <div id="collapsex" class="panel-collapse collapse">
        <div class="panel-body">
          @permission('areaindikator-list')
            <a class="list-group-item" href="{{ route('areaindikator.index') }}">Kamus Indikator</a>
          @endpermission

          <!-- @permission('areaindikator-list')
            <a class="list-group-item" href="{{ route('subai.index') }}">Sub Area Indikator</a>
          @endpermission -->

           @permission('unit_kerja-list')
            <a class="list-group-item" href="{{ route('unit_kerja.index') }}">Unit Kerja</a>
          @endpermission

          <!--@permission('jabatan-list')  
            <a class="list-group-item" href="{{ route('jabatan.index') }}">Jabatan</a>
          @endpermission

          @permission('karyawan-list')
            <a class="list-group-item" href="{{ route('karyawan.index') }}">Karyawan</a>
          @endpermission -->
        </div>
      </div>

      <!-- <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Inventory</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          @permission('item-list')
            <a class="list-group-item" href="{{ route('itemCRUD2.index') }}">Barang ATK</a>
          @endpermission
        </div>
      </div> -->
      @permission('pmkp-list')
       <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse30">Input Data Mutu Harian</a>
        </h4>
      </div>
      <div id="collapse30" class="panel-collapse collapse">
        <div class="panel-body">
          
            <!-- <a class="list-group-item" href="{{ route('pmkp.index') }}">Rumus Indikator</a>
         
            <a class="list-group-item" href="{{ route('laporanpmkp.index') }}">Data Pmkp</a> -->

            
          @permission('angkaindikator-list')
            <a class="list-group-item" href="{{ route('angkaindikator.index') }}">Angka Indikator</a>
          @endpermission

           @permission('kejadianindikator-list')
            <a class="list-group-item" href="{{ route('kejadianindikator.index') }}">Kejadian Indikator</a>
          @endpermission
        </div>
      </div>
      @endpermission
      
      @permission('read-rehabmedik')
      <div class="panel-heading">
        <h4 class="panel-title">
            <a href="{{ route('rehabmedik.index') }}">Rehab Medik</a>
        </h4>
      </div>
      @endpermission
          
      @permission('ppi-list')
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="{{ route('ppi.index') }}">Surveilance</a>
        </h4>
      </div>
      @endpermission
   
   
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Administasi</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          
          @permission('humas-list')
           <a class="list-group-item" href="{{ route('humas.index') }}">SK Karyawan</a>
          @endpermission

          @permission('complaint-list')
           <a class="list-group-item" href="{{ route('complaint.index') }}">Kritik Saran</a>
          @endpermission
          
          @permission('cuti-list')
           <a class="list-group-item" href="{{ route('cuti.index') }}">Cuti</a>
          @endpermission

          <!-- @permission('arisan-list')
           <a class="list-group-item" href="{{ route('arisan.index') }}">Arisan</a>
          @endpermission -->

        </div>
      </div>
   
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Laporan</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="list-group">

              @permission('humas-laporan')
                <a class="list-group-item" href="{{ route('humas.laporan') }}">Surat Keputusan</a>
              @endpermission

              @permission('laporan-rehabmedik')
                <a class="list-group-item" href="{{ route('rehabmedik.laporan') }}">Rehab Medik</a>
              @endpermission

              @permission('complaint-laporan')
                <a class="list-group-item" href="{{ route('complaint.laporan') }}">Kritik Saran</a>
              @endpermission
              @permission('ppi-laporan')
                <a class="list-group-item" href="{{ route('ppi.laporan') }}">Surveilance</a>
              @endpermission
              @permission('angkaindikator-laporan')
                <a class="list-group-item" href="{{ route('angkaindikator.laporan') }}">Angka Indikator</a>
              @endpermission
              @permission('kejadianindikator-laporan')
                <a class="list-group-item" href="{{ route('kejadianindikator.laporan') }}">Kejadian Indikator</a>
              @endpermission
              
            </div>
        </div>
      </div>
      
      @permission('role-list')
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Manage</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="list-group">
                <a class="list-group-item" href="{{ route('users.index') }}">Users</a>
                <a class="list-group-item" href="{{ route('roles.index') }}">Roles</a>
            </div>
        </div>
      </div>
      @endpermission

    </div>
  </div> 
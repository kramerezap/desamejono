@extends('admin/base')

@section('extrastyle')
<?php
$ambil = DB::table('tb_keluarga')->get();
$ambilagama = DB::table('tb_agama')->get();
$ambilpendidikan = DB::table('tb_pendidikan')->get();
$ambilrt = DB::table('tb_rt')->get();
$ambilrw = DB::table('tb_rw')->get();
$ambilpotensi = DB::table('tb_potensi')->get();
$ambilgaleri = DB::table('tb_galeri')->get();
$ambilberita = DB::table('tb_berita')->get();
$ambilpesan = DB::table('tb_inbox')->get();
$ambillaporan = DB::table('tb_laporan')->get();
?>
<!-- DataTables CSS -->
<link rel="stylesheet" href="{{ asset('AdminBSB/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}">
<!-- select CSS -->
<link href="{{ asset('AdminBSB/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">

<!-- sweet alert -->
<link href="{{ asset('AdminBSB/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet"/>  
@endsection
@section('active')
<li class="active" >
    <a href="{{route('admin')}}">
        <i class="material-icons">home</i>
        <span style="color: ">Home</span>
    </a>
</li>
<!-- <li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">widgets</i>
        <span>Data Master</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{route('adminkeluarga')}}" >
                <span>Keluarga</span>
            </a>
        </li>
        <li>
            <a href="{{route('adminpenduduk')}}">
                <span>Penduduk</span>
            </a>
        </li>
 -->       <!--  <li>
            <a href="#">
                <span>RT/RW</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span>Keuangan</span>
            </a>
        </li> -->
<!--     </ul>
</li> -->
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">language</i>
        <span>Website</span>
    </a>
    <ul class="ml-menu">
        <li  style="background-color: lightgray">
            <a href="{{route('adminberita')}}">
                <span>Berita</span>
            </a>
        </li>
        <li>
            <a href="{{route('admingaleri')}}">
                <span>Galeri</span>
            </a>
        </li>
        <li >
            <a href="{{route('adminpotensi')}}">
                <span>Potensi Desa</span>
            </a>
        </li>
        <li>
            <a href="{{route('adminpesan')}}">
                <span>Pesan</span>
            </a>
        </li>
       <li>
            <a href="{{route('adminlaporan')}}">
                <span>Laporan</span>
            </a>
        </li>
    </ul>
</li>

@endsection

@section('content')




<section class="content">
    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb">
          <li><a href="javascript:void(0);"><i class="material-icons">language</i> Website</a></li>
          <li><a href="javascript:void(0);"> Berita</a></li>
      </ol>
      <!-- Basic Examples -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div style="clear;">    
                        
                      </button>
                  </div>
                  <h2>
                    Data Berita
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tabelproduk">
                        <thead> 
                          
                            <tr>
                                <th>Nama</th>
                                <th>E-mail</th>
                                <th>Isi Laporan</th>
                                <th>Gambar</th>
                                <th>Tanggal Laporan</th>
                                
                            </tr>
                        </thead>
                      
                        <tbody>
                          @foreach($ambillaporan as $data) 
                            <tr>
                              <td>{{$data->NAMA}}</td>
                                 <td>{{$data->EMAIL}}  </td>
                                 <td>{{$data->ISI_LAPORAN}}</td>
                                 <td><img src="Assets/images/laporan/{{$data->GAMBAR}}" width="60" height="60" alt="User"></td>
                                  <td>{{$data->TGL_LAPORAN}}</td>
                                @endforeach
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- #END# Basic Examples -->
<!-- Exportable Table -->
</div>
</section>

@endsection



@section('extrajs')
<script src="{{ asset('AdminBSB/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{ asset('AdminBSB/plugins/sweetalert/sweetalert-dev.js')}}"></script>

<!-- SCRIPT DATATABLES -->

<script src="{{ asset('AdminBSB/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('AdminBSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('AdminBSB/js/pages/tables/jquery-datatable.js')}}"></script>


<!-- SCRIPT HAPUS PILIH , DATATABLES-->
<script>
  $('#tabelproduk').DataTable();
</script>

<script>
  function klik(){
    swal ("Tersimpan!", "Berhasil menambahkan data", "success")
}
</script>
<script>
  function klikhps(){
     swal ("Terhapus!", "Data telah terhapus", "warning")
 }
</script>

<script>
  function klikup(){
    swal ("Berhasil!", "Data telah diperbarui", "success")
}
</script>

@endsection
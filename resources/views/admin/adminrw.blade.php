@extends('admin/base')

@section('extrastyle')
<?php
$ambil = DB::table('tb_keluarga')->get();
$ambilagama = DB::table('tb_agama')->get();
$ambilpendidikan = DB::table('tb_pendidikan')->get();
$ambilrt = DB::table('tb_rt')->get();
$ambilrw = DB::table('tb_rw')->get();
$ambilstatusdlmkel = DB::table('tb_statusdlmkel')->get();
$ambilpekerjaan = DB::table('tb_pekerjaan')->get();
$ambilrw = DB::table('tb_rw')->get();
$ambilrt = DB::table('tb_rt')->get();


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
<li>
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
        <!-- <li>
            <a href="{{route('adminrtrw')}}" style="background-color: lightgray">
                <span>RT/RW</span>
            </a>
        </li> -->
         <li>
          <a href="javascript:void(0);" class="menu-toggle">
                <span>Surat</span>
            </a>
                <ul class="ml-menu">
                  <li>
                    <a href="{{route('adminsuratmasuk')}}" style="background-color: lightgray">
                <span>Surat Masuk</span>
                </a>
                </li>
                  <li>
               <a href="{{route('adminsuratkeluar')}}">
                    <span>Surat Keluar</span>
                </a>
             </li>
            </ul>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">language</i>
        <span>Website</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{route('adminberita')}}">
                <span>Berita</span>
            </a>
        </li>
        <li>
            <a href="{{route('admingaleri')}}">
                <span>Galeri</span>
            </a>
        </li>
        <li>
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
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah RW</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="/admininsertrw" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. RW :</label>
                    <input type="number" style="border-bottom:  solid 1.7px grey;" class="form-control" id="NO_RW" name="NO_RW" placeholder="Contoh : 01" required="true">
                    </div>
                    
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="modal-footer justify-content-between">
             <button type="submit" class="btn btn-primary" style="float: right;">Simpan</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              {{csrf_field()}}
            </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>    
      @php 
      $dat = DB::table('tb_rw')->get();
      @endphp 
      @foreach($dat as $data)  
<div class="modal fade" id="modal-tambahanggota{{$data->ID_RW}}">


        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah RT</h4>
            </div>

            
            <div class="modal-body">
              <form role="form" action="/admininsertrt" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">

                 
                     <div class="form-group">
                    <label for="exampleInputEmail1">No. RW :</label>
                    <input type="number" value="{{$data->NO_RW}}" style="border-bottom:  solid 1.7px grey;" class="form-control" id="NO_RW" name="NO_RW" placeholder="Contoh : 01" required="true" disabled="true">
                    </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No. RT :</label>
                    <input type="number" style="border-bottom:  solid 1.7px grey;" class="form-control" id="NO_RT" name="NO_RT" placeholder="Contoh : 01" required="true">
                    </div>

                 
                    
                  
                 
                    </div>



                  </div>
                  
                
                <!-- /.card-body -->

                <div class="modal-footer justify-content-between">
             <button type="submit" class="btn btn-primary" style="float: right;">Simpan</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              {{csrf_field()}}
            </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>    
@endforeach

<section class="content">
    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb">
          <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Data Master</a></li>
          <li><a href="javascript:void(0);"> Keluarga</a></li>
      </ol>
      <!-- Basic Examples -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div style="clear;">    
                        <button type="button" class="btn bg-add pull-right btn-circle-lg waves-effect waves-circle waves-float" data-toggle="modal" data-target="#modal-default">
                          <i class="material-icons">add</i>
                      </button>
                  </div>
                  <h2>
                    Data RT / RW 
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tabelproduk">
                        <thead> 
                          
                            <tr>
                                <th name="no">No.</th>
                                <th>NO_RW</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                          @foreach($ambilrw as $data) 
                            <tr>
                                 <td name="no" value="{{$data->ID_RW}}">{{$data->ID_RW}}<button type="submit" style="border: none; background-color: white; opacity: 100%"><i class="material-icons">visibility</i></td>
                                 <td>{{$data->NO_RW}}</td>
                                  <td>
                                    <form>
                          <a href="" name="btntmbh" class="btn btn-default btn-xs" data-toggle="modal" value="{{$data->ID_RW}}" data-target="#modal-tambahanggota{{$data->ID_RW}}"><i class="material-icons">add</i></a>
                                      <a href="#" class="btn btn-warning btn-xs">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="/admin:hapusrw={{$data->ID_RW}}"  class="btn btn-danger btn-xs" onclick="return(confirm('Anda Yakin Menghapus Keluarga?? ')
                                    );"><i class="material-icons">delete_sweep</i>
                                    </a>
                                    
                                </form>
                                @endforeach
                            </td>
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
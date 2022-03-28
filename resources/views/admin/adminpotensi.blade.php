@extends('admin/base')

@section('extrastyle')
<?php
$ambil = DB::table('tb_keluarga')->get();
$ambilagama = DB::table('tb_agama')->get();
$ambilpendidikan = DB::table('tb_pendidikan')->get();
$ambilrt = DB::table('tb_rt')->get();
$ambilrw = DB::table('tb_rw')->get();
$ambilpotensi = DB::table('tb_potensi')->where('VIEW',1)->get();
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
            <a href="{{route('adminrtrw')}}">
                <span>RT/RW</span>
            </a>
        </li> -->
<!--          <li>
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
 --><li>
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
        <li style="background-color: lightgray">
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
              <h4 class="modal-title">Tambah Potensi</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="/admininsertpotensi" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                     <label class="col-sm-2 col-sm-2 control-label">Foto</label>
                                          <div class="col-sm-10">
                                              <input type="file" class="form-control" name="GAMBAR">
                                          </div>
                    <br>
               
                  </div>
                   <div class="form-group">
                    <br>
                     <label class="col-sm-8 col-sm-8 control-label">Judul Potensi :</label>
                                        <input type="text" style="width: 100%;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" class="form-control" id="judul" name="judul" placeholder="Contoh : Pembuatan Tahu" required="true">
                   
                    <br>
               
                  </div>
                  <div class="form-group">
             
                     <label class="col-sm-8 col-sm-8 control-label">Deskripsi Potensi :</label>
                    <textarea class="textarea" placeholder="Tahu Adalah....." name="isi" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    <br>
               
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
      $dat = DB::table('tb_potensi')->where('VIEW',1)->get();
      @endphp
      @foreach($dat as $data)  
<div class="modal fade" id="modal-edit{{$data->ID_POTENSI}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Potensi</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="/admin:updatepotensi={{$data->ID_POTENSI}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                     <label class="col-sm-2 col-sm-2 control-label">Foto</label>
                                          <div class="col-sm-10">
                                              <input type="file" class="form-control" value="/Assets/images/potensidesa/{{$data->GAMBAR}}" name="GAMBAR">
                                          </div>
                    <br>
               
                  </div>
                   <div class="form-group">
                    <br>
                     <label class="col-sm-8 col-sm-8 control-label">Judul Potensi :</label>
                                        <input type="text" style="width: 100%;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="{{$data->JUDUL_POTENSI}}" class="form-control" id="judul" name="judul" placeholder="Contoh : Pembuatan Tahu" required="true">
                   
                    <br>
               
                  </div>
                  <div class="form-group">
             
                     <label class="col-sm-8 col-sm-8 control-label">Deskripsi Potensi :</label>
                    <textarea class="textarea" value="{{$data->ISI_POTENSI}}" placeholder="Tahu Adalah....." name="isi" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$data->ISI_POTENSI}}</textarea>
                    <br>
               
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
                   <li><a href="javascript:void(0);"><i class="material-icons">language</i> Website</a></li>
          <li><a href="javascript:void(0);"> Potensi Desa</a></li>

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
                    Data Potensi Desa
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tabelproduk">
                        <thead> 
                          
                            <tr>
                                <th>ID</th>
                                <th>Gambar</th>
                                <th>URL</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                          @foreach($ambilpotensi as $data) 
                            <tr>
                              <td>{{$data->ID_POTENSI}}</td>
                                 <td><img src="Assets/images/potensidesa/{{$data->GAMBAR}}" width="60" height="60" alt="User"></td>
                                 <td>{{$data->GAMBAR}}  </td>
                                 <td>{{$data->JUDUL_POTENSI}}</td>
                                  <td> {{$data->ISI_POTENSI}}</td>
                                  <td>
                                    <form>
                        
                                      <a href="{{$data->ID_POTENSI}}" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit{{$data->ID_POTENSI}}">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="/admin:hapuspotensi={{$data->ID_POTENSI}}"  class="btn btn-danger btn-xs" onclick="return(confirm('Anda Yakin Menghapus?? ')
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
@extends('admin/base')

@section('extrastyle')
<?php
$ambil = DB::table('tb_suratmasuk')->get();
$ambilagama = DB::table('tb_agama')->get();
$ambilpendidikan = DB::table('tb_pendidikan')->get();
$ambilrt = DB::table('tb_rt')->get();
$ambilrw = DB::table('tb_rw')->get();
$ambilstatusdlmkel = DB::table('tb_statusdlmkel')->get();
$ambilpekerjaan = DB::table('tb_pekerjaan')->get();
$ambilpenduduk = DB::table('tb_penduduk')->get();
$ambilstatus = DB::table('tb_status')->get();
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
      <!--   <li>
            <a href="{{route('adminrtrw')}}">
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
 @foreach($ambil as $data) 
<div class="modal fade" id="modal-edit{{$data->ID_SURAT}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data</h4>
            </div>
            <div class="modal-body">
              <form role="form" method="post" action="/admin:updatesuratmasuk={{$data->ID_SURAT}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. Surat :</label>
                    <input type="text" value="{{$data->NO_SURAT}}" style="border-bottom:  solid 1.7px grey;" class="form-control" id="NO_KK" name="NO_SURAT" placeholder="Contoh : 350680887654358" required="true" >
                  </input>
                    </div>
                    
                       <label for="exampleInputEmail1">Tanggal Buat  :</label>
                    <input type="date" style="border-bottom:  solid 1.7px grey;" class="form-control" id="alamat" name="TGL_BUAT" value="{{$data->TGL_BUAT}}" required="true">
                   
                    <br>
                    <label for="exampleInputEmail1">Tanggal Terima:</label>
                    <input type="date" style="border-bottom:  solid 1.7px grey;" class="form-control" id="alamat" name="TGL_KIRIM" value="{{$data->TGL_KIRIM}}" required="true">
                   
                    <br>
                    <label for="exampleInputEmail1">Dari:</label>
                    <input type="text" style="border-bottom:  solid 1.7px grey;" class="form-control" id="alamat" name="DARI" value="{{$data->DARI}}" required="true">
                   
                    <br>
                    <label for="exampleInputEmail1">Kepada:</label>
                    <input type="text" style="border-bottom:  solid 1.7px grey;" class="form-control" id="alamat" name="KE" value="{{$data->KE}}" required="true">
                   
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


<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="/admininsertsuratmasuk" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. Surat :</label>
                    <input type="text" value="" style="border-bottom:  solid 1.7px grey;" class="form-control" id="NO_KK" name="NO_SURAT" placeholder="Contoh : 22/12/2" required="true" >
                  </input>
                    </div>
                    
                       <label for="exampleInputEmail1">Tanggal Buat  :</label>
                    <input type="date" style="border-bottom:  solid 1.7px grey;" class="form-control" id="alamat" name="TGL_BUAT" value="" required="true" placeholder="Contoh : 2019/2/2">
                   
                    <br>
                    <label for="exampleInputEmail1">Tanggal Terima:</label>
                    <input type="date" style="border-bottom:  solid 1.7px grey;" class="form-control" id="alamat" name="TGL_KIRIM" value="" required="true" placeholder="Contoh : 2019/2/2">
                   
                    <br>
                    <label for="exampleInputEmail1">Dari:</label>
                    <input type="text" style="border-bottom:  solid 1.7px grey;" class="form-control" id="alamat" name="DARI" value="" placeholder="Contoh : Kades " required="true">
                   
                    <br>
                    <label for="exampleInputEmail1">Kepada:</label>
                    <input type="text" style="border-bottom:  solid 1.7px grey;" class="form-control" id="alamat" name="KE" value="" required="true" placeholder="Contoh : Carik">
                   
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

<section class="content">
    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb">
          <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Data Master</a></li>
            <li><a href="javascript:void(0);"> Surat</a></li>
          <li><a href="javascript:void(0);"> Surat Masuk</a></li>
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
                    Data Surat Masuk
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tabelproduk">
                        <thead> 
                          
                            <tr>
                                <th name="no">#</th>
                                <th>No. Surat</th>
                                <th>Tgl. Buat</th>
                                <th>Tgl. Terima</th>
                                <th>Dari</th>
                                <th>Ke</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                          @foreach($ambil as $data) 
                            <tr>
                                 <td>{{$data->ID_SURAT}}</td>
                                 <td>{{$data->NO_SURAT}}  </td>
                                 <td>{{$data->TGL_BUAT}}</td>
                                  <td> {{$data->TGL_KIRIM}}</td>
                                   <td> {{$data->DARI}}</td>
                                    <td> {{$data->KE}}</td>
                                  <td>
                                    <form>
                         
                                      <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit{{$data->ID_SURAT}}">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="/admin:hapussuratmasuk={{$data->ID_SURAT}}"  class="btn btn-danger btn-xs" onclick="return(confirm('Anda Yakin Menghapus Surat Masuk?? ')
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
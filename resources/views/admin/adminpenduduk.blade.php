@extends('admin/base')

@section('extrastyle')
<?php
$ambil = DB::table('tb_keluarga')->get();
$ambilagama = DB::table('tb_agama')->get();
$ambilpendidikan = DB::table('tb_pendidikan')->get();
$ambilrt = DB::table('tb_rt')->get();
$ambilrw = DB::table('tb_rw')->get();
$ambilpenduduk = DB::table('tb_penduduk')->where('VIEW',1)->get();
$ambilstatusdlmkel = DB::table('tb_statusdlmkel')->get();
$ambilpekerjaan = DB::table('tb_pekerjaan')->get();
$ambilrw = DB::table('tb_rw')->get();
$ambilrt = DB::table('tb_rt')->get();
$ambilpend = DB::table('detailpenduduk')->get();
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
            <a href="{{route('adminkeluarga')}}">
                <span>Keluarga</span>
            </a>
        </li>
        <li style="background-color: lightgray">
            <a href="{{route('adminpenduduk')}}">
                <span>Penduduk</span>
            </a>
        </li>
       <!--  <li>
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
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Keluarga</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="/admininsertkeluarga" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. KK :</label>
                    <input type="number" style="border-bottom:  solid 1.7px grey;" class="form-control" id="NO_KK" name="NO_KK" placeholder="Contoh : 350680887654358" required="true">
                    </div>
                    <br>
                    <div class="form-group">
                    <select name="ID_RW" style=" "  >
                  <option>--RW--</option>
                  @foreach($ambilrw as $rw)
                <option value="{{$rw->ID_RW}}" onselect="">{{$rw->NO_RW}}</option>
                  @endforeach
                  </select>
                  </div> 
                  
                  <div class="form-group">
                    <select name="ID_RT" style=" "  >
                  <option>--RT--</option>
                  @foreach($ambilrt as $rt)
                <option value="{{$rt->ID_RT}}">{{$rt->NO_RT}}</option>
                  @endforeach
                  </select>
                  </div> 
                </select>
                    <br>
                       <label for="exampleInputEmail1">No. RT :</label>
                    <input type="number" style="border-bottom:  solid 1.7px grey;" class="form-control" id="ID_RT" name="ID_RT" placeholder="Contoh : 1" required="true">
                   
                    <br><select name="status">
                  <option value="Islam">Mampu</option>
                  <option value="Kristen">Menengah</option>
                  <option value="Hindu">Kurang Mampu</option>
                </select>
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

@foreach($ambilpenduduk as $data)  
<div class="modal fade" id="modal-edit{{$data->NO_KTP}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Anggota Keluarga</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="/admin:updatependuduk={{$data->NO_KTP}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. KTP :</label>
                    <input type="number" style="border-bottom:  solid 1.7px grey;" class="form-control" id="NO_KTP" name="NO_KTP" placeholder="Contoh : 350680887654358" required="true" value="{{$data->NO_KTP}}">
                    </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No. KK :</label>
                    <input type="number" value="{{$data->NO_KK}}"  style="border-bottom:  solid 1.7px grey;" value=""class="form-control" id="NO_KK" name="NO_KK" placeholder="Contoh : 350680887654358" required="true" readonly="">
                    </div>
                    <br>
                    <div class="form-group">
                    <select name="ID_PENDIDIKAN" style=" "  >
                      @php
                      $ambilpendidikanp = DB::table('tb_pendidikan')->where('ID_PENDIDIKAN',$data->ID_PENDIDIKAN)->get();
                    @endphp
                    @foreach($ambilpendidikanp as $ped)
                  <option>{{$ped->PENDIDIKAN}}</option>
                  @endforeach
                  @foreach($ambilpendidikan as $pendidikan)
                <option value="{{$pendidikan->ID_PENDIDIKAN}}">{{$pendidikan->PENDIDIKAN}}</option>
                  @endforeach
                  </select>
                  </div> 
                  
                  <div class="form-group">
                    <select name="ID_STATUSDLMKEL" style=" "  >
                  @php
                      $ambilpendidikanp = DB::table('tb_statusdlmkel')->where('ID_STATUSDLMKEL',$data->ID_STATUSDLMKEL)->get();
                    @endphp
                    @foreach($ambilpendidikanp as $ped)
                  <option>{{$ped->STATUSDLMKEL}}</option>
                  @endforeach
                  @foreach($ambilstatusdlmkel as $statusdlmkel)
                <option value="{{$statusdlmkel->ID_STATUSDLMKEL}}">{{$statusdlmkel->STATUSDLMKEL}}</option>
                  @endforeach
                  </select>
                  </div> 

                <div class="form-group">
                    <select name="ID_PEKERJAAN" style=" "  >
                  @php
                      $ambilpendidikanp = DB::table('tb_pekerjaan')->where('ID_PEKERJAAN',$data->ID_PEKERJAAN)->get();
                    @endphp
                    @foreach($ambilpendidikanp as $ped)
                  <option>{{$ped->PEKERJAAN}}</option>
                  @endforeach
                  @foreach($ambilpekerjaan as $pekerjaan)
                <option value="{{$pekerjaan->ID_PEKERJAAN}}" onselect="">{{$pekerjaan->PEKERJAAN}}</option>
                  @endforeach
                  </select>
                  </div> 

                  <div class="form-group">
                    <select name="ID_AGAMA" style=" "  >
                 @php
                      $ambilpendidikanp = DB::table('tb_agama')->where('ID_AGAMA',$data->ID_AGAMA)->get();
                    @endphp
                    @foreach($ambilpendidikanp as $ped)
                  <option>{{$ped->AGAMA}}</option>
                  @endforeach
                  @foreach($ambilagama as $agama)
                <option value="{{$agama->ID_AGAMA}}" onselect="">{{$agama->AGAMA}}</option>
                  @endforeach
                  </select>
                  </div> 
                <div class="form-group">
                    <select name="ID_STATUS" style=" "  >
                  @php
                      $ambilpendidikanp = DB::table('tb_status')->where('ID_STATUS',$data->ID_STATUS)->get();
                    @endphp
                    @foreach($ambilpendidikanp as $ped)
                  <option>{{$ped->STATUS}}</option>
                  @endforeach
                  @foreach($ambilstatus as $status)
                <option value="{{$status->ID_STATUS}}" onselect="">{{$status->STATUS}}</option>
                  @endforeach
                  </select>
                  </div> 
                    
                    <br>
                      <div class="form-group">
                    <label for="exampleInputEmail1">NAMA LENGKAP :</label>
                    <input type="text" style="border-bottom:  solid 1.7px grey;" class="form-control" id="NAMA_LENGKAP" name="NAMA_LENGKAP" placeholder="Contoh : Sai'in Achmad" required="true" value="{{$data->NAMA_LENGKAP}}">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir :</label>
                    <input type="text" style="border-bottom:  solid 1.7px grey;" class="form-control" id="TEMPAT_LHR" name="TEMPAT_LHR" placeholder="Contoh : Kediri" required="true" value="{{$data->TEMPAT_LHR}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir :</label>
                    <input type="date" style="border-bottom:  solid 1.7px grey;" class="form-control" id="TGL_LHR" name="TGL_LHR" required="true" value="{{$data->TGL_LHR}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">No. Telepon :</label>
                    <input type="number" style="border-bottom:  solid 1.7px grey;" class="form-control" id="NOTELP" name="NOTELP" placeholder="Contoh : 081938992817" required="true" value="{{$data->NOTELP}}">
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

@foreach($ambilpend as $data)
<div class="modal fade" id="modal-view{{$data->NO_KTP}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Penduduk</h4>
            </div>
            <div class="modal-body">
              
                {{csrf_field()}}
                <label for="exampleInputEmail1">Nama Lengkap : {{$data->NAMA_LENGKAP}}</label>
                <br>
                <label for="exampleInputEmail1">Status Dalam Keluarga : {{$data->STATUSDLMKEL}}</label>  
                <br>
                <label for="exampleInputEmail1">Pekerjaan : {{$data->PEKERJAAN}}</label>  
                <br>
                <label for="exampleInputEmail1">Agama : {{$data->AGAMA}}</label>  
              <br>
                <label for="exampleInputEmail1">Status : {{$data->STATUS}}</label>  
                <br>
                <label for="exampleInputEmail1">No Telp : {{$data->NOTELP}}</label>  
                <!-- /.card-body -->
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
          <li><a href="javascript:void(0);"> Penduduk</a></li>
      </ol>
      <!-- Basic Examples -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    
                  <h2>
                    Data Penduduk
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tabelproduk">
                        <thead> 
                          
                            <tr>
                                <th>No. KTP</th>
                                <th>No. KK</th>
                            
                                <th>Nama Lengkap</th>
                                <th>TTL</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                      
                        <tbody>
                          @foreach($ambilpenduduk as $data) 
                            <tr>
                                 <td>{{$data->NO_KTP}}<button type="submit" data-toggle="modal" data-target="#modal-view{{$data->NO_KTP}}"style="border: none; background-color: white"><i class="material-icons">remove_red_eye</i></td>
                                 <td>{{$data->NO_KK}}</td>
                                 <td>{{$data->NAMA_LENGKAP}}</td>
                                  <td> {{$data->TEMPAT_LHR}},{{$data->TGL_LHR}}</td>
                                  <td>
                                    <form>
                                      <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit{{$data->NO_KTP}}">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="/admin:hapuspenduduk={{$data->NO_KTP}}"  class="btn btn-danger btn-xs" onclick="return(confirm('Anda Yakin Menghapus Keluarga?? ')"><i class="material-icons">delete_sweep</i>
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
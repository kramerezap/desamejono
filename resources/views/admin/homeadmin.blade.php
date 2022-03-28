@extends('admin/base')
@section('active')
<li class="active" style="background-color: lightgray">
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
            <a href="{{route('adminkeluarga')}}">
                <span>Keluarga</span>
            </a>
        </li>
        <li>
            <a href="{{route('adminpenduduk')}}">
                <span>Penduduk</span>
            </a>
        </li> -->
       <!--  <li>
            <a href="{{route('adminrtrw')}}">
                <span>RT/RW</span>
            </a>
        </li> -->
         <!-- <li>
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
</li> -->
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

<section class="content">
    <div class="container-fluid" >
        <!-- Widgets -->
        <div class="row clearfix" >
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                    <div class="info-box hover-zoom-effect hover-expand-effect"  style="background-color: #660000">
                        <div class="icon"style="background-color: #430304; ">
                            <i class="material-icons" >people</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color: white">Keluarga</div>
                            <?php
                        $ambil = DB::table('tb_keluarga')->count();
                            ?>
                            <div class="number count-to" data-from="0" data-to="{{$ambil}}" data-speed="1000" data-fresh-interval="20"  style="color: white"></div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                    <div class="info-box hover-zoom-effect hover-expand-effect"  style="background-color: #660000">
                        <div class="icon"style="background-color: #430304; ">
                            <i class="material-icons" >person</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color: white">Penduduk</div>
                            <?php
                        $ambil = DB::table('tb_penduduk')->count();
                            ?>
                            <div class="number count-to" data-from="0" data-to="{{$ambil}}" data-speed="1000" data-fresh-interval="20"  style="color: white"></div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                    <div class="info-box hover-zoom-effect hover-expand-effect"  style="background-color: #660000">
                        <div class="icon"style="background-color: #430304; ">
                            <i class="material-icons" >panorama</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color: white">Galeri</div>
                            <?php
                        $ambil = DB::table('tb_galeri')->count();
                            ?>
                            <div class="number count-to" data-from="0" data-to="{{$ambil}}" data-speed="1000" data-fresh-interval="20"  style="color: white"></div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" href="/adminberita">
                    <div class="info-box hover-zoom-effect hover-expand-effect"  style="background-color: #660000">
                        <div class="icon"style="background-color: #430304; ">
                            <i class="material-icons" >library_books</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color: white">Berita</div>
                            <?php
                        $ambil = DB::table('tb_berita')->count();
                            ?>
                            <div class="number count-to" data-from="0" data-to="{{$ambil}}" data-speed="1000" data-fresh-interval="20"  style="color: white"></div>
                        </div>
                    </div>
                </div>        
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>INFO</h2>
                       
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                    <tr>
                                       
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        <br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
            <!-- Browser Usage -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Content</h2>
                        
                    </div>
                    
                    <div class="body">
                        <div id="donut_chart" class="dashboard-donut-chart"></div>

                    </div>
                </div>
            </div>
            <!-- #END# Browser Usage -->
        </div>
    </div>
</section>

@endsection
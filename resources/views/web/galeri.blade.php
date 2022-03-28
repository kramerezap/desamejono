@extends('layouts.master')

@section('content')


<!-- //banner -->

<!-- about -->
<?php

$galeri = DB::table('tb_galeri')->where('VIEW',1)->get();
$potensipop = DB::table('tb_potensi')->where('ID_POTENSI','=','$')->get();
?>

<section class="about py-5" style="background-color: white;">
	<div class="container py-md-3">
		<h2 class="heading text-center mb-sm-5 mb-4">Galeri</h2>
        <div class="container py-md-5">
           
            <div class="row news-grids mt-md-5 mt-4 text-center">
            	<br>
            	 @foreach($galeri as $datagaleri)
                <div class="col-md-4 gal-img" style="margin-bottom: 40px">
                    <a href="#gal1{{$datagaleri->ID_GALERI}}"  name="pop" data-target="#gal1{{$datagaleri->ID_GALERI}}"value="{{$datagaleri->ID_GALERI}}"><img src="Assets/images/galeri/{{$datagaleri->URL_GALERI}}" alt="w3pvt" class="img-fluid" style="width: 300px; height: 220px;" title="{{$datagaleri->JUDUL_GALERI}}" ></a>
                    
                        <h5 class="decription" style="width: 300px;text-align: left;position:relative;margin-top: -40px; background-color: black; margin-left: 28px; height: 40px; opacity: 70%; color: white; font-size: 17px; font-family: Segoe UI" >  {{$datagaleri->JUDUL_GALERI}}</h5>
                    
                </div>  
                 @endforeach
            </div>
            <!-- popup-->
         
                   @php 
      $dat = DB::table('tb_galeri')->where('VIEW',1)->get();
      @endphp
      @foreach($dat as $data)  
            <div id="gal1{{$data->ID_GALERI}}" class="pop-overlay" style="">
                <div class="popup" style="position: relative; margin-top: 10px; ">
                    <img src="Assets/images/galeri/{{$data->URL_GALERI}}" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4" style="font-size: 12px; text-align: justify; color: black;">{{$data->JUDUL_GALERI}}</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>

            </div>
            @endforeach
      
          
            <!-- //popup -->
            <!-- popup-->
            
            <!-- //popup -->
        </div>
  	
	</div>
</section>



@endsection
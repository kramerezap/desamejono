@extends('layouts.master')

@section('content')


<!-- //banner -->

<!-- about -->
<?php

$berita = DB::table('tb_berita')->where('VIEW',1)->get();

?>

<section class="about py-5" style="background-color: white;">
	<div class="container py-md-3">
		<h2 class="heading text-center mb-sm-5 mb-4">Berita</h2>
        <div class="container py-md-5">
           
            <div class="row">
            	<br>
            	 @foreach($berita as $databerita)
      <div  style="background-color: white; border-bottom: solid 0.5px gray ; height: 220px; width: 800px">
       <img src="Assets/images/berita/{{$databerita->GAMBAR}}" style="height: 200px; width: 230px;  margin-top: 10px">
       <h6 style="margin-left: 250px; margin-top: -190px; color: black; width: 400px" >{{$databerita->JUDUL_BERITA}}</h6>
       <p style="margin-left: 250px; margin-top: 30px;  font-size: 10px ; width: 400px">{{$databerita->CREATED_AT}}</p>
        <p style="margin-left: 250px; margin-top: 5px;  font-size: 11px; width: 400px ">{{substr($databerita->ISI_BERITA,0,200)}}</p>
        <a href="bacaberita={{$databerita->ID_BERITA}}" style="margin-left: 250px; margin-top: 5px;  font-size: 11px; color: blue; font: bold; " >Selengkapnya >></a>
       
      </div>
                 @endforeach
            </div>
            <!-- popup-->
         
        
      
          
            <!-- //popup -->
            <!-- popup-->
            
            <!-- //popup -->
        </div>
  	
	</div>
</section>



@endsection
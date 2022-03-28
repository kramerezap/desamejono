@extends('layouts.master')

@section('content')

<!-- banner -->

	
<!-- //banner -->
<center>
<!-- about -->
<section class="about py-5" style="background-color: white;">

	<div class="container py-md-3">
		
			<div class="col-lg-8">
				<br>
				<h1 class="about-left" align="center">Lapor Lurah</h1>
				<br><br>

				<form role="form" action="/laporlurahact" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		<div class="input-group" style="width: 500px">
                 <input type="text" name="namalengkap" placeholder="Nama Lengkap" class="form-control" >
                 
        </div>
        <br>
        <div class="input-group" style="width: 500px">
                 <input type="text" name="email" placeholder="E-mail" class="form-control" >
                 
        </div>
        <br>
        <div class="input-group" style="width: 500px;height: 250px">
                 <input type="text" name="isi" placeholder="Isi Laporan" class="form-control" >
                 
        </div>
        <br>

        
                  <div class="col-sm-9">
                     <input type="file" class="form-control" value="" name="GAMBAR">
                  </div>

                  <br>
                  <span class="input-group-append">
                      <button type="submit" class="btn btn-primary" style="margin-left: 510px; width: 100px">Send</button>
                  </span>

        </form>
			</div>
		
	</div>
</section>
<!-- //about -->
</center>


@endsection
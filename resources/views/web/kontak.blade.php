@extends('layouts.master')

@section('content')

<!-- banner -->

			
	
<!-- //banner -->
<center>
<!-- about -->

<section class="about py-5" style="background-color: white;">

	<div class="container py-md-3">
		<br>
				<h2 class="heading text-center mb-sm-5 mb-4">Kontak</h2>
		<br>
		<img src="Assets/images/kontak.jpg" alt="" class="img-fluid" width="50%" height="50%" />
			<div class="col-lg-8">
				<br>
				<br>
		<p><span class="fa mr-2 fa-map-marker"></span>Jl. Raya Mejono, Ds.Mejono Kec.Plemahan <span>Kab. Kediri.</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span> 0354 697886 </p>
				<p class="phone py-2"><span class="fa mr-2 fa-instagram"></span> @desamejono</p>
				<p><span class="fa mr-2 fa-envelope"></span><a href="mailto:info@example.com">pemdesmejono@gmail.com</a></p>
		
			</div>
			<br><br>
		<form role="form" action="/insertpesan" method="post" enctype="multipart/form-data">
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
                 <input type="text" name="pesan" placeholder="pesan" class="form-control" >
                 
        </div>
        <br>

                  <span class="input-group-append">
                      <button type="submit" class="btn btn-primary" style="margin-left: 510px; width: 100px">Send</button>
                      
                    </span>

        </form>
		
	</div>
	</div>
</section>
</center>
<!-- //about -->


@endsection
@extends('layouts.master')

@section('content')

<!-- banner -->
<div class="banner" id="home">
			
	
<!-- //banner -->
<center>
<!-- about -->
<section class="about py-5" style="background-color: white;">

	<div class="container py-md-3">
		@foreach ($berita as $beritaisi)
			<div class="col-lg-8">
				<img src="Assets/images/berita/{{$beritaisi->GAMBAR}}" alt="" class="img-fluid" width="60%" height="60%" />
				<h3 class="about-left" align="center">{{$beritaisi->JUDUL_BERITA}}</h3>
				
				<p class="mt-sm-4 mt-3" align="justify">{{$beritaisi->ISI_BERITA}}</p>
		
			</div>
			@endforeach
		
	</div>
	</div>
</section>
<!-- //about -->
</center>

@endsection
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<ul class="d-lg-flex header-w3_pvt">
					
					
				</ul>
			</div>
			<div class="col-sm-6 header-right-w3_pvt">
				<ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
					
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //top header -->

<!-- //header -->
<header style="height: 50px">
	<div class="container" style="padding-top: 4px">
			
		<!-- nav -->
<center>
		<nav style="width: 100%; padding-top: -4px;">

			<!-- <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop"> -->
			
			
			
			<ul class="menu mt-2" style="color: white">
				@if(Session::get('page')=='beranda')
				<li  style="border-bottom: solid 3px white; border-right:  solid 1px #F5F5F5 ;color: white; "  ><a href="/" style="">Beranda</a></li>
				@else
				<li style="border-right:  solid 1px #F5F5F5"><a href="/">Beranda</a></li>
				@endif

			@if(Session::get('page')=='profil')
			<li style="border-bottom: solid 3px white; border-right:  solid 1px #F5F5F5;  " class=""><a href="/profil"  style="padding-bottom: 3px">Profil</a></li>
			@else
			<li class="" style="border-right:  solid 1px #F5F5F5"><a href="/profil">Profil</a></li>
			@endif

			@if(Session::get('page')=='potensi')
			<li style="border-bottom: solid 2px white; border-right:  solid 1px #F5F5F5" class=""><a href="/potensi"  style="padding-bottom: 3px">Potensi</a></li>
			@else
			<li class="" style="border-right:  solid 1px #F5F5F5"><a href="/potensi">Potensi</a></li>
			@endif
				
			@if(Session::get('page')=='galeri')
			<li style="border-bottom: solid 2px white; border-right:  solid 1px #F5F5F5" class=""><a href="/galeri"  style="padding-bottom: 3px">Galeri</a></li>
			@else
			<li class="" style="border-right:  solid 1px #F5F5F5"><a href="/galeri">Galeri</a></li>
			@endif
			
			@if(Session::get('page')=='berita')
			<li style="border-bottom: solid 2px white; border-right:  solid 1px #F5F5F5" class=""><a href="/berita"  style="padding-bottom: 3px">Berita</a></li>
			@else
			<li class="" style="border-right:  solid 1px #F5F5F5"><a href="/berita">Berita</a></li>
			@endif
			
			
			@if(Session::get('page')=='kontak')
			<li style="border-bottom: solid 2px white;" class=""><a href="/kontak">Kontak</a></li>
			@else
			<li class="" style=""><a href="/kontak">Kontak</a></li>
			@endif
				

				<!-- <button class="fa fa-search" style="color: white; float: right; background-color: #990000; border: none; margin-right: 0px; margin-top: 3px"></button>
 -->
			</ul>

		
			
		</nav>


	</center>

	
	
		<!-- //nav -->
	</div>
	<div  style=" background-color: #660000; width: 100%; height: 7px">
			
		<!-- nav -->
<center>
		<nav style="width: 100%;">

			<!-- <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop"> -->
			
			
			
			<ul class="menu mt-2" style="color: #660000">
				@if(Session::get('page')=='beranda')
				<li  style="  padding: 0px"><a href="/" style="padding: 0px; background-color: #990000; height: 7px"></a></li>
				@else
				<li style=""><a href="/"></a></li>
				@endif

			@if(Session::get('page')=='profil')
			<li style="" class=""><a href="/profil"  style="padding-bottom: 3px"></a></li>
			@else
			<li class="" style=""><a href="/profil"></a></li>
			@endif

			@if(Session::get('page')=='potensi')
			<li style=" " class=""><a href="/potensi"  style="padding-bottom: 3px"></a></li>
			@else
			<li class="" style=""><a href="/potensi"></a></li>
			@endif
				
			@if(Session::get('page')=='galeri')
			<li style=" " class=""><a href="/galeri"  style="padding-bottom: 3px"></a></li>
			@else
			<li class="" style=""><a href="/galeri"></a></li>
			@endif
			
			@if(Session::get('page')=='berita')
			<li style=" " class=""><a href="/berita"  style="padding-bottom: 3px"></a></li>
			@else
			<li class="" style=""><a href="/berita"></a></li>
			@endif
			
			
			@if(Session::get('page')=='kontak')
			<li style="" class=""><a href="/kontak"></a></li>
			@else
			<li class="" style=""><a href="/kontak"></a></li>
			@endif
				

				<!-- <button class="fa fa-search" style="color: white; float: right; background-color: #990000; border: none; margin-right: 0px; margin-top: 3px"></button>
 -->
			</ul>

		
			
		</nav>


	</center>

	
	
		<!-- //nav -->
	</div>
	
	

</header>

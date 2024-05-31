<x-user-layout>
	<div class="hero-wrap js-fullheight" style="background-image: url('{{asset('dashboard')}}/images/bg_1.jpg');">
		<div class="overlay"></div>
		<div class="container">
		  <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
			  <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Pantai <br></strong> Pondok Bali</h1>
			  <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Nikmati indahnya salah satu destinasi wisata pantai di kota Subang</p>
			  <div class="block-17 my-4">
				<form action="" method="post" class="d-block d-flex">
				  <div class="fields d-block d-flex">
					<div class="textfield-search one-third">
						<input type="text" class="form-control" placeholder="Ex: food, service, hotel">
					</div>
				  </div>
				  <input type="submit" class="search-submit btn btn-primary" value="Search">
				</form>
			  </div>
			  <p>Or browse the highlights</p>
			  <p class="browse d-md-flex">
				  <span class="d-flex justify-content-md-center align-items-md-center"><a href="/tour"><i class="flaticon-fork"></i>Kuliner</a></span>
				  <span class="d-flex justify-content-md-center align-items-md-center"><a href="/hotel"><i class="flaticon-hotel"></i>Hotel</a></span>
				  <span class="d-flex justify-content-md-center align-items-md-center"><a href="/tiket"><img src="{{asset('dashboard')}}/images/tiket.png">Tiket</a></span>
				  <span class="d-flex justify-content-md-center align-items-md-	center"><a href="/grafik"><img src="{{asset('dashboard')}}/images/grafik.png">Grafik</a></span>
			  </p>
			</div>
		  </div>
		</div>
	  </div>
  
</x-layouts-user-layout>
<?php if (isset($component)) { $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107 = $component; } ?>
<?php $component = App\View\Components\UserLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\UserLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
	<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo e(asset('dashboard')); ?>/images/bg_1.jpg');">
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
				  <span class="d-flex justify-content-md-center align-items-md-center"><a href="/tiket"><img src="<?php echo e(asset('dashboard')); ?>/images/tiket.png">Tiket</a></span>
				  <span class="d-flex justify-content-md-center align-items-md-	center"><a href="/grafik"><img src="<?php echo e(asset('dashboard')); ?>/images/grafik.png">Grafik</a></span>
			  </p>
			</div>
		  </div>
		</div>
	  </div>
  
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107)): ?>
<?php $component = $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107; ?>
<?php unset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\projek2\resources\views/v_home.blade.php ENDPATH**/ ?>
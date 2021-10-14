<style>
    .owl-carousel .item {
      height: 25rem;
      padding: 1rem;
    }
    .owl-carousel .item h4 {
      color: #FFF;
      font-weight: 400;
      margin-top: 0rem;
     }
</style>

<script>
	jQuery(document).ready(function($){
		$('.owl-carousel').owlCarousel({
		dots: false,
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
			items:1
			}
		}
		})
	});

</script>

<section id="menu">
	<div class="hd2">
		Ознайомитися з меню
	</div>
	<section class="fourth-section">
		<div class="behind-menu-filter">
			<div class="menu-title-aligner ">
				<h3 class="logo-menu-book-title" id="menu-book-title">
					<span id="menu_uk">МЕНЮ</span>			
				</h3>
			</div>
			<div class="owl-carousel owl-theme">
				
				@foreach(array_keys($dishes) as $group)
				<div class="item">
					<section class="menu-book">
						<div class="dishtype-menu">
							<div class="menu-book-center">

								<h3 class="food-type">{{ $group }}</h3>
								<hr class="under-food-type">

								
							</div>
							<div class="dish-list">
								<div class="first-menu-column">
									<ul class="leaders"> 
										@foreach($dishes[$group] as $item)
										<li class="product-name">
											<a class="product-line no-load" data-img="">
												<span class="ellipsis">
													{{ $item->name }}
												</span>
												<span class="product-price">{{ $item->cost }} грн.</span>
											</a>
										</li>
										<li class="product-description">{{ $item->ingredients }}, {{ $item->count }} г</li>
										@endforeach
																			
								</div>
							</div>
						</div>
								
						
					</section>
				</div>
				@endforeach 
			</div>
		</div>
	</section>



</section>
<?php
if (isset($this->data['form'])) {
	$valorForm = $this->data['form'];
	// var_dump($this->data);	
}

if (isset($this->data['form'][0])) {
	$valorForm = $this->data['form'][0];
}

$id = '';
if (isset($valorForm['id'])) {
	$id = $valorForm['id'];
}
if ((!empty($valorForm['banner_background']) and (file_exists("app/str/assets/images/banner/" . $valorForm['banner_background'])))) {
	$background = $valorForm['banner_background'];
} else {
	$background = "imgexemple.png";
}
if ((!empty($valorForm['banner_image']) and (file_exists("app/str/assets/images/banner/" . $valorForm['banner_image'])))) {
	$banner_image = $valorForm['banner_image'];
} else {
	$banner_image = "";
}

if (!empty($valorForm['banner_title'])) {
	$banner_title = $valorForm['banner_title'];
} else {
	$banner_title = "";
}

if (!empty($valorForm['banner_text'])) {
	$banner_text = $valorForm['banner_text'];
} else {
	$banner_text = "";
}
// var_dump($banner_text);

?>

<!-- start banner Area -->
<div class="container">

	<section class="banner-area" style="background-image: url(<?php echo URL ?>app/str/assets/images/banner/<?php echo $background; ?>);">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1><?php echo $banner_title; ?></h1>
									<p><?php echo $banner_text; ?></p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/banner/<?php echo $banner_image; ?>" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1><?php echo $banner_title; ?></h1>
									<p><?php echo $banner_text; ?></p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/banner/<?php echo $banner_image; ?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo URL ?>app/str/assets/images/features/f-icon1.png" alt="">
						</div>
						<h6>Frete Grátis</h6>
						<p>Frete grátis em todos os pedidos</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo URL ?>app/str/assets/images/features/f-icon2.png" alt="">
						</div>
						<h6>Politica de Devolução</h6>
						<p>Nossa Política de devoluções!</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo URL ?>app/str/assets/images/features/f-icon3.png" alt="">
						</div>
						<h6>Suporte 24/7</h6>
						<p>Suporte Personalizado!</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo URL ?>app/str/assets/images/features/f-icon4.png" alt="">
						</div>
						<h6>Pagamento Seguro</h6>
						<p>Todos os Meios de Pagamento!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo URL ?>app/str/assets/images/category/c1.jpg" alt="">
								<a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Produto para Casal</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo URL ?>app/str/assets/images/category/c2.jpg" alt="">
								<a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Tênis para esportes</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo URL ?>app/str/assets/images/category/c3.jpg" alt="">
								<a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Tênis para esportes</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo URL ?>app/str/assets/images/category/c4.jpg" alt="">
								<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Tênis para esportes</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="<?php echo URL ?>app/str/assets/images/category/c5.jpg" alt="">
						<a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Ofertas Imperdiveis</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Produtos Mais recentes</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p1.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p2.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p3.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p4.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p5.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p6.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p7.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p8.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Próximos produtos</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p6.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p8.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p3.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p5.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p1.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p4.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p1.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/p8.jpg" alt="">
							<div class="product-details">
								<h6>adidas Nova sola Hammer para esportistas</h6>
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left" style="background: url(<?php echo URL ?>app/str/assets/images/exclusive.jpg) center no-repeat">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>Oferta quente exclusiva termina em breve!!</h1>
							<p>Que estão extremamente apaixonados pelo sistema ecológico...</p>
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">150</h1>
									<span class="smalltext">Days</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">23</h1>
									<span class="smalltext">Hours</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">47</h1>
									<span class="smalltext">Mins</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Secs</span>
								</div>
							</div>
						</div>
					</div>
					<a href="" class="primary-btn">Compre agora</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/e-p1.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<h4>adidas Nova sola Hammer para esportistas</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/product/e-p1.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$999.99</h6>
									<h6 class="l-through">$999.99</h6>
								</div>
								<h4>adidas Nova sola Hammer para esportistas</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?php echo URL ?>app/str/assets/images/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?php echo URL ?>app/str/assets/images/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?php echo URL ?>app/str/assets/images/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?php echo URL ?>app/str/assets/images/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?php echo URL ?>app/str/assets/images/brand/5.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Ofertas da semana</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?php echo URL ?>app/str/assets/images/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Produto</a>
									<div class="price">
										<h6>$999.99</h6>
										<h6 class="l-through">$999.99</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?php echo URL ?>app/str/assets/images/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Produto</a>
									<div class="price">
										<h6>$999.99</h6>
										<h6 class="l-through">$999.99</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?php echo URL ?>app/str/assets/images/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Produto</a>
									<div class="price">
										<h6>$999.99</h6>
										<h6 class="l-through">$999.99</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?php echo URL ?>app/str/assets/images/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Produto</a>
									<div class="price">
										<h6>$999.99</h6>
										<h6 class="l-through">$999.99</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?php echo URL ?>app/str/assets/images/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Produto</a>
									<div class="price">
										<h6>$999.99</h6>
										<h6 class="l-through">$999.99</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?php echo URL ?>app/str/assets/images/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Produto</a>
									<div class="price">
										<h6>$999.99</h6>
										<h6 class="l-through">$999.99</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?php echo URL ?>app/str/assets/images/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Produto</a>
									<div class="price">
										<h6>$999.99</h6>
										<h6 class="l-through">$999.99</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?php echo URL ?>app/str/assets/images/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Produto</a>
									<div class="price">
										<h6>$999.99</h6>
										<h6 class="l-through">$999.99</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?php echo URL ?>app/str/assets/images/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Produto</a>
									<div class="price">
										<h6>$999.99</h6>
										<h6 class="l-through">$999.99</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="<?php echo URL ?>app/str/assets/images/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->
</div>
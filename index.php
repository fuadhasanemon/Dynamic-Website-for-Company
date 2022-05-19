<!DOCTYPE html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Delivery - Home Delivery App Landing Page Template</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
	<!-- Place favicon.ico in the root directory -->

	<!-- ========================= CSS here ========================= -->
	<link rel="stylesheet" href="assets/css/bootstrap-5.0.0-alpha-2.min.css" />
	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
	<link rel="stylesheet" href="assets/css/animate.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
	<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

	<?php

	$ourTeam = [

		[
			'image' => 'hacker.png',

			'name' => 'Fuad Hasan',

			'designation' => 'Software Engineer',

			'socials' => [

				'https://www.facebook.com/', 'https://www.linkedin.com/feed/', 'https://github.com/'

			],

			'social_icons' => [

				'bi bi-facebook', 'bi bi-linkedin', 'bi bi-github'

			]

		],

		[
			'image' => 'delivery-boy.png',

			'name' => 'Siam Sheikh',

			'designation' => 'Copywriter',

			'socials' => [

				'https://www.facebook.com/', 'https://www.linkedin.com/feed/', 'https://github.com/'

			],

			'social_icons' => [

				'bi bi-facebook', 'bi bi-linkedin', 'bi bi-github'

			]

		],

		[
			'image' => 'woman.png',

			'name' => 'Sonia Akhter',

			'designation' => 'SQA',

			'socials' => [

				'https://www.facebook.com/', 'https://www.linkedin.com/feed/', 'https://github.com/'

			],

			'social_icons' => [

				'bi bi-facebook', 'bi bi-linkedin', 'bi bi-github'

			]

		],


	];


	?>

	<!-- ========================= preloader start ========================= -->
	<div class="preloader">
		<div class="loader">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- preloader end -->


	<!-- ========================= header start ========================= -->
	<header class="header">
		<div class="navbar-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="index.html">
								<img src="assets/img/logo/logo.svg" alt="Logo" />
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
								<ul id="nav" class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="page-scroll" href="#home">Home</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#services">Services</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#portfolio">Portfolio</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#testimonials">Testimonials</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#contact_us">Contact us</a>
									</li>
								</ul>
							</div>
							<!-- navbar collapse -->
						</nav>
						<!-- navbar -->
					</div>
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- navbar area -->
	</header>
	<!-- ========================= header end ========================= -->

	<!-- ========================= hero-section start ========================= -->
	<section id="home" class="hero-section">

		<div class="hero-shape">
			<img src="assets/img/hero/hero-shape.svg" alt="" class="shape">
		</div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="hero-content">
						<h1 class="wow fadeInUp" data-wow-delay=".2s">You're Using <br> <span>D Delivery</span> </h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe tempore dignissimos eius expedita vel?
						</p>
						<a href="#" rel="nofollow" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Purchase Now</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
						<img src="assets/img/hero/slider_one.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========================= hero-section end ========================= -->

	<!-- ========================= service-section start ========================= -->
	<section id="services" class="service-section pt-150">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-8">
					<div class="section-title text-center mb-70">
						<span class="wow fadeInUp" data-wow-delay=".2s">Our Services</span>
						<h1 class="wow fadeInUp" data-wow-delay=".4s">All Essentials You Need</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-delay=".2s">
						<div class="icon">
							<img src="assets/img/service/service-icon-1.svg" alt="">
						</div>
						<div class="content">
							<h3>Food</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-delay=".4s">
						<div class="icon">
							<img src="assets/img/service/service-icon-2.svg" alt="">
						</div>
						<div class="content">
							<h3>Grocery</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-delay=".6s">
						<div class="icon">
							<img src="assets/img/service/service-icon-3.svg" alt="">
						</div>
						<div class="content">
							<h3>Furniture</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-delay=".2s">
						<div class="icon">
							<img src="assets/img/service/service-icon-4.svg" alt="">
						</div>
						<div class="content">
							<h3>Medicine</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-delay=".4s">
						<div class="icon">
							<img src="assets/img/service/service-icon-5.svg" alt="">
						</div>
						<div class="content">
							<h3>Electronics</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-delay=".6s">
						<div class="icon">
							<img src="assets/img/service/service-icon-6.svg" alt="">
						</div>
						<div class="content">
							<h3>Clothes</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========================= service-section end ========================= -->

	<!-- ========================= about-section start ========================= -->
	<!-- <section id="about" class="about-section pt-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-img wow fadeInUp" data-wow-delay=".5s">
							<img src="assets/img/about/about-img.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content">
							<div class="section-title">
								<span class="wow fadeInUp" data-wow-delay=".2s">About Us</span>
								<h1 class="wow fadeInUp" data-wow-delay=".4s">On-time Delivery and Customer Satisfaction</h1>
								<p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
							<div class="rating-meta d-flex align-items-center wow fadeInUp" data-wow-delay=".65s">
								<h5>Rating 4.8</h5>
								<div class="rating">
									<i class="lni lni-star-filled"></i>
									<i class="lni lni-star-filled"></i>
									<i class="lni lni-star-filled"></i>
									<i class="lni lni-star-filled"></i>
									<i class="lni lni-star-filled"></i>
								</div>
							</div>

							<div class="counter-up wow fadeInUp" data-wow-delay=".8s">
								<div class="single-counter">
									<h3 id="secondo1" class="countup" cup-end="1" cup-append="M+">1 </h3>
									<h5>Download</h5>
								</div>
								<div class="single-counter position-relative">
									<h3 id="secondo2" class="countup" cup-end="234" cup-append="K+">234 </h3>
									<h5>Happy User</h5>
								</div>
								<div class="single-counter">
									<h3 id="secondo3" class="countup" cup-end="34" cup-append="K+">34 </h3>
									<h5>Reviews</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
	<!-- ========================= about-section end ========================= -->

	<!-- ========================= delivery-section start ========================= -->
	<!-- <section id="how" class="delivery-section pt-150">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="delivery-content">
							<div class="section-title">
								<span class="wow fadeInUp" data-wow-delay=".2s">Fast Delivery</span>
								<h1 class="mb-35 wow fadeInUp" data-wow-delay=".4s">Order Now, Recieve Within 30mins</h1>
								<p class="mb-35 wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore hdht dolore magna aliquyam erat, sed diam voluptua.</p>
								<a href="javscript:void(0)" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".8s">Download App</a>
							</div>
						</div>
					</div>
					<div class="col-lg-7 order-first order-lg-last">
						<div class="delivery-img wow fadeInUp" data-wow-delay=".5s">
							<img src="assets/img/delivery/delivery-img.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section> -->
	<!-- ========================= delivery-section end ========================= -->

	<!-- ========================= about-section start ========================= -->
	<!-- <section id="received" class="about-section received-section pt-150">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-img received-img wow fadeInUp" data-wow-delay=".5s">
							<img src="assets/img/received/received-img.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content received-content">
							<div class="section-title">
								<span class="wow fadeInUp" data-wow-delay=".2s">Contactless Delivery</span>
								<h1 class="mb-25 wow fadeInUp" data-wow-delay=".4s">On-time Delivery to Your Doorstep</h1>
								<p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
	<!-- ========================= about-section end ========================= -->


	<!-- ========================= testimonial-section start ========================= -->
	<section id="testimonials" class="testimonial-section img-bg pt-150 pb-40">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title mb-60 text-center">
						<span class="wow fadeInUp" data-wow-delay=".2s">Testimonials</span>
						<h1 class="wow fadeInUp" data-wow-delay=".4s">What Our Client Says</h1>
					</div>
				</div>
			</div>

			<div class="row testimonial-wrapper">
				<div class="col-lg-4 col-md-6 -mt-30">
					<div class="single-testimonial wow fadeInUp" data-wow-delay=".2s">
						<div class="rating">
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
						</div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet onsetetur sadipscing elitr, sed diam non eirmod tempor invidunt ut labore etdo magna aliquyam erat, sed diam vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren.</p>
						</div>
						<div class="info">
							<div class="image">
								<img src="assets/img/testimonial/testimonial-1.png" alt="">
							</div>
							<div class="text">
								<h5>Ena Shah</h5>
								<p>Teacher at Abc School</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 -mt-60">
					<div class="single-testimonial wow fadeInUp" data-wow-delay=".4s">
						<div class="rating">
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
						</div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet onsetetur sadipscing elitr, sed diam non eirmod tempor invidunt ut labore etdo magna aliquyam erat, sed diam vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren.</p>
						</div>
						<div class="info">
							<div class="image">
								<img src="assets/img/testimonial/testimonial-2.png" alt="">
							</div>
							<div class="text">
								<h5>Mrs. Gosh</h5>
								<p>Actor</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-testimonial wow fadeInUp" data-wow-delay=".6s">
						<div class="rating">
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
						</div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet onsetetur sadipscing elitr, sed diam non eirmod tempor invidunt ut labore etdo magna aliquyam erat, sed diam vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren.</p>
						</div>
						<div class="info">
							<div class="image">
								<img src="assets/img/testimonial/testimonial-3.png" alt="">
							</div>
							<div class="text">
								<h5>John Doe</h5>
								<p>Model</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 -mt-30">
					<div class="single-testimonial wow fadeInUp" data-wow-delay=".2s">
						<div class="rating">
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
						</div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet onsetetur sadipscing elitr, sed diam non eirmod tempor invidunt ut labore etdo magna aliquyam erat, sed diam vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren.</p>
						</div>
						<div class="info">
							<div class="image">
								<img src="assets/img/testimonial/testimonial-4.png" alt="">
							</div>
							<div class="text">
								<h5>Jonathan Smith</h5>
								<p>Creative Designer</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 -mt-60">
					<div class="single-testimonial wow fadeInUp" data-wow-delay=".4s">
						<div class="rating">
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
						</div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet onsetetur sadipscing elitr, sed diam non eirmod tempor invidunt ut labore etdo magna aliquyam erat, sed diam vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren.</p>
						</div>
						<div class="info">
							<div class="image">
								<img src="assets/img/testimonial/testimonial-5.png" alt="">
							</div>
							<div class="text">
								<h5>Sara A. K.</h5>
								<p>Heroine</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-testimonial wow fadeInUp" data-wow-delay=".6s">
						<div class="rating">
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
							<i class="lni lni-star-filled"></i>
						</div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet onsetetur sadipscing elitr, sed diam non eirmod tempor invidunt ut labore etdo magna aliquyam erat, sed diam vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren.</p>
						</div>
						<div class="info">
							<div class="image">
								<img src="assets/img/testimonial/testimonial-6.png" alt="">
							</div>
							<div class="text">
								<h5>David Smith</h5>
								<p>Businessman</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========================= testimonial-section end ========================= -->


	<!-- Portfolio section start -->

	<section id="portfolio" class="services">

		<div class="img-container">
			<div class="img-wrap">
				<img src="https://n.foxdsgn.com/deva/wp-content/uploads/2021/02/image-12.png" alt="">
			</div>

			<div class="img-wrap-two">
				<img src="https://n.foxdsgn.com/deva/wp-content/uploads/2021/02/image-14-748x1024.png" alt="">
			</div>
		</div>

		<div class="container">
			<div class="row row-one">

				<div class="col-md-12">
					<div class="cutom-tag section-title">
						<span class="wow fadeInUp">Our Portfolio</span>
					</div>

					<h2>Tool for every kind of business</h2>

					<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
						placeat facere possimus.</p>

				</div>

			</div>

			<div class="row row-two">

				<div class="col-md-4 services__column">
					<div class="services__column__item-one">
						<div class="content">
							<div class="img-wrap">
								<img src="https://n.foxdsgn.com/deva/wp-content/uploads/2021/02/image-4.png" alt="">
							</div>

							<h3>Startups</h3>
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit minus.</p>

						</div>

						<a class="custom-btn-arrow" href="">Discover more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					</div>

				</div>

				<div class="col-md-4 services__column">
					<div class="services__column__item-two">
						<div class="content">
							<div class="img-wrap">
								<img src="https://n.foxdsgn.com/deva/wp-content/uploads/2021/02/image-5.png" alt="">
							</div>

							<h3>Entrepreneurs</h3>
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit minus.</p>

						</div>

						<a class="custom-btn-arrow" href="">Discover more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					</div>

				</div>

				<div class="col-md-4 services__column">
					<div class="services__column__item-three">
						<div class="content">
							<div class="img-wrap">
								<img src="https://n.foxdsgn.com/deva/wp-content/uploads/2021/02/image-6.png" alt="">
							</div>

							<h3>Employees</h3>
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit minus.</p>

						</div>

						<a class="custom-btn-arrow" href="">Discover more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					</div>

				</div>


			</div>

		</div>

	</section>

	<!-- Service section end -->

	<!-- ========================= partners-section start ========================= -->

	<section id="partner" class="partner-section pt-60 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="single-partner wow fadeInUp" data-wow-delay=".2s">
						<img src="assets/img/partners/partner-1.svg" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="single-partner wow fadeInUp" data-wow-delay=".4s">
						<img src="assets/img/partners/partner-2.svg" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="single-partner wow fadeInUp" data-wow-delay=".6s">
						<img src="assets/img/partners/partner-3.svg" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="single-partner wow fadeInUp" data-wow-delay=".8s">
						<img src="assets/img/partners/partner-4.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ========================= partners-section end ========================= -->

	<!-- Our team section -->

	<div class="section cards pt-60 pb-60">


		<div class="container">

			<div class="row">
				<div class="section-title text-center">
					<span class="py-5 card__title wow fadeInUp">Our Team</span>
				</div>


				<?php foreach ($ourTeam as $teamMember) { ?>

					<div class="col-sm-4">
						<div class="card">
							<img src="assets/img/team/<?php echo $teamMember['image'] ?>" class="card-img-top" alt="...">
							<div class="card-body text-center">
								<h5 class="card-title member__name"><?php echo $teamMember['name']; ?></h5>
								<p class="card-text member__designation"><?php echo $teamMember['designation']; ?></p>

								<div class="socials">

									<ul>
										<?php foreach (array_combine($teamMember['socials'], $teamMember['social_icons']) as $socials => $icons) { ?>

											<li><a href="<?php echo $socials; ?>"><i class="<?php echo $icons; ?>"></i></a>
											</li>

										<?php }; ?>
									</ul>

								</div>

							</div>
						</div>
					</div>

				<?php } ?>
			</div>

		</div>


	</div>

	<!-- Our team section -->


	<!---========= Contact US Form Start ==============-->
	
	
<section id="contact_us" class="contact-us pt-60 pb-60">

<div class="container">
	<!--Section heading-->
	<div class="section-title text-center">
		<span class="h1-responsive font-weight-bold text-center my-4 wow fadeInUp">Contact us</span>
	</div>

<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
	a matter of hours to help you.</p>

<div class="row">

	<!--Grid column-->
	<div class="col-md-12 mb-md-0 py-5">
		<form id="contact-form" name="contact-form" action="mail.php" method="POST">

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-md-6">
					<div class="md-form mb-3">
						<label for="name" class="">Your name</label>
						<input type="text" id="name" name="name" class="form-control">
						
					</div>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-md-6">
					<div class="md-form mb-3">
						<label for="email" class="">Your email</label>
						<input type="text" id="email" name="email" class="form-control">
						
					</div>
				</div>
				<!--Grid column-->

			</div>
			<!--Grid row-->

			<!--Grid row-->
			<div class="row">
				<div class="col-md-12">
					<div class="md-form mb-3">
						<label for="subject" class="">Subject</label>
						<input type="text" id="subject" name="subject" class="form-control">
						
					</div>
				</div>
			</div>
			<!--Grid row-->

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-md-12">

					<div class="md-form mb-3">
						<label for="message">Your message</label>
						<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
						
					</div>

				</div>
			</div>
			<!--Grid row-->

		</form>

		<div class="text-center text-md-left">
			<a class=" main-btn btn-hover wow fadeInUp" onclick="document.getElementById('contact-form').submit();">Send</a>
		</div>
		<div class="status"></div>
	</div>
	<!--Grid column-->

</div>
</div>

</section>
<!--Section: Contact v.2-->

	<!---========= Contact US Form End ==============-->

	<!-- ========================= footer start ========================= -->
	<footer id="footer" class="footer pt-100 pb-70">
		<div class="footer-shape">
			<img src="assets/img/footer/footer-left.svg" alt="" class="shape shape-1">
			<img src="assets/img/footer/footer-right.svg" alt="" class="shape shape-2">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
						<div class="logo">
							<a href="index.html"><img src="assets/img/logo/logo-2.svg" alt="logo"></a>
						</div>
						<div class="download-btns">
							<a href="javascript:void(0)">
								<span class="icon"><i class="lni lni-apple"></i></span>
								<span class="text">Download on the <b>App Store</b> </span>
							</a>
							<a href="javascript:void(0)">
								<span class="icon"><i class="lni lni-play-store"></i></span>
								<span class="text">GET IT ON <b>Play Store</b> </span>
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
						<h3>About Us</h3>
						<ul class="links">
							<li>
								<a href="javascript:void(0)">Home</a>
							</li>
							<li>
								<a href="javascript:void(0)">Services</a>
							</li>
							<li>
								<a href="javascript:void(0)">About Us</a>
							</li>
							<li>
								<a href="javascript:void(0)">Contact</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-widget wow fadeInUp" data-wow-delay=".6s">
						<h3>About</h3>
						<ul class="links">
							<li>
								<a href="javascript:void(0)">Partners</a>
							</li>
							<li>
								<a href="javascript:void(0)">Terms of Service</a>
							</li>
							<li>
								<a href="javascript:void(0)">Privacy Policy</a>
							</li>
							<li>
								<a href="javascript:void(0)">Refund Policy</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-widget wow fadeInUp" data-wow-delay=".8s">
						<h3>Support</h3>
						<ul class="links">
							<li>
								<a href="javascript:void(0)">Open Ticket</a>
							</li>
							<li>
								<a href="javascript:void(0)">Community</a>
							</li>
							<li>
								<a href="javascript:void(0)">Return Policy</a>
							</li>
							<li>
								<a href="javascript:void(0)">Accessibility</a>
							</li>
						</ul>
					</div>
				</div>
				<p>Designed and Developed by <a href="https://fuadhasanemon.com" style="color: #fff;" rel="nofollow">Fuad</a></p>
			</div>
		</div>
	</footer>
	<!-- ========================= footer end ========================= -->

	<!-- ========================= scroll-top ========================= -->
	<a href="#" class="scroll-top btn-hover">
		<i class="lni lni-chevron-up"></i>
	</a>

	<!-- ========================= JS here ========================= -->
	<script src="assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
	<script src="assets/js/count-up.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>
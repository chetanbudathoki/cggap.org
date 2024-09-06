<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="description">
		<meta name="keywords" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Animal World HTML Template</title>
		<!-- styles-->
		<link rel="stylesheet" href="css/styles.min.css">
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Nunito+Sans:300,400,500,700,900', 'Quicksand:300,400,500,700'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>
	<body>
		<div class="page-wrapper">
			<!-- menu dropdown start-->
			<div class="menu-dropdown">
				<div class="menu-dropdown__inner" data-value="start">
					<div class="screen screen--start">
						<div class="screen__item screen--trigger" data-category="home"><span>Home</span><span>
							<svg class="icon">
								<use xlink:href="#chevron"></use>
							</svg></span></div>
						<div class="screen__item screen--trigger item--active" data-category="pages"><span>Pages</span><span>
							<svg class="icon">
								<use xlink:href="#chevron"></use>
							</svg></span></div>
						<div class="screen__item"><a class="screen__link" href="blog.html">Blog</a></div>
						<div class="screen__item screen--trigger" data-category="shop"><span>Shop</span><span>
							<svg class="icon">
								<use xlink:href="#chevron"></use>
							</svg></span></div>
						<div class="screen__item"><a class="screen__link" href="contacts.html">Contacts</a></div>
						<div class="screen__item screen--trigger" data-category="elements"><span>Elements</span><span>
							<svg class="icon">
								<use xlink:href="#chevron"></use>
							</svg></span></div>
						<div class="screen__item screen--trigger" data-category="language"><span>Language</span><span>
							<svg class="icon">
								<use xlink:href="#chevron"></use>
							</svg></span></div>
						<ul class="screen__socials">
							<li><a class="item--facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a class="item--twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a class="item--youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<li><a class="item--instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul><a class="screen__button" href="#">Tickets</a>
					</div>
				</div>
				<div class="menu-dropdown__inner" data-value="home">
					<div class="screen screen--sub">
						<div class="screen__heading">
							<h6 class="screen__back">
								<svg class="icon">
									<use xlink:href="#chevron-left"></use>
								</svg> <span>Home</span>
							</h6>
						</div>
						<div class="screen__item"><a class="screen__link" href="index.html">Home Zoo</a></div>
						<div class="screen__item"><a class="screen__link" href="front_2.html">Home Aquarium</a></div>
						<div class="screen__item"><a class="screen__link" href="front_3.html">Home Terrarium</a></div>
						<div class="screen__item"><a class="screen__link" href="front_4.html">Home Protections</a></div>
						<div class="screen__item"><a class="screen__link" href="front_5.html">Home Safari</a></div>
						<div class="screen__item"><a class="screen__link" href="front_6.html">Home Shop</a></div>
					</div>
				</div>
				<div class="menu-dropdown__inner" data-value="pages">
					<div class="screen screen--sub">
						<div class="screen__heading">
							<h6 class="screen__back">
								<svg class="icon">
									<use xlink:href="#chevron-left"></use>
								</svg> <span>Pages</span>
							</h6>
						</div>
						<div class="screen__item"><a class="screen__link" href="about.html">About</a></div>
						<div class="screen__item"><a class="screen__link" href="services.html">Services</a></div>
						<div class="screen__item"><a class="screen__link" href="blog-details.html">Blog Details</a></div>
						<div class="screen__item"><a class="screen__link" href="gallery.html">Gallery</a></div>
						<div class="screen__item"><a class="screen__link" href="gallery_2.html">Gallery v.2</a></div>
						<div class="screen__item"><a class="screen__link" href="calendar.html">Calendar</a></div>
						<div class="screen__item item--active"><a class="screen__link" href="membership.html">Membership</a></div>
						<div class="screen__item"><a class="screen__link" href="events.html">Events</a></div>
						<div class="screen__item"><a class="screen__link" href="event-details.html">Event Details</a></div>
						<div class="screen__item"><a class="screen__link" href="tickets.html">Tickets</a></div>
						<div class="screen__item"><a class="screen__link" href="foundation.html">Foundation</a></div>
						<div class="screen__item"><a class="screen__link" href="education.html">Education</a></div>
						<div class="screen__item"><a class="screen__link" href="donation.html">Donation</a></div>
						<div class="screen__item"><a class="screen__link" href="donation-details.html">Donation Details</a></div>
						<div class="screen__item"><a class="screen__link" href="animals.html">Animals</a></div>
						<div class="screen__item"><a class="screen__link" href="animal-details.html">Animal Details</a></div>
						<div class="screen__item"><a class="screen__link" href="safari-tours.html">Safari Tours</a></div>
						<div class="screen__item"><a class="screen__link" href="tour-details.html">Tour Details</a></div>
						<div class="screen__item"><a class="screen__link" href="typography.html">Typography</a></div>
						<div class="screen__item"><a class="screen__link" href="faq.html">Faq</a></div>
						<div class="screen__item"><a class="screen__link" href="map.html">Map</a></div>
						<div class="screen__item"><a class="screen__link" href="404.html">404</a></div>
					</div>
				</div>
				<div class="menu-dropdown__inner" data-value="shop">
					<div class="screen screen--sub">
						<div class="screen__heading">
							<h6 class="screen__back">
								<svg class="icon">
									<use xlink:href="#chevron-left"></use>
								</svg> <span>Shop</span>
							</h6>
						</div>
						<div class="screen__item"><a class="screen__link" href="shop-catalog.html">Shop Catalog</a></div>
						<div class="screen__item"><a class="screen__link" href="shop-product.html">Shop Product</a></div>
						<div class="screen__item"><a class="screen__link" href="shop-cart.html">Shop Cart</a></div>
						<div class="screen__item"><a class="screen__link" href="shop-checkout.html">Shop Checkout</a></div>
						<div class="screen__item"><a class="screen__link" href="shop-account.html">Shop Account</a></div>
					</div>
				</div>
				<div class="menu-dropdown__inner" data-value="elements">
					<div class="screen screen--sub">
						<div class="screen__heading">
							<h6 class="screen__back">
								<svg class="icon">
									<use xlink:href="#chevron-left"></use>
								</svg> <span>Elements</span>
							</h6>
						</div>
						<div class="screen__item"><a class="screen__link" href="accordion.html">Accordion</a></div>
						<div class="screen__item"><a class="screen__link" href="alerts.html">Alerts</a></div>
						<div class="screen__item"><a class="screen__link" href="breadcrumbs.html">Breadcrumbs</a></div>
						<div class="screen__item"><a class="screen__link" href="buttons.html">Buttons</a></div>
						<div class="screen__item"><a class="screen__link" href="charts.html">Charts</a></div>
						<div class="screen__item"><a class="screen__link" href="counters.html">Counters</a></div>
						<div class="screen__item"><a class="screen__link" href="forms.html">Forms</a></div>
						<div class="screen__item"><a class="screen__link" href="icon-list.html">Icon List</a></div>
						<div class="screen__item"><a class="screen__link" href="logos.html">Logos</a></div>
						<div class="screen__item"><a class="screen__link" href="paginations.html">Paginations</a></div>
						<div class="screen__item"><a class="screen__link" href="pricing-tables.html">Pricing Tables</a></div>
						<div class="screen__item"><a class="screen__link" href="tabs.html">Tabs</a></div>
						<div class="screen__item"><a class="screen__link" href="team.html">Tean</a></div>
						<div class="screen__item"><a class="screen__link" href="testimonials.html">Testimonials</a></div>
					</div>
				</div>
				<div class="menu-dropdown__inner" data-value="language">
					<div class="screen screen--sub">
						<div class="screen__heading">
							<h6 class="screen__back">
								<svg class="icon">
									<use xlink:href="#chevron-left"></use>
								</svg> <span>Language</span>
							</h6>
						</div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">English</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">French</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Spanish</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Deutsch</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Russian</a></div>
					</div>
				</div>
			</div>
			<!-- menu dropdown end-->
			<!-- header start-->
			<?php include 'header.php';?>
			<!-- header end-->
			<main class="main">
				<!-- promo start-->
				<section class="promo-primary">
					<picture>
						<source srcset="img/img/114D.jpg" media="(min-width: 992px)"><img class="img--bg" src="img/img/114D.jpg" alt="img">
					</picture>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Services</span>
										<h1 class="promo-primary__title"><span>Services</span> <span>we offer</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- promo end-->
				<!-- cta start-->
			
				<!-- cta end-->
				<!-- section start-->
				<section class="section benefits"><img class="benefits__img" src="img/benefits-bg.png" alt="img">
					<div class="container">
						<div class="row bottom-50">
							<div class="col-12">
								<div class="heading heading--primary heading--style-2"><span class="heading__pre-title">Services</span>
									<h2 class="heading__title"><span>Our</span> <span>services</span></h2>
									<p></p>
								</div>
							</div>
						</div>
						<div class="row offset-margin">
							<div class="col-sm-6 col-lg-4">
								<div class="icon-item">
									<div class="icon-item__icon">
										<svg class="icon">
											<use xlink:href="#cutlery-1"></use>
										</svg>
									</div>
									<h6 class="icon-item__title">Accommodation</h6>
									<p>We provide participants with accomodation in multiple places, according to the budget and proximity to the place of activities.</p>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="icon-item">
									<div class="icon-item__icon">
										<svg class="icon">
											<use xlink:href="#cutlery-1"></use>
										</svg>
									</div>
									<h6 class="icon-item__title">Training and workshops</h6>
									<p>Leadership skills for those who are working in management or coordination roles.</p>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="icon-item">
									<div class="icon-item__icon">
										<svg class="icon">
											<use xlink:href="#book"></use>
										</svg>
									</div>
									<h6 class="icon-item__title">Cultural Visits</h6>
									<p>Explore the diversities of Nepal while going through the trainings.</p>
								</div>
							</div>
							
						</div>
					</div>
				</section>
				<!-- section end-->
			
			</main>
			<!-- footer start-->
			<?php include 'footer.php';?>
			<!-- footer end-->
		</div>
		<!-- libs-->
		<script src="../../ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<!-- scripts-->
		<script src="js/common.js"></script>
		
	</body>
</html>
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
						<div class="screen__item"><a class="screen__link" href="membership.html">Membership</a></div>
						<div class="screen__item"><a class="screen__link" href="events.html">Events</a></div>
						<div class="screen__item"><a class="screen__link" href="event-details.html">Event Details</a></div>
						<div class="screen__item"><a class="screen__link" href="tickets.html">Tickets</a></div>
						<div class="screen__item"><a class="screen__link" href="foundation.html">Foundation</a></div>
						<div class="screen__item item--active"><a class="screen__link" href="education.html">Education</a></div>
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
						<source srcset="img/img/101.jpg" media="(min-width: 992px)"><img class="img--bg" src="img/img/101.jpg" alt="img">
					</picture>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Our</span>
										<h1 class="promo-primary__title"><span>latest</span> <span>activities</span></h1>
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
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 offset-lg-1 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 bottom-70">
								<div class="education-item">
									<div class="row flex-column-reverse flex-md-row">
										<div class="col-md-6">
											<h5 class="education-item__title"><a href="#">Advanced Project Cycle Management Workshop</a></h5>
											<p>Good management can't save a bad project, but poor management can easily ruin a good one. This course took project management to the next level, using real life humanitarian and development projects to dive deeper into what tools, processes, and strategies are needed to ensure the right project is delivered to the right population, on time and on budget. Over the 3-day training, the participants critically analyzed case study documents from complex projects in the sector and work through the project cycle to understand how different tools can be used in practical terms at each stage.
</p>
										</div>
										<div class="col-md-6">
											<div class="education-item__img"><img class="img--bg" src="img/img/111.jpg" alt="img">
												<div class="education-item__date"><span>May</span><span>2022</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 bottom-70">
								<div class="education-item">
									<div class="row flex-column-reverse flex-md-row">
										<div class="col-md-6">
											<h5 class="education-item__title"><a href="#">Management and Leadership Training</a></h5>
											<p>This training was designed to improve the leadership skills of humanitarians who are working in management or coordination roles. It drew on the latest research by authorities such as ministries, into the skills required to be an effective leader. Sessions combined theory with practical exercises, providing opportunities for participants to develop their skills in a controlled environment. An on-going case study was used throughout the course enabling trainees to further practice their leadership skills in realistic situations, while considering the challenges faced by senior team members in a humanitarian emergency. The training also offered participants the opportunity to reflect on their personal leadership skills and outline a personal development plan created with supportive peer coaching.</p>
										</div>
										<div class="col-md-6">
											<div class="education-item__img"><img class="img--bg" src="img/img/103.jpg" alt="img">
												<div class="education-item__date"><span>April</span><span>2022</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 bottom-70">
								<div class="education-item">
									<div class="row flex-column-reverse flex-md-row">
										<div class="col-md-6">
											<h5 class="education-item__title"><a href="#">Train the trainer (ToT) workshop on “Do No Harm”</a></h5>
											<p>CGGAP conducted 2-day-workshop on “Do No Harm,” facilitated by our Executive Board Member Avinash Mishra. The Do no harm-Training of Trainers consisted of two parts - the training itself and a practical application. After a session on the first evening, the training started with a full-day Do no harm-Introductory Workshop which served as model. The training design was reflected and practiced by the participants in small groups. The revised "Do no harm-Training of Trainers Manual" helped participants develop their own adaptations and new ways of teaching Do no harm.</p>
										</div>
										<div class="col-md-6">
											<div class="education-item__img"><img class="img--bg" src="img/img/101.jpg" alt="img">
												<div class="education-item__date"><span>MARCH</span><span>2022</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 bottom-70">
								<div class="education-item">
									<div class="row flex-column-reverse flex-md-row">
										<div class="col-md-6">
											<h5 class="education-item__title"><a href="#">Schools as Centers of Care and Support</a></h5>
											<p>SCCS was initially implemented in three provinces in Nepal, which primarily focused on inclusive education. From November 2021 to February 2022, CGGAP piloted the SCCS programme in collaboration with the local governments of 5 districts and local NGOs. The positive post-pilot evaluation resulted in the SCCS model being adopted as the foundation for the regional Care and Support for Teaching and Learning (CSTL) Programme. CSTL offers a comprehensive response to the impact of poverty and HIV & AIDS and other health-related barriers facing learners in the region.</p>
										</div>
										<div class="col-md-6">
											<div class="education-item__img"><img class="img--bg" src="img/img/109.jpg" alt="img">
												<div class="education-item__date"><span>FEB</span><span>2022</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 bottom-70">
								<div class="education-item">
									<div class="row flex-column-reverse flex-md-row">
										<div class="col-md-6">
											<h5 class="education-item__title"><a href="#">Capacity building workshops</a></h5>
											<p>CGGAP organized a series of capacity building workshops to train local authorities in Nepal on peacebuilding, dialogue, reconciliation and confidence building measures. These workshops took place in three different states in Nepal, the first in Kathmandu from 22 – 24 February 2022, the second in Pokhara from 8 – 10 March 2022, and the third training was held in Biratnagar from 24 – 26 March 2022. The participants included local administrators; police; academia; civil society organizations (CSOs); students; and Humanitarian Aid Commission (HAC) officials that work within the thematic areas of Conflict Prevention, Conflict Management, and Mediation.</p>
										</div>
										<div class="col-md-6">
											<div class="education-item__img"><img class="img--bg" src="img/img/102.jpg" alt="img">
												<div class="education-item__date"><span>FEB</span><span>2022</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<ul class="pagination justify-content-center">
									<li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
									</li>
									<li class="pagination__item pagination__item--active"><span>1</span></li>
									<li class="pagination__item"><span>2</span></li>
									<li class="pagination__item"><span>3</span></li>
									<li class="pagination__item pagination__item--next"><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
									</li>
								</ul>
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
<!DOCTYPE HTML>
<html>
	<head>
    @include('partials.brochure._head')
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

<<<<<<< HEAD
<<<<<<< HEAD
        <title>Laravel</title>
=======
        <title>{{ config('app.name') }}</title>
>>>>>>> 233664d... Add db seed for roles
=======
	<div id="page">
    	@include('partials.brochure._navigation')
    
		<section id="home" class="video-hero" style="height: 700px; background-image: url(/brochure/images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> 
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Intuitive tools to ease renting</h2>
								<p>for landlords, tenants and realtors.</p>
								<p><a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-custom">Register</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
>>>>>>> ed52edb... Add listings controller, listings views, new styling

		<div class="colorlib-featured">
			<div class="row animate-box">
				<div class="featured-wrap">
					<div class="owl-carousel">
						<div class="item">
							<div class="col-md-8 col-md-offset-2">
								<div class="featured-entry">
									<img class="img-responsive" src="/brochure/images/dashboard_full_1.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2">
								<div class="featured-entry">
									<img class="img-responsive" src="/brochure/images/dashboard_full_2.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2">
								<div class="featured-entry">
									<img class="img-responsive" src="/brochure/images/dashboard_full_3.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-services colorlib-bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-browser"></i>
							</span>
							<div class="desc">
								<h2>Find a Location / Manage all your Locations</h2>
								<h3>
									Landlords and realtors can input all their properties, while tenants can find a location best suited for their needs. 
								</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-download"></i>
							</span>
							<div class="desc">
								<h2>
									Payment Management
								</h2>
								<h3>
									Let {{ config('app.name') }} take care of payments, including damage and security deposits. Get paid on time, everytime.
								</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-layers"></i>
							</span>
							<div class="desc">
								<h2>Automation Tools </h2>
								<h3>
									Seamless integration to smart locks, allowing landlords, contractors and other people to enter the premise, safely and easily.
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>We care about renting</h2>
						<h3 style="font-size: 20px; font-weight: normal;">And we want to make it easy for everyone. Our broad feature set for landlords, tenants, realtors and contracts 
							are sure to help you excel in your domain.
						</h3>
					</div>
				</div>
				{{-- <div class="row">
					<div class="col-md-12 animate-box">
						<span class="play"><a href="https://vimeo.com/channels/staffpicks/93951774" class="pulse popup-vimeo"><i class="icon-play3"></i></a></span>
					</div>
				</div> --}}
			</div>
		</div>

		<div class="colorlib-work-featured colorlib-bg-white">
			<div class="container">
				<div class="row mobile-wrap">
					<div class="col-md-5 animate-box">
						<div class="mobile-img" style="background-image: url(/brochure/images/mobile-2.jpg);"></div>
					</div>
					<div class="col-md-7 animate-box">
						<div class="desc">
							<h2>For Landlords</h2>
							<div class="features">
								<span class="icon"><i class="icon-lightbulb"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-circle-compass"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-beaker"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								</div>
							</div>
							<p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
				<div class="row mobile-wrap">
					<div class="col-md-5 col-md-push-7 animate-box">
						<div class="mobile-img" style="background-image: url(/brochure/images/mobile-1.jpg);"></div>
					</div>
					<div class="col-md-7 col-md-pull-5 animate-box">
						<div class="desc">
							<h2>For Tenants</h2>
							<div class="features">
								<span class="icon"><i class="icon-lightbulb"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-circle-compass"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-beaker"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								</div>
							</div>
							<p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>

				<div class="row mobile-wrap">
						<div class="col-md-5 animate-box">
							<div class="mobile-img" style="background-image: url(/brochure/images/mobile-2.jpg);"></div>
						</div>
						<div class="col-md-7 animate-box">
							<div class="desc">
								<h2>For Realtors</h2>
								<div class="features">
									<span class="icon"><i class="icon-lightbulb"></i></span>
									<div class="f-desc">
										<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									</div>
								</div>
								<div class="features">
									<span class="icon"><i class="icon-circle-compass"></i></span>
									<div class="f-desc">
										<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
									</div>
								</div>
								<div class="features">
									<span class="icon"><i class="icon-beaker"></i></span>
									<div class="f-desc">
										<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									</div>
								</div>
								<p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>

				<div class="row mobile-wrap">
						<div class="col-md-5 col-md-push-7 animate-box">
							<div class="mobile-img" style="background-image: url(/brochure/images/mobile-1.jpg);"></div>
						</div>
						<div class="col-md-7 col-md-pull-5 animate-box">
							<div class="desc">
								<h2>For Contractors</h2>
								<div class="features">
									<span class="icon"><i class="icon-lightbulb"></i></span>
									<div class="f-desc">
										<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									</div>
								</div>
								<div class="features">
									<span class="icon"><i class="icon-circle-compass"></i></span>
									<div class="f-desc">
										<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
									</div>
								</div>
								<div class="features">
									<span class="icon"><i class="icon-beaker"></i></span>
									<div class="f-desc">
										<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									</div>
								</div>
								<p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>

			</div>
		</div>

	
	</div>

	@include('partials.brochure._footer')
	
	@include('partials.brochure._scripts')

	</body>
</html>


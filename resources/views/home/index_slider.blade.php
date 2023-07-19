<!DOCTYPE html>
<html lang="en">

<!-- /main/index2.html , Tue, 20 Jun 2023 21:36:21 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/splide.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/slimselect.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/plyr.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/photoswipe.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/default-skin.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ URL::asset('assets/icon/favicon-32x32.png') }}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{ URL::asset('assets/icon/favicon-32x32.png') }}">

	<meta name="description" content="Movie partners Template">
	<meta name="keywords" content="">
	<meta name="author" content="Maablabs Technologies Ltd">
    <title>{{ $system_name ?? config('app.name') }}</title>

</head>
<body>
    
    @include('home.layout.particles.header')

	<!-- mobile menu -->
	<div class="menu">
		<!-- menu search -->
		<form action="#" class="menu__search">
			<input type="text" placeholder="Search">
			<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
		</form>
		<!-- end menu search -->

		<!-- menu nav -->
		<ul class="menu__nav">
			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="index.html">Home style 1</a></li>
					<li><a href="index2.html">Home style 2</a></li>
				</ul>
			</li>
			<!-- end dropdown -->

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="catalog1.html">Catalog Grid</a></li>
					<li><a href="catalog2.html">Catalog List</a></li>
					<li><a href="details1.html">Details Movie</a></li>
					<li><a href="details2.html">Details TV Series</a></li>
				</ul>
			</li>
			<!-- end dropdown -->

			<li class="menu__nav-item">
				<a href="pricing.html" class="menu__nav-link">Pricing plans</a>
			</li>

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="about.html">About us</a></li>
					<li><a href="faq.html">Help center</a></li>
					<li><a href="profile.html">Profile</a></li>
					<li><a href="actor.html">Actor</a></li>
					<li><a href="contacts.html">Contacts</a></li>
					<li><a href="privacy.html">Privacy policy</a></li>
				</ul>
			</li>
			<!-- end dropdown -->

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link menu__nav-link--more" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z"/></svg>
				</a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="signin.html">Sign In</a></li>
					<li><a href="signup.html">Sign Up</a></li>
					<li><a href="forgot.html">Forgot password</a></li>
					<li><a href="404.html">404 Page</a></li>
				</ul>
			</li>
			<!-- end dropdown -->
		</ul>
		<!-- end menu nav -->
	</div>
	<!-- end mobile menu -->

	<!-- home -->
	<section class="home">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="hero splide splide--hero">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
						</div>
						
						<div class="splide__track">
							<ul class="splide__list">
								
								@foreach ($featured_movies as $featured_movie)

									<li class="splide__slide">
										<div class="hero__slide" data-bg="{{ $featured_movie->poster_path != 'default' ? URL::asset($featured_movie->poster_path) : URL::asset('assets/img/covers/13.png') }}">
											<div class="hero__content">
												<h2 class="hero__title">{{ $featured_movie->title }} <sub>{{ $featured_movie->rating }}</sub></h2>
												
												<style type="text/css">
													p {
                                               display: -webkit-box;
                                              -webkit-line-clamp: 5;
                                              -webkit-box-orient: vertical;
                                               overflow: hidden;
                                            }
											    </style>		
												<p class="hero__text">{{ $featured_movie->synopsis }}</p>
                                                
                                                
												<p class="hero__category">
                                                    @if($featured_movie->categories != null)
													@foreach ($featured_movie->categories as $category)

														<a href="#">{{ $category->name }},</a>
													
													@endforeach
													@endif
												</p>
												<div class="hero__actions">
													<a href="details.html" class="hero__btn">
														<span>Watch now</span>
													</a>
												</div>
											</div>
										</div>
									</li>
								
								@endforeach

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Recently Updated</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">

							<li class="nav-item" role="presentation">
								<button id="1-tab" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="false">Movies</button>
							</li>

							<li class="nav-item" role="presentation">
								<button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Series</button>
							</li>

						</ul>
						<!-- end content tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
					<div class="row">
						
						@foreach ($recent_movies as $movie)

							<!-- item -->
							<div class="col-6 col-sm-12 col-lg-6 col-xxl-4">
								<div class="item item--list">
									<a href="details1.html" class="item__cover">
										<img src="{{ $movie->poster_path == 'default' ? URL::asset('assets/img/covers/13.png') : URL::asset($movie->poster_path) }}" alt="{{ $movie->title }}">
										<span class="item__play">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										</span>
									</a>

									<div class="item__content">
										<h3 class="item__title"><a href="details1.html">{{ $movie->title }}</a></h3>
										<span class="item__category">
										@if($movie->categories != null)
											@foreach ($movie->categories as $category)
												<a href="#">{{ $category->name }}</a>
											@endforeach
									    @endif		

										</span>
										<div class="item__wrap">
											<span class="item__rate">{{ $movie->rating }}</span>

											<ul class="item__list">
												<li>HD</li>
												<li>16+</li>
											</ul>
										</div>

										<div class="item__description">
											<p>{{ $movie->synopsis }}</p>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->
						
						@endforeach

					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
					<div class="row">

						@foreach ($recent_series as $series)
							<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
								<div class="item">
									<a href="details1.html" class="item__cover">
										<img src="{{ $series->poster_path == 'default' ? URL::asset('assets/img/covers/13.png') : URL::asset($series->poster_path) }}" alt="{{ $series->title }}">
										<span class="item__play">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										</span>
									</a>
									<div class="item__content">
										<h3 class="item__title"><a href="details1.html">{{ $series->title }}</a></h3>
										<span class="item__category">
										@if($series->categories != null)
											@foreach ($series->categories as $category)
												<a href="#">{{ $category->name }}</a>
											@endforeach
                                       @endif
										</span>
										<span class="item__rate">{{ $series->rating }}</span>
									</div>
								</div>
							</div>
						@endforeach

					</div>
				</div>

			</div>
			<!-- end content tabs -->

			<div class="row">
				<div class="col-12">
					<a href="catalog1.html" class="section__btn"><span>to catalog</span></a>
				</div>
			</div>
		</div>
	</section>
	<!-- end content -->

	<!-- now watching -->
	<section class="section section--dark">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--carousel">Now Watching</h2>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="section__carousel splide splide--content">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="{{ URL::asset('assets/img/covers/7.png') }}" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
											<span class="item__rate">8.4</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="{{ URL::asset('assets/img/covers/8.png') }}" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">Undercurrents</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
											</span>
											<span class="item__rate">7.1</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="{{ URL::asset('assets/img/covers/9.png') }}" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">Tales from the Underworld</a></h3>
											<span class="item__category">
												<a href="#">Romance</a>
												<a href="#">Drama</a>
												<a href="#">Music</a>
											</span>
											<span class="item__rate">6.3</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="{{ URL::asset('assets/img/covers/10.png') }}" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">Savage Beauty</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
												<a href="#">Drama</a>
											</span>
											<span class="item__rate">7.9</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="{{ URL::asset('assets/img/covers/11.png') }}" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">The Unseen Journey</a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
											<span class="item__rate">8.4</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="{{ URL::asset('assets/img/covers/12.png') }}" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">Endless Horizon</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
											</span>
											<span class="item__rate">7.1</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end carousel -->
			</div>
		</div>
	</section>
	<!-- end now watching -->

	<!-- pricing plans -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">Select Your Plan</h2>
				</div>
				<!-- end section title -->
			</div>

			<div class="row">
				<!-- price -->
				<div class="col-12 col-md-6 col-lg-4 order-md-2 order-lg-1">
					<div class="plan">
						<h3 class="plan__title">Starter</h3>
						<span class="plan__price">Free</span>
						<ul class="plan__list">
							<li>7 days</li>
							<li>720p Resolution</li>
							<li>Limited Availability</li>
							<li>Desktop Only</li>
							<li>Limited Support</li>
						</ul>
						<a href="signin.html" class="plan__btn"><span>Register</span></a>
					</div>
				</div>
				<!-- end price -->

				<!-- price -->
				<div class="col-12 col-lg-4 order-md-1 order-lg-2">
					<div class="plan plan--premium">
						<h3 class="plan__title">Premium</h3>
						<span class="plan__price">$19.99</span>
						<ul class="plan__list">
							<li>1 Month</li>
							<li>Full HD</li>
							<li>Lifetime Availability</li>
							<li>TV & Desktop</li>
							<li>24/7 Support</li>
						</ul>
						<button type="button" data-bs-toggle="modal" class="plan__btn" data-bs-target="#plan-modal"><span>Choose plan</span></button>
					</div>
				</div>
				<!-- end price -->

				<!-- price -->
				<div class="col-12 col-md-6 col-lg-4 order-md-3 order-lg-3">
					<div class="plan">
						<h3 class="plan__title">Cinematic</h3>
						<span class="plan__price">$39.99</span>
						<ul class="plan__list">
							<li>2 Months</li>
							<li>Ultra HD</li>
							<li>Lifetime Availability</li>
							<li>Any Device</li>
							<li>24/7 Support</li>
						</ul>
						<button type="button" data-bs-toggle="modal" class="plan__btn" data-bs-target="#plan-modal"><span>Choose plan</span></button>
					</div>
				</div>
				<!-- end price -->
			</div>
		</div>
	</section>
	<!-- end pricing plans -->

	<!-- partners -->
	<section class="section section--bt">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12 col-xl-10">
					<h2 class="section__title">Our Partners</h2>

					<p class="section__text">We strive for long-term cooperation with our partners, and our team is always ready to meet and consider new opportunities for mutual benefits. If you would like to become our partner, we are always open to new offers and look forward to hearing from you. <a href="contacts.html">Become a partner</a></p>
				</div>
				<!-- end section text -->
			</div>

			<div class="row">
				<div class="col-12">
					<div class="partners">
						<a href="#" class="partners__item">
							<img src="{{ URL::asset('assets/img/partners/themeforest-light-background.png') }}" alt="">
						</a>

						<a href="#" class="partners__item">
							<img src="{{ URL::asset('assets/img/partners/audiojungle-light-background.png') }}" alt="">
						</a>

						<a href="#" class="partners__item">
							<img src="{{ URL::asset('assets/img/partners/codecanyon-light-background.png') }}" alt="">
						</a>

						<a href="#" class="partners__item">
							<img src="{{ URL::asset('assets/img/partners/photodune-light-background.png') }}" alt="">
						</a>

						<a href="#" class="partners__item partners__item--prelast">
							<img src="{{ URL::asset('assets/img/partners/activeden-light-background.png') }}" alt="">
						</a>

						<a href="#" class="partners__item partners__item--last">
							<img src="{{ URL::asset('assets/img/partners/3docean-light-background.png') }}" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end partners -->

    @include('home.layout.particles.footer')

	<!-- plan modal -->
	<div class="modal fade" id="plan-modal" tabindex="-1" aria-labelledby="plan-modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<button class="modal__close" type="button" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>

					<form action="#" class="modal__form">
						<h4 class="modal__title">Select plan</h4>

						<div class="sign__group">
							<label for="fullname" class="sign__label">Name</label>
							<input id="fullname" type="text" name="name" class="sign__input" placeholder="Full name">
						</div>

						<div class="sign__group">
							<label for="email" class="sign__label">Email</label>
							<input id="email" type="text" name="email" class="sign__input" placeholder="example@domain.com">
						</div>

						<div class="sign__group">
							<label class="sign__label" for="value">Choose plan:</label>
							<select class="sign__select" name="value" id="value">
								<option value="20">Premium - $19.99</option>
								<option value="40">Cinematic - $39.99</option>
							</select>

							<span class="sign__text">You can spend money from your account on the renewal of the connected packages, or to order cars on our website.</span>
						</div>

						<div class="sign__group">
							<label class="sign__label">Payment method:</label>

							<ul class="sign__radio">
								<li>
									<input id="type1" type="radio" name="type" checked="">
									<label for="type1">Visa</label>
								</li>
								<li>
									<input id="type2" type="radio" name="type">
									<label for="type2">Mastercard</label>
								</li>
								<li>
									<input id="type3" type="radio" name="type">
									<label for="type3">Paypal</label>
								</li>
							</ul>
						</div>

						<button type="button" class="sign__btn sign__btn--modal">
							<span>Proceed</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end plan modal -->

	<!-- JS -->
	<script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/splide.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/smooth-scrollbar.js') }}"></script>
	<script src="{{ URL::asset('assets/js/slimselect.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/plyr.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/photoswipe.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/photoswipe-ui-default.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>

<!-- /main/index2.html , Tue, 20 Jun 2023 21:36:36 GMT -->
</html>

<!DOCTYPE html>
<html lang="en">

<!-- , Tue, 20 Jun 2023 21:35:47 GMT -->
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
	<title>{{ $system_name ?? config('app.name') }} - {{$movie->title}}</title>

</head>
<body>
	<!-- header -->
	@include('home.layout.particles.header')
	<!-- end header -->

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

	<!-- details -->
	<section class="section section--details">
		<!-- details background -->
		<div class="section__details-bg" data-bg="{{ $movie->poster_path == 'default' ? URL::asset('assets/img/bg/details_bg.jpg') : URL::assets($movie->poster_path) }}"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="section__title section__title--head">{{ $movie->title }}</h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="item item--details">
						<!-- card cover -->
						<div class="item__cover">
							<img src="{{ $movie->poster_path == 'default' ? URL::asset('assets/img/covers/13.png') : URL::asset($movie->poster_path) }}" alt="">
						</div>
						<!-- end card cover -->

						<!-- card content -->
						<div class="item__content">
							<div class="item__wrap">
								<span class="item__rate">{{ $movie->rating }}</span>

								<ul class="item__list">
									<li>{{ $movie->videoQuality->name }}</li>
									<li>{{ $movie->pg_rate }}</li>
								</ul>
							</div>

							<ul class="item__meta">
								<li><span>Genre:</span> @foreach ($movie->genres as $genre) <a href="#">{{ $genre }}</a> @endforeach
								<li><span>Running time:</span> {{ $movie->running_time }}</li>
								<li><span>Country:</span> <a href="#">{{ $movie->country }}</a></li>
								<li><span>Premiere:</span> {{  $movie->release_date }}</li>
							</ul>

							<ul class="item__meta item__meta--second">
								<li><span>Director:</span> <a href="actor.html">Louis Leterrier</a></li>
								<li><span>Actors:</span> <a href="actor.html">Son Gun</a> <a href="actor.html">Michelle Rodriguez</a> <a href="actor.html">Jordana Brewster</a> <a href="actor.html">Tyreese Gibson</a> <a href="actor.html">Charlize Theron</a></li>
							</ul>
						</div>

						<div class="item__description item__description--details">
							{{ $movie->synopsis }}	
						</div>
						<!-- end card content -->
					</div>
				</div>
				<!-- end content -->

				<!-- player -->
				<div class="col-12 col-xl-6">
					<video controls crossorigin playsinline poster="../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
						<!-- Video files -->
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">

						<!-- Caption files -->
						<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
						<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
					</video>

					@if ($movie->is_serie == 1)
						<div class="section__item-filter">
							<select class="section__item-select" name="season" id="filter__season">
								<option value="0">Season 1</option>
								<option value="1">Season 2</option>
								<option value="2">Season 3</option>
								<option value="3">Season 4</option>
								<option value="4">Season 5</option>
							</select>

							<select class="section__item-select" name="series" id="filter__series">
								<option value="0">Series 1</option>
								<option value="1">Series 2</option>
								<option value="2">Series 3</option>
								<option value="3">Series 4</option>
								<option value="4">Series 5</option>
								<option value="5">Series 6</option>
								<option value="6">Series 7</option>
								<option value="7">Series 8</option>
								<option value="8">Series 9</option>
								<option value="9">Series 10</option>
								<option value="10">Series 11</option>
								<option value="11">Series 12</option>
							</select>

							<select class="section__item-select" name="sync" id="filter__sync">
								<option value="0">Eng.Original</option>
								<option value="1">NewStudio</option>
								<option value="2">LostFilm</option>
								<option value="3">MTL</option>
							</select>
						</div>
					@endif
				</div>
				<!-- end player -->
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Discover</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<button id="1-tab" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="false">Reviews</button>
							</li>
							<li class="nav-item" role="presentation">
								<button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Photos</button>
							</li>
						</ul>
						<!-- end content tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8">
					<!-- content tabs -->
					<div class="tab-content">

						<div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
							<div class="row">
								<!-- reviews -->
								<div class="col-12">
									<div class="reviews">
										<ul class="reviews__list">
											@foreach ($movie->comments as $comment_details)
												<li class="reviews__item">
													<div class="reviews__autor">
														<img class="reviews__avatar" src="{{ URL::asset('assets/img/user.svg') }}" alt="">
														<span class="reviews__name">{{ $comment_details->comment }}</span>
														<span class="reviews__time">24.08.2023, by Tess Harper</span>

														<span class="reviews__rating"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,10.1c0.1-0.5-0.3-1.1-0.8-1.1l-5.7-0.8L12.9,3c-0.1-0.2-0.2-0.3-0.4-0.4C12,2.3,11.4,2.5,11.1,3L8.6,8.2L2.9,9C2.6,9,2.4,9.1,2.3,9.3c-0.4,0.4-0.4,1,0,1.4l4.1,4l-1,5.7c0,0.2,0,0.4,0.1,0.6c0.3,0.5,0.9,0.7,1.4,0.4l5.1-2.7l5.1,2.7c0.1,0.1,0.3,0.1,0.5,0.1v0c0.1,0,0.1,0,0.2,0c0.5-0.1,0.9-0.6,0.8-1.2l-1-5.7l4.1-4C21.9,10.5,22,10.3,22,10.1z"></path></svg>8.0</span>
													</div>
													<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
												</li>
											@endforeach
										</ul>

										<form action="#" class="sign__form sign__form--comments">
											<div class="row">
												<div class="col-12 col-md-6">
													<div class="sign__group">
														<input type="text" class="sign__input" placeholder="Title">
													</div>
												</div>

												<div class="col-12 col-md-6">
													<div class="sign__group">
														<select class="sign__select" name="rating" id="rating">
															<option value="0">Rating</option>
															<option value="1">1 star</option>
															<option value="2">2 stars</option>
															<option value="3">3 stars</option>
															<option value="4">4 stars</option>
															<option value="5">5 stars</option>
															<option value="6">6 stars</option>
															<option value="7">7 stars</option>
															<option value="8">8 stars</option>
															<option value="9">9 stars</option>
															<option value="10">10 stars</option>
														</select>
													</div>
												</div>

												<div class="col-12">
													<div class="sign__group">
														<textarea class="sign__textarea" placeholder="Write a review"></textarea>
													</div>
												</div>

												<div class="col-12">
													<button type="button" class="sign__btn sign__btn--small"><span>Send</span></button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- end reviews -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
							<!-- project gallery -->
							<div class="gallery" itemscope>
								<div class="row row--grid">

									@foreach ($movie->moviePhotos as $photo)
										<!-- gallery item -->
										<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
											<a href="{{ URL::asset($photo->url) }}" itemprop="contentUrl" data-size="1920x1280">
												<img src="{{ URL::asset($photo->url) }}" itemprop="thumbnail" alt="{{ $movie->title }}" />
											</a>
											<figcaption itemprop="caption description">{{ $movie->title }}</figcaption>
										</figure>
										<!-- end gallery item -->
									@endforeach

								</div>
							</div>
							<!-- end project gallery -->
						</div>
					</div>
					<!-- end content tabs -->
				</div>

				<!-- sidebar -->
				<div class="col-12 col-lg-4">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title section__title--sidebar">You may also like</h2>
						</div>
						<!-- end section title -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="{{ URL::asset('assets/img/covers/7.png') }}" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Lost Key</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="{{ URL::asset('assets/img/covers/8.png') }}" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Red Sky at Night</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="{{ URL::asset('assets/img/covers/9.png') }}" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Forgotten Road</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="{{ URL::asset('assets/img/covers/10.png') }}" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Dark Horizons</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="{{ URL::asset('assets/img/covers/11.png') }}" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Echoes of Yesterday</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="{{ URL::asset('assets/img/covers/12.png') }}" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Into the Unknown</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->
					</div>
				</div>
				<!-- end sidebar -->
			</div>
		</div>
	</section>
	<!-- end content -->

	<!-- footer -->
	@include('home.layout.particles.footer')
	<!-- end footer -->

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

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

<!-- , Tue, 20 Jun 2023 21:36:21 GMT -->
</html>

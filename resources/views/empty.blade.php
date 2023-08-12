<!DOCTYPE html>
<html lang="en">

<!-- /main/privacy.html , Tue, 20 Jun 2023 21:36:48 GMT -->
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

	<meta name="description" content="{{ $page->short_desc }}">
	<meta name="keywords" content="">
	<meta name="author" content="Maablabs Technologies Ltd">
	<title>{$page->title}</title>

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

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/bg/section__bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">Privacy Policy</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="index.html">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Privacy policy</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- privacy -->
	<section class="section">
		<div class="container">
			<div class="row">
                {! $page->content !}
			</div>
		</div>
	</section>
	<!-- end privacy -->

	@include('home.layout.particles.footer')

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

<!-- /main/privacy.html , Tue, 20 Jun 2023 21:36:48 GMT -->
</html>
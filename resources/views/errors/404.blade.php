<!DOCTYPE html>
<html lang="en">

<!-- /main/404.html , Tue, 20 Jun 2023 21:36:48 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slimselect.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plyr.css') }}">
	<link rel="stylesheet" href="{{ asset('css/photoswipe.css') }}">
	<link rel="stylesheet" href="{{ asset('css/default-skin.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('icon/favicon-32x32.png') }}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{ asset('icon/favicon-32x32.png') }}">

	<meta name="description" content="Movie partners Template">
	<meta name="keywords" content="">
	<meta name="author" content="Maablabs Technologies Ltd">
	<title>{{config('app.name')}}</title>

</head>
<body>
	<!-- page 404 -->
	<div class="page-404 section--bg" data-bg="{{ asset('img/bg/section__bg.jpg') }}">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="page-404__wrap">
						<div class="page-404__content">
							<h1 class="page-404__title">404</h1>
							<p class="page-404__text">The page you are looking for is not available!</p>
							<a href="{{ route('home') }}" class="page-404__btn"><span>Go back</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end page 404 -->

	<!-- JS -->
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/splide.min.js') }}"></script>
	<script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
	<script src="{{ asset('js/slimselect.min.js') }}"></script>
	<script src="{{ asset('js/plyr.min.js') }}"></script>
	<script src="{{ asset('js/photoswipe.min.js') }}"></script>
	<script src="{{ asset('js/photoswipe-ui-default.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>

<!-- /main/404.html , Tue, 20 Jun 2023 21:36:48 GMT -->
</html>

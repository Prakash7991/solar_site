<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<title>@yield('seo_title', 'Sky Solar Renewable Energy Solutions | Solar Panel Installation')</title>

	<meta name="description"
		content="@yield('seo_description', 'Sky Solar Renewable Energy Solutions provides residential, commercial and rooftop solar panel installation, maintenance and renewable energy solutions.')">

	<meta name="robots" content="index, follow">

	<link rel="canonical" href="{{ url()->current() }}">

	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Sky Solar Renewable Energy Solutions">
	<meta property="og:title" content="@yield('seo_title', 'Sky Solar Renewable Energy Solutions')">
	<meta property="og:description" content="@yield('seo_description', 'Professional rooftop and commercial solar energy solutions.')">
	<meta property="og:url" content="{{ url()->current() }}">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}"  rel="stylesheet">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}"  rel="stylesheet">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}"   rel="stylesheet">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}"   rel="stylesheet">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/animated-text.css') }}"  rel="stylesheet">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}"  rel="stylesheet">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}"  rel="stylesheet">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-default.css') }}"   rel="stylesheet">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}"  rel="stylesheet">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}"  rel="stylesheet">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/venobox/venobox.css') }}"  rel="stylesheet">

	<!-- bootstrap icons -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-icons.css') }}"  rel="stylesheet">

	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}"  rel="stylesheet">

	<!-- modernizr js -->
	<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

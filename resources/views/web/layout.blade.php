<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
		<meta charset="utf-8">
	<title></title>

	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Wokiee - Responsive HTML5 Template">
	<meta name="author" content="wokiee">
	<link rel="shortcut icon" href="favicon.ico">
	

	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" type="text/css" href="{{url('/web/css/app.theme.7.css')}}">
<script src="{{asset('/web/js/app.js')}}"></script>

<!-- BASE CSS -->

<!-- SPECIFIC CSS -->
<link href="{{url('web/css/theme_css/home_1.css')}}" rel="stylesheet">
<!-- <link href="http://127.0.0.1:8000/web/css/theme_css/contact.css" rel="stylesheet"> -->
<!-- <link href="http://127.0.0.1:8000/web/css/theme_css/checkout.css" rel="stylesheet"> -->
<!-- YOUR CUSTOM CSS -->
<link href="{{url('web/css/theme_css/custom.css')}}" rel="stylesheet">
<link href="{{url('web/css/theme_css/listing.css')}}" rel="stylesheet">



	<link rel="stylesheet" href="{{url('css/style.css')}}">
	<script
    src="{{asset('https://code.jquery.com/jquery-3.3.1.js')}}"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<script> 
$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script> 
<link rel="stylesheet" href="{{url('https://pro.fontawesome.com/releases/v5.10.0/css/all.css')}}" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link  href="{{url('https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css')}}" rel="stylesheet">

</head>


<body>
<style>
		#custom-product-item .slick-arrow {
			position: absolute;
			top: 50%;
			z-index: 2;
			cursor: pointer;
			font-size: 0;
			line-height: 0;
			background: none;
			border: none;
			width: 38px;
			height: 38px;
			background: #f7f8fa;
			color: #191919;
			font-weight: 500;
			border-radius: 50%;
			transition: all 0.2s linear;
			transform: translate(0%, -50%)
		}
		#custom-product-item{
			opacity: 0;
			transition: opacity 0.2s linear;
		}
		#custom-product-item.tt-show{
			opacity: 1;
		}

		#custom-product-item .slick-arrow:hover {
			background: #2879fe;
			color: #ffffff;
		}

		#custom-product-item .slick-arrow:before {
			font-family: "wokiee";
			font-size: 20px;
			line-height: 1;
		}
		#custom-product-item .slick-prev{
			left: 10px;
		}
		#custom-product-item .slick-prev:before {
			content: "\e90d";
		}
		#custom-product-item .slick-next {
			right: 10px;
		}
		#custom-product-item .slick-next:before {
			content: "\e90e";
		}
		#smallGallery .slick-arrow.slick-disabled,
		#custom-product-item .slick-arrow.slick-disabled{
			opacity: 0;
			pointer-events: none;
		}
	</style>

@include('web.headers.headerNine')
@yield('content')
@include('inc.footer')
    <!-- Optional JavaScript; choose one of the two! -->
	<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
	
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="external/jquery/jquery.min.js"><\/script>')</script>
<script defer src="{{asset('js/bundle.js')}}"></script>


<a href="#" class="tt-back-to-top" id="js-back-to-top">BACK TO TOP</a>

@include('web.common.modal1')
@include('web.common.scripts')

    <!-- Option 2: Separate Popper and Bootstrap JS -->
	<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js')}}"></script>
    <script src="{{asset('separate-include/single-product/single-product.js')}}"></script>
    <!-- <script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js')}}" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
     <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js')}}" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> --> s

</body>
</html>
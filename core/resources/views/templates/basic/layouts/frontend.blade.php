<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.90, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')

        <link rel="stylesheet" href="{{asset('assets/global/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>    <link rel="stylesheet" href="{{asset('assets/global/css/line-awesome.min.css')}}">

    <!-- bootstrap 4  -->
    <!--<link rel="stylesheet" href="{{ asset('assets/global/css/bootstrap.min.css') }}">-->
    <!-- image and videos view on page plugin -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/animate.min.css') }}">
    <!-- custom select css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/nice-select.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/slick.css') }}">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/main.css') }}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap-fileinput.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/custom.css')}}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/color.php?color='.$general->base_color)}}">

    @stack('style-lib')

    @stack('style')
    <!--<style>-->
    <!--    body{-->
    <!--        overflow-x:hidden;-->
    <!--        margin-right:0px;-->
    <!--        margin-left:0px;-->
    <!--        width:100%;-->
    <!--    }-->
    <!--</style>-->
</head>
<body>

@stack('fbComment')

<div class="preloader">
    <div class="preloader__inner">
        <div class="preloader__thumb">
            <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="imge" class="mt-3 loaderLogo">
            <img src="{{ asset($activeTemplateTrue.'/images/preloader-dice.png') }}" alt="image" class="loadercircle">
        </div>
    </div>
</div>

<div class="page-wrapper" id="main-scrollbar" data-scrollbar>
    <!-- header-section start  -->
    
		<div id="mySidenav" class="sidenav">
			<p class="navtitle">Navigation</p><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<hr>
			<a href="#" class="navmenuu"><i class="fas fa-home"></i>Home</a>
		</div>
		<div class="maindivnav">
			<div class="container-fuield">
				<div class="row">
					<div class="col-md-6 header-column">
						<div class="main">
							<div class="hamburger-menu-container"><span class="hamburger-menu" onclick="openNav()">&#9776;</span>
							<img src="{{ asset('assets/images/card.png') }}" alt="imge" class="card">
							<h1 class="page-title">Stake</h1>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 hidden-md hidden-sm">					
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 header-column">		
					    <div class="main">
    						<button onclick="location.href='https://myrealitygame.net/login'" type="button" class="btn btn-light btn-login">LOG IN</button>
    						<button onclick="location.href='https://myrealitygame.net/register'" type="button" class="btn btn-primary btn-signup">SIGN UP</button>
    					</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider">
			<div class="container-fuield">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
						    <img src="{{ asset('assets/images/banner2.jpg') }}" alt="imge" class="card" style="width:100%;background: rgba(0,0,0,.6);">
							<div class="carousel-caption">
								<h2 class="carouseltitle">Stake</h2>
								<p class="carouseltext">Fair online casino games</p>
							</div>
						</div>

						<div class="item">
						    <img src="{{ asset('assets/images/banner2.jpg') }}" alt="imge" class="card" style="width:100%;background: rgba(0,0,0,.6);">
							<div class="carousel-caption carousel-caption-coustom">
								<h2 class="carouseltitle">Test your luck</h2>
								<p class="carouseltext">Play our games and win big time!</p>
								<button type="button" class="btn btn-primary wantbtn">I WANT TO TRY</button>
							</div>
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right"></span>
					  <span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		
		<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		  document.getElementById("main").style.marginLeft = "250px";
		  document.getElementById("main").style.display="none";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		  document.getElementById("main").style.marginLeft= "0";
		  document.getElementById("main").style.display="block";
		}
		</script>
    <!--<header class="header">-->
    <!--    <div class="header__bottom">-->
    <!--        <div class="container">-->
    <!--            <nav class="navbar navbar-expand-xl p-0 align-items-center">-->
    <!--                <a class="site-logo site-title" href="{{ route('home') }}"><img-->
    <!--                        src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="site-logo"></a>-->
    <!--                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"-->
    <!--                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"-->
    <!--                        aria-expanded="false" aria-label="Toggle navigation">-->
    <!--                    <span class="menu-toggle"></span>-->
    <!--                </button>-->
    <!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
    <!--                    <ul class="navbar-nav main-menu m-auto">-->
    <!--                        <li><a href="{{route('home')}}">{{__('Home')}}</a></li>-->
    <!--                        @foreach($pages as $k => $data)-->
    <!--                            <li><a href="{{route('pages',[$data->slug])}}">{{__($data->name)}}</a></li>-->
    <!--                        @endforeach-->

    <!--                        <li><a href="{{ route('contact') }}">@lang('Contact')</a></li>-->
    <!--                    </ul>-->
    <!--                    <div class="nav-right">-->
    <!--                        @auth-->
    <!--                            <a href="{{ route('user.home') }}"><i-->
    <!--                                    class="las la-tachometer-alt"></i> @lang('Dashboard')</a>-->
    <!--                            <a href="{{ route('user.logout') }}"><i class="las la-sign-out-alt"></i> @lang('Logout')-->
    <!--                            </a>-->
    <!--                        @else-->
    <!--                            <a href="{{ route('user.login') }}"><i class="las la-sign-in-alt"></i> @lang('Login')-->
    <!--                            </a>-->
    <!--                            <a href="{{ route('user.register') }}"><i-->
    <!--                                    class="las la-user-plus"></i> @lang('Registration')</a>-->
    <!--                        @endauth-->
    <!--                        <select class="langSel">-->
    <!--                            @foreach($language as $item)-->
    <!--                                <option value="{{$item->code}}"-->
    <!--                                        @if(session('lang') == $item->code) selected @endif>{{ __($item->name) }}</option>-->
    <!--                            @endforeach-->
    <!--                        </select>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </nav>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</header>-->
    <!-- header-section end  -->

    <!--breadcrumb area-->
@if(request()->route()->getName() != 'home')
    @include($activeTemplate.'partials.breadcrumb')
@endif
<!--/breadcrumb area-->

@yield('content')


@php
    $footer_contents = getContent('footer.content', true);
    $footer_elements = getContent('footer.element');
    $address_content = getContent('address.content', true);
    $extra_pages = getContent('extra.element');
    $blog_elements = getContent('blog.element',false,3);

    $methodContent = getContent('payment_method.content',true);
    $methodElements = getContent('payment_method.element');
@endphp


<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
        <i class="las la-arrow-up"></i>
    </span>
</div>
<!-- scroll-to-top end -->

<!-- footer section start -->
    <footer class="footer-section">
        <div class="payment-area">
            <div class="container border-bottom pb-5">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h3>{{ __($methodContent->data_values->heading) }}</h3>
                    </div>
                    <div class="col-xl-12 mt-4">
                        <div class="payment-slider">
                            @foreach($methodElements as $methodElement)
                                <div class="single-slide">
                                    <div class="payment-item">
                                    <img src="{{ getImage('assets/images/frontend/payment_method/'.@$methodElement->data_values->method_image) }}" alt="image">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 text-md-left text-center">
                        <div class="footer-widget">
                            <a href="{{ route('home') }}" class="footer-logo mb-4">
                                <img src="{{ getImage(imagePath()['logoIcon']['path'] .'/logo.png') }}" alt="image">
                            </a>
                        </div>
                        <!-- footer-widget end -->
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="footer-widget">
                            <ul class="footer-menu justify-content-md-end justify-content-center">
                                @forelse($extra_pages as $item)
                                    <li>
                                        <a href="{{ route('extra.details', [$item->id, @slug($item->data_values->title)]) }}">{{ __(@$item->data_values->title) }}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        <!-- footer-widget end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top end -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 text-md-left text-center order-lg-1 order-2">
                        <p>@lang('All rights & Copy right reserved by') <span
                                class="base--color">{{ @$general->sitename }}</span></p>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-md-0 mt-3 order-lg-3 order-3">
                        <ul class="footer-social-links d-flex flex-wrap align-items-center justify-content-md-end justify-content-center">
                            <li><a href="#0"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#0"><i class="lab la-pinterest-p"></i></a></li>
                            <li><a href="#0"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    @php
        $cookie = App\Models\Frontend::where('data_keys','cookie.data')->first();
    @endphp
    @if(@$cookie->data_values->status && !session('cookie_accepted'))
        <div class="cookie__wrapper">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <p class="txt my-2">
                        @php echo @$cookie->data_values->description @endphp
                        <a href="{{ @$cookie->data_values->link }}" target="_blank" class="text--base">@lang('Read Policy')</a>
                    </p>
                    <button class="cmn-btn btn-md my-2 acceptPolicy">@lang('Accept')</button>
                </div>
            </div>
        </div>
    @endif

</div>
<!-- page-wrapper end -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('assets/global/js/jquery-3.6.0.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>
<!-- lightcase plugin -->
<script src="{{ asset($activeTemplateTrue.'/js/vendor/lightcase.js') }}"></script>
<!-- custom select js -->
<script src="{{ asset($activeTemplateTrue.'/js/vendor/jquery.nice-select.min.js') }}"></script>
<!-- slick slider js -->
<script src="{{ asset($activeTemplateTrue.'/js/vendor/slick.min.js') }}"></script>
<!-- scroll animation -->
<script src="{{ asset($activeTemplateTrue.'/js/vendor/wow.min.js') }}"></script>
<!-- dashboard custom js -->
<script src="{{ asset($activeTemplateTrue.'/js/app.js') }}"></script>

@stack('script-lib')

@stack('script')

@include('partials.plugins')

@include('partials.notify')

<script>
    (function ($) {
        "use strict";

        $(document).on("change", ".langSel", function () {
            window.location.href = "{{url('/')}}/change/" + $(this).val();

        });

        //Cookie
        $(document).on('click', '.acceptPolicy', function () {
            $.ajax({
                url: "{{ route('cookie.accept') }}",
                method:'GET',
                success:function(data){
                    if (data.success){
                        $('.cookie__wrapper').addClass('d-none');
                        notify('success', data.success)
                    }
                },
            });
        });

        //Subscribe
        $(document).on('submit', '.subscribe-form', function (e) {

            e.preventDefault();

            var url = '{{ route("subscribe") }}';
            var data = $(this).serialize();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                method: "POST",
                data: data,
                success: function (data) {
                    if (data.success) {
                        notify('success', data.message);
                        $('.subscribe-form').trigger('reset');
                    }

                    if (data.errors) {
                        notify('error', data.errors);
                    }
                },
            });
        });
    })(jQuery);

</script>

</body>
</html>

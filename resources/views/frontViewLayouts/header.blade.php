<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png')}}">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('frontViewAsset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontViewAsset/css/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('frontViewAsset/css/style.css')}}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('frontViewAsset/css/custom.css')}}">

	<!-- Modernizer js -->
	<script src="{{asset('frontViewAsset/js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="{{ route('home') }}">
								<img src="{{asset('frontViewAsset/images/logo/logo.png')}}" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="{{route('home')}}">Home</a></li>
								<li class="drop"><a href="#">Shop</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Shop Layout</li>
											<li><a href="{{route('shop_now')}}">Shop Grid</a></li>
											<li><a href="single-product.html">Single Product</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Shop Page</li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="{{ route('cart_view_and_edit') }}">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="wishlist.html">Wishlist Page</a></li>
											<li><a href="error404.html">404 Page</a></li>
											<li><a href="faq.html">Faq Page</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Bargain Books</li>
											<li><a href="{{route('shop_now')}}">Bargain Bestsellers</a></li>
											<li><a href="{{route('shop_now')}}">Activity Kits</a></li>
											<li><a href="{{route('shop_now')}}">B&N Classics</a></li>
											<li><a href="{{route('shop_now')}}">Books Under $5</a></li>
											<li><a href="{{route('shop_now')}}">Bargain Books</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="{{route('shop_now')}}">Books</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Categories</li>
											<li><a href="{{route('shop_now')}}">Biography </a></li>
											<li><a href="{{route('shop_now')}}">Business </a></li>
											<li><a href="{{route('shop_now')}}">Cookbooks </a></li>
											<li><a href="{{route('shop_now')}}">Health & Fitness </a></li>
											<li><a href="{{route('shop_now')}}">History </a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Customer Favourite</li>
											<li><a href="{{route('shop_now')}}">Mystery</a></li>
											<li><a href="{{route('shop_now')}}">Religion & Inspiration</a></li>
											<li><a href="{{route('shop_now')}}">Romance</a></li>
											<li><a href="{{route('shop_now')}}">Fiction/Fantasy</a></li>
											<li><a href="{{route('shop_now')}}">Sleeveless</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Collections</li>
											<li><a href="{{route('shop_now')}}">Science </a></li>
											<li><a href="{{route('shop_now')}}">Fiction/Fantasy</a></li>
											<li><a href="{{route('shop_now')}}">Self-Improvemen</a></li>
											<li><a href="{{route('shop_now')}}">Home & Garden</a></li>
											<li><a href="{{route('shop_now')}}">Humor Books</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="{{route('shop_now')}}">Kids</a>
									<div class="megamenu mega02">
										<ul class="item item02">
											<li class="title">Top Collections</li>
											<li><a href="{{route('shop_now')}}">American Girl</a></li>
											<li><a href="{{route('shop_now')}}">Diary Wimpy Kid</a></li>
											<li><a href="{{route('shop_now')}}">Finding Dory</a></li>
											<li><a href="{{route('shop_now')}}">Harry Potter</a></li>
											<li><a href="{{route('shop_now')}}">Land of Stories</a></li>
										</ul>
										<ul class="item item02">
											<li class="title">More For Kids</li>
											<li><a href="{{route('shop_now')}}">B&N Educators</a></li>
											<li><a href="{{route('shop_now')}}">B&N Kids' Club</a></li>
											<li><a href="{{route('shop_now')}}">Kids' Music</a></li>
											<li><a href="{{route('shop_now')}}">Toys & Games</a></li>
											<li><a href="{{route('shop_now')}}">Hoodies</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="#">Pages</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="{{route('about')}}">About Page</a></li>
											<li class="label2"><a href="portfolio.html">Portfolio</a>
												<ul>
													<li><a href="portfolio.html">Portfolio</a></li>
													<li><a href="portfolio-details.html">Portfolio Details</a></li>
												</ul>
											</li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="{{ route('cart_view_and_edit') }}">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="wishlist.html">Wishlist Page</a></li>
											<li><a href="error404.html">404 Page</a></li>
											<li><a href="faq.html">Faq Page</a></li>
											<li><a href="{{route('team')}}">Team Page</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="blog.html">Blog</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="blog.html">Blog Page</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</div>
								</li>
								<li><a href="{{route('contact')}}">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">
								{{count(Cart::content())}}/{{Cart::count()}}
							</span></a>
								<!-- Start Shopping Cart -->
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>{{Cart::count()}} items</span>
											<span>Cart Total</span>
											<span><b>{{ Cart::priceTotal()}}</b></span>
										</div>
										<div class="total_amount text-right">
											
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="{{ route('cart_view_and_edit') }}">View and edit cart</a>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="{{ route('cart_checkout_form') }}">Go to Checkout</a>
										</div>
									</div>
								</div>
								<!-- End Shopping Cart -->
							</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>


														@guest
								                            

								                            <span><a href="{{ route('login') }}">{{ __('Login') }}</a></span>
								                            @if (Route::has('register'))
								                                
								                                <span><a href="{{ route('register') }}">{{ __('Create An Account') }}</a></span>
								                            @endif
								                      

								                            @else

								                            <span>
									                            <a class="dropdown-item" href="{{ route('logout') }}"
							                                       onclick="event.preventDefault();
							                                                     document.getElementById('logout-form').submit();">
							                                       {{ Auth::user()->name }} {{ __('Logout') }}
							                                    </a>

							                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							                                        @csrf
							                                    </form>
									                        </span>

								                        @endguest
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="{{ route('home') }}">Home</a></li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="{{route('about')}}">About Page</a></li>
										<li><a href="portfolio.html">Portfolio</a>
											<ul>
												<li><a href="portfolio.html">Portfolio</a></li>
												<li><a href="portfolio-details.html">Portfolio Details</a></li>
											</ul>
										</li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="{{ route('cart_view_and_edit') }}">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
										<li><a href="wishlist.html">Wishlist Page</a></li>
										<li><a href="error404.html">404 Page</a></li>
										<li><a href="faq.html">Faq Page</a></li>
										<li><a href="{{route('team')}}">Team Page</a></li>
									</ul>
								</li>
								<li><a href="{{route('shop_now')}}">Shop</a>
									<ul>
										<li><a href="{{route('shop_now')}}">Shop Grid</a></li>
										<li><a href="single-product.html">Single Product</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a>
									<ul>
										<li><a href="blog.html">Blog Page</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="{{route('contact')}}">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>		
		</header>
		<!-- //Header -->



		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->

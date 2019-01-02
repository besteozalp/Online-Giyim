<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/images/icons/favicon.png" rel="icon"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/vendor/bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/fonts/font-awesome-4.7.0/css/font-awesome.min.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/fonts/themify/themify-icons.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/fonts/elegant-font/html-css/style.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/vendor/animate/animate.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/vendor/css-hamburgers/hamburgers.min.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/vendor/animsition/css/animsition.min.css" rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/vendor/select2/select2.min.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/vendor/daterangepicker/daterangepicker.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/vendor/slick/slick.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/vendor/lightbox2/css/lightbox.min.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="{{url('/')}}/assets/front/css/util.css"  rel="stylesheet"/>
	<link href="{{url('/')}}/assets/front/css/main.css"  rel="stylesheet"/>
	<!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<header class="header1">
	<!-- Header desktop -->
	<div class="container-menu-header">
		<div class="topbar">
			<div class="topbar-social">
				<a href="{{$data[0]->facebook}}" class="topbar-social-item fa fa-facebook"></a>
				<a href="{{$data[0]->instagram}}" class="topbar-social-item fa fa-instagram"></a>
				<a href="{{$data[0]->twitter}}" class="topbar-social-item fa fa-twitter"></a>
				<a href="{{$data[0]->youtube}}" class="topbar-social-item fa fa-youtube-play"></a>
			</div>
			<div class="topbar-child2">
					<span class="topbar-email">
						bestmoda@bestmoda.com
					</span>

				<div class="topbar-language rs1-select2">
					<select class="selection-1" name="time">
						<option>USD</option>
						<option>EUR</option>
					</select>
				</div>
			</div>
		</div>

		<div class="wrap_header">
			<!-- Logo -->
			<a href="{{url('/')}}" class="logo">
				<img src="{{url('/')}}/assets/front/images/icons/bestmoda.png" alt="IMG-LOGO">
			</a>

			<!-- Menu -->
			<div class="wrap_menu">
				<nav class="menu">
					<ul class="main_menu">
                        <?php
                        $home=null;
                        $hakkimizda=null;
                        $iletisim=null;
                        $bizeyazin=null;
                        if($menu=='home')
                        {
                            $home='active';
                        }
                        else if($menu=='hakkimizda')
                        {
                            $hakkimizda='active';
                        }
                        else if($menu=='iletisim')
                        {
                            $iletisim='active';
                        }
                        else if($menu=='use')
                        {
                            $uye='active';
                        }
                        else if($menu=='bizeyazin')
                            {
                                $bizeyazin='active';
							}
                        ?>
						{{$menu}}
						<li class="{{$home}}">
							<a href="{{url('/')}}">Ürünler</a>
							<ul class="sub_menu">
								<li><a href="{{url('/')}}">Koleksiyon Ürünleri</a></li>
								<li><a href="{{url('/')}}">Sezon Ürünleri</a></li>
							</ul>
						</li>
						<li class="{{$hakkimizda}}">
							<a href="{{url('/')}}/hakkimizda">Hakkımızda</a>
						</li>

						<li class="{{$iletisim}}">
							<a href="{{url('/')}}/iletisim">İletişim</a>
						</li>
							<li class="{{$bizeyazin}}">
								<a href="{{url('/')}}/bize_yazin">Bize Yazın</a>
							</li>

<!--burda o if döngüsü vardı -->

					</ul>
				</nav>
			</div>

			<!-- Header Icon -->
			<div class="header-icons">
				<a href="#" class="header-wrapicon1 dis-block">
					<img src="{{url('/')}}/assets/front/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
				</a>
				<ul class="nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
						<div class="dropdown-menu">
							<form class="form-horizontal loginFrm" method="post" action="{{url('/')}}/login">
								@csrf
						<div>
									<button type="submit" class="shopBtn btn-block">Login</button>
								</div>
							</form>
					        <a href="{{url('/')}}/logout">Logout</a>
						</div>
					</li>
				</ul>
				<span class="linedivide1"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap_header_mobile">
		<!-- Logo moblie -->
		<a href="{{url('/')}}" class="logo-mobile">
			<img src="{{url('/')}}/assets/front/images/icons/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Button show menu -->
		<div class="btn-show-menu">
			<!-- Header Icon mobile -->
			<div class="header-icons-mobile">
				<a href="#" class="header-wrapicon1 dis-block">
					<img src="{{url('/')}}/assets/front/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
				</a>
				<span class="linedivide2"></span>
				<div class="header-wrapicon2">
					<img src="{{url('/')}}/assets/front/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<span class="header-icons-noti">0</span>

					<!-- Header cart noti -->
					<div class="header-cart header-dropdown">
						<ul class="header-cart-wrapitem">
							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="{{url('/')}}/assets/front/images/item-cart-01.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										White Shirt With Pleat Detail Back
									</a>

									<span class="header-cart-item-info">
											1 x $19.00
										</span>
								</div>
							</li>

							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="{{url('/')}}/assets/front/images/item-cart-02.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										Converse All Star Hi Black Canvas
									</a>

									<span class="header-cart-item-info">
											1 x $39.00
										</span>
								</div>
							</li>

							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="{{url('/')}}/assets/front/images/item-cart-03.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										Nixon Porter Leather Watch In Tan
									</a>

									<span class="header-cart-item-info">
											1 x $17.00
										</span>
								</div>
							</li>
						</ul>

						<div class="header-cart-total">
							Total: $75.00
						</div>

						<div class="header-cart-buttons">
							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									View Cart
								</a>
							</div>

							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Check Out
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
			</div>
		</div>
	</div>

	<!-- Menu Mobile -->
	@yield('sidebar')
</header>


<!-- Slide1 -->


<!-- Banner -->
@yield('content')

<!-- Blog -->
@yield('blog')

<!-- Instagram -->

@yield('instagram')
<!-- Shipping -->
@yield('shipping')


<!-- Footer -->

@yield('footer')

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/vendor/bootstrap/js/popper.js"></script>
<script src="{{url('/')}}/assets/front/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/vendor/slick/slick.min.js"></script>
<script src="{{url('/')}}/assets/front/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>

<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/js/main.js"></script>

</body>
</html>

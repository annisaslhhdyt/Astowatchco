<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="utf-8">
    <title>Asto Watch Co.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    {{ HTML::style('css/bootstrap/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap/bootstrap-responsive.min.css') }}

    {{ HTML::style('css/themes/bootstrappage.css') }}

    <!-- global styles -->
    {{ HTML::style('css/themes/flexslider.css') }}
    {{ HTML::style('css/themes/main.css') }}

    <!-- scripts -->
    {{ HTML::script('js/themes/jquery-1.7.2.min.js') }}
    {{ HTML::script('js/bootstrap/bootstrap.min.js') }}
    {{ HTML::script('js/themes/superfish.js') }}
    {{ HTML::script('js/themes/jquery.scrolltotop.js') }}
    <!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <div id="top-bar" class="container">
        <div class="row">
            <div class="span4">
                <form method="POST" class="search_form">
                    <input type="text" class="input-block-level search-query" Placeholder="eg. Toegoe">
                </form>
            </div>
            <div class="span8">
                <div class="account pull-right">
                    <ul class="user-menu">
                        <li><a href="#">My Account</a></li>
                        <li><a href="cart.html">Your Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        @guest
                        <li><a href="/login">Login</a></li>
                        @else
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper" class="container">
        @component('_header')
        @endcomponent
        <section class="header_text sub">
            {{ HTML::image('image/themes/gambar/tangandanjam.jpg') }}	
		
			<h4><span>Strap</span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.html">
                                    {{ HTML::image('image/themes/gambar/1.jpg') }}	
                                    </a><br/>
									<a href="product_detail.html" class="title">Strap</a><br/>
									<p class="price">Rp250.000,-</p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html">
                                    {{ HTML::image('image/themes/gambar/2.jpg') }}	
                                    </a><br/>
									<a href="product_detail.html" class="title">Strap</a><br/>
									<p class="price">Rp250.000,-</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.html">
                                    {{ HTML::image('image/themes/gambar/3.jpg') }}	
                                    </a><br/>
									<a href="product_detail.html" class="title">Strap</a><br/>
									<p class="price">Rp250.000,-</p>
								</div>
							</li>
							
							
						</ul>								
						<hr>
						
					</div>
					<div class="span3 col">
						
                    <div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>
                                                    {{ HTML::image('image/themes/gambar/8.jpg') }}
                                                    <br/>
													<a href="product_detail.html" class="title">Black Round Toegoe</a><br/>
													<p class="price">Rp500.000,-</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">						
                                                    {{ HTML::image('image/themes/gambar/20.jpg') }}
                                                    <br/>
													<a href="product_detail.html" class="title">White Round Toegoe</a><br/>
													<p class="price">Rp500.000</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
                                        {{ HTML::image('image/themes/gambar/6.jpg') }}
                                    </a>
									<a href="#">Classic Black Cowhide Leather</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
                                        {{ HTML::image('image/themes/gambar/12.jpg') }}
									</a>
									<a href="#">Classic Black Cowhide Leather</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
                                        {{ HTML::image('image/themes/gambar/18.jpg') }}
									</a>
									<a href="#">Classic Natural Cowhide Leather</a>
								</li>   
							</ul>
						</div>
					</div>
				</div>
			</section>
			
            @component('_footer')
		@endcomponent
        {{ HTML::script('js/themes/common.js') }}
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>

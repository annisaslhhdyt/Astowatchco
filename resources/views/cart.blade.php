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

				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>

									<th>Product</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="/cart"> 
                                    {{ HTML::image('image/themes/gambar/' . $product->id . '.jpg') }}
                                    </a></td>
									<td>{{ $product->series }}</td>
									<td>1</td>
									<td>{{ $product->price }}</td>
									<td>{{ $product->price }}</td>
								</tr>			  
								<tr>
									<!-- <td><input type="checkbox" value="option1"></td>
									<td><a href="productdetail.html">
                                    {{ HTML::image('image/themes/gambar/1.jpg') }}
                                    </a></td>
									<td>Handmade Strap Red</td>
									<td><input type="text" placeholder="2" class="input-mini"></td>
									<td>Rp.200.000</td>
									<td>Rp.200.000</td> -->
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>{{ $product->price }}</strong></td>
								</tr>		  
							</tbody>
						</table>
						<!-- <h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label> -->
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>{{ $product->price }}<br>
							<strong>Total</strong>{{ $product->price }}<br>
						</p>
						<hr/>
						<p class="buttons center">				
							<!-- <button class="btn" type="button">Update</button>
							<button class="btn" type="button">Continue</button> -->
							<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
						</p>					
					</div>
					<!-- <div class="span3 col">
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
													<a href="product_detail.html">
                                                    {{ HTML::image('image/themes/gambar/21.jpg') }}
                                                    </a><br/>
													<a href="product_detail.html" class="title">Classic Natural Cowhide Leather</a><br/>
													<p class="price">Rp.200.000 - Rp.900.000,-</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html">
                                                    {{ HTML::image('image/themes/gambar/17.jpg') }}
                                                    </a><br/>
													<a href="product_detail.html" class="title">White Hexagonal Monjali</a><br/>
													<p class="price">Rp.700.000,-</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div> -->
			</section>			
            @component('_footer')
		@endcomponent
        {{ HTML::script('js/themes/common.js') }}
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "/checkout";
				})
			});
		</script>		
    </body>
</html>
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

				<h4><span>Product Detail</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<!-- <a href="themes/images/ladies/1.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"> -->
                                {{ HTML::image('image/themes/gambar/' . $product->id . '.jpg') }}
                                </a>												
								<!-- <ul class="thumbnails small">								
									<li class="span1">
										<a href="themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2">
                                        {{ HTML::image('image/themes/gambar/13.jpg') }}
                                        </a>
									</li>								
									<li class="span1">
										<a href="themes/images/ladies/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3">
                                        {{ HTML::image('image/themes/gambar/14.jpg') }}
                                        </a>
									</li>													
									<li class="span1">
										<a href="themes/images/ladies/4.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4">
                                        {{ HTML::image('image/themes/gambar/1.jpg') }}
                                        </a>
									</li>
									<li class="span1">
										<a href="themes/images/ladies/5.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5">
                                        {{ HTML::image('image/themes/gambar/2.jpg') }}
                                        </a>
									</li>
								</ul> -->
							</div>
							<div class="span5">
								<address>
									<strong>Series:</strong> <span>{{ $product->series }}</span><br>
									<strong>Case:</strong> <span>{{ $product->case }}</span><br>
									<strong>Wood:</strong> <span>{{ $product->wood }}</span><br>
									<strong>Strap:</strong> <span>{{ $product-> strap}}</span><br>							
								</address>									
								<h4><strong>Price: Rp {{ $product-> price }}</strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline">
									
									<p>&nbsp;</p>
									<button class="btn btn-inverse" type="submit"><a href="/cart/{{ $product->id }}">Add to cart</a>
									</button>
									
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home">Tugu Yogyakarta is the most popular monument in D.I. Yogyakarta with sharp shaped . Did you know at the first development, the monument shape was round (in another language called gilig) ? Our timepiece TOEGOE was inspired by Tugu of Yogyakarta that has many histories about Yogyakarta.</div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Case</th>
													<td>Round, Hexagonal</td>
												</tr>		
												<tr class="alt">
													<th>Dimension</th>
													<td>40mm wide, Adjustable, Water Splash Proof</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>						
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="/products/{{ $relatedProducts[0]->id }}">
                                                        {{ HTML::image('image/themes/gambar/' . $relatedProducts[0]->id . '.jpg') }}
                                                        </a><br/>
														<a href="product_detail.html" class="title">{{ $relatedProducts[0]->name }}</a><br/>
														<p class="price">Rp {{ $relatedProducts[0]->price }},-</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="/products/{{ $relatedProducts[1]->id }}">
                                                        {{ HTML::image('image/themes/gambar/' . $relatedProducts[1]->id . '.jpg') }}
                                                        </a><br/>
														<a href="product_detail.html" class="title">{{ $relatedProducts[1]->name }}</a><br/>
														<p class="price">Rp {{ $relatedProducts[1]->price }},-</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="/products/{{ $relatedProducts[2]->id }}">
                                                        {{ HTML::image('image/themes/gambar/' . $relatedProducts[2]->id . '.jpg') }}
                                                        </a><br/>
														<a href="/products/{{ $relatedProducts[2]->id }}" class="title">{{ $relatedProducts[2]->name }}</a><br/>
														<p class="price">Rp {{ $relatedProducts[2]->price }},-</p>
													</div>
												</li>												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="/products/{{ $relatedProducts[3]->id }}">
                                                        {{ HTML::image('image/themes/gambar/' . $relatedProducts[3]->id . '.jpg') }}
                                                        </a><br/>
														<a href="/products/{{ $relatedProducts[3]->id }}" class="title">{{ $relatedProducts[3]->name }}</a><br/>
														<p class="price">Rp {{ $relatedProducts[3]->price }},-</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="/products/{{ $relatedProducts[4]->id }}">
                                                        {{ HTML::image('image/themes/gambar/' . $relatedProducts[4]->id . '.jpg') }}
                                                        </a><br/>
														<a href="/products/{{ $relatedProducts[4]->id }}" class="title">{{ $relatedProducts[4]->name }}</a><br/>
														<p class="price">Rp {{ $relatedProducts[4]->price }},-</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="/products/{{ $relatedProducts[5]->id }}">
                                                        {{ HTML::image('image/themes/gambar/' . $relatedProducts[5]->id . '.jpg') }}
                                                        </a><br/>
														<a href="/products/{{ $relatedProducts[5]->id }}" class="title">{{ $relatedProducts[5]->name }}</a><br/>
														<p class="price">Rp {{ $relatedProducts[5]->price }},-</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
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
                                                    {{ HTML::image('image/themes/gambar/' . $relatedProducts[6]->id . '.jpg') }}
                                                    <br/>
													<a href="/products/{{ $relatedProducts[6]->id }}" class="title">{{ $relatedProducts[6]->name }}</a><br/>
													<p class="price">Rp {{ $relatedProducts[6]->price }},-</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>
                                                    {{ HTML::image('image/themes/gambar/' . $relatedProducts[7]->id . '.jpg') }}
                                                    <br/>
													<a href="/products/{{ $relatedProducts[7]->id }}" class="title">{{ $relatedProducts[7]->name }}</a><br/>
													<p class="price">Rp {{ $relatedProducts[7]->price }},-</p>
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
									<a href="/products/{{ $relatedProducts[8]->id }}" title="Praesent tempor sem sodales">
                                        {{ HTML::image('image/themes/gambar/' . $relatedProducts[8]->id . '.jpg') }}
                                    </a>
									<a href="/products/{{ $relatedProducts[8]->id }}">{{ $relatedProducts[8]->name }}</a>
								</li>
								<li>
									<a href="/products/{{ $relatedProducts[9]->id }}" title="Praesent tempor sem sodales">
                                        {{ HTML::image('image/themes/gambar/' . $relatedProducts[9]->id .'.jpg') }}
									</a>
									<a href="/products/{{ $relatedProducts[9]->id }}">{{ $relatedProducts[9]->name }}</a>
								</li>
								<li>
									<a href="/products/{{ $relatedProducts[10]->id }}" title="Praesent tempor sem sodales">
                                        {{ HTML::image('image/themes/gambar/' . $relatedProducts[10]->id .'.jpg') }}
									</a>
									<a href="/products/{{ $relatedProducts[10]->id }}">{{ $relatedProducts[10]->name }}</a>
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
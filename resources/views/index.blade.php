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
        <section class="homepage-slider" id="home-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        {{ HTML::image('image/themes/gambar/freeshipping.jpg') }}
                    </li>
                    <li>
                        {{ HTML::image('image/themes/gambar/holysale.jpg') }}
                    </li>
                    <li>
                        {{ HTML::image('image/themes/gambar/tangandanjam.jpg') }}
                    </li>
                </ul>
            </div>
        </section>
        <section class="header_text">
            "Planted in the land, perfected by man, to grow in your hand"
            <br />D.I. Yogyakarta
        </section>
        <section class="main-content">
            <div class="row">
                <div class="span12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Our <strong>Masterpieces</strong></span></span></span>

                    </h4>
                    <?php $i = 0; ?>
                    @while ($i < $products->count())
                    <div class="row">
                        <div class="span12">
                            <div id="myCarousel" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            <li class="span4">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="/products/{{ $products[$i]->id }}">
                                                            {{ HTML::image('image/themes/gambar/' . $products[$i]->id . '.jpg', 'gambar2') }}
                                                        </a></p>
                                                    <p class="title">{{ $products[$i]->name }}</p>
                                                    <p class="price">Rp {{ $products[$i]->price }} ,-</p>
                                                </div>
                                            </li>
                                            <li class="span4">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="/products/{{ $products[$i+1]->id }}">
                                                            {{ HTML::image('image/themes/gambar/' . $products[$i+1]->id . '.jpg', 'gambar2') }}
                                                        </a></p>
                                                    <p class="title">{{ $products[$i+1]->name }}</p>
                                                    <p class="price">Rp {{ $products[$i+1]->price }} ,-</p>
                                                </div>
                                            </li>
                                            <li class="span4">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="/products/{{ $products[$i+2]->id }}">
                                                            {{ HTML::image('image/themes/gambar/' . $products[$i+2]->id . '.jpg', 'gambar2') }}
                                                        </a></p>
                                                    <p class="title">{{ $products[$i+2]->name }}</p>
                                                    <p class="price">Rp {{ $products[$i+2]->price }} ,-</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <?php $i += 3; ?>
                    @endwhile


                    <div class="row feature_box">
                        <div class="span4">
                            <div class="service">
                                <div class="responsive">
                                    {{ HTML::image('image/themes/feature_img_2.png', 'feature_img_2') }}
                                    <h4>MODERN <strong>DESIGN</strong></h4>
                                    <p>Each product is packed with Maple wood and Rose wood with quality from the
                                        Miyota Japan Movement machine. Suitable for your minimalist style.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="service">
                                <div class="customize">
                                    <img src="image/themes/feature_img_1.png" alt="" />
                                    <h4>FREE <strong>SHIPPING</strong></h4>
                                    <p>The shipping fee is absolutely zero cost all over Indonesia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="service">
                                <div class="support">
                                    <img src="image/themes/feature_img_3.png" alt="" />
                                    <h4>LOCAL <strong>HANDMADE</strong></h4>
                                    <p>Brand of wooden watches from Yogyakarta that are inspired and represent local
                                        wisdom from the city of Yogyakarta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @component('_footer')
        @endcomponent

    </div>
    {{ HTML::script('js/themes/common.js') }}
    {{ HTML::script('js/themes/jquery.flexslider-min.js') }}
    <script type="text/javascript">
        $(function () {
            $(document).ready(function () {
                $('.flexslider').flexslider({
                    animation: "fade",
                    slideshowSpeed: 4000,
                    animationSpeed: 600,
                    controlNav: false,
                    directionNav: true,
                    controlsContainer: ".flex-container" // the container that holds the flexslider
                });
            });
        });

    </script>
</body>

</html>

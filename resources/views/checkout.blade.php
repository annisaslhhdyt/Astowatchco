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

				<h4><span>Check Out</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Your Personal Details</h4>
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
											</div>
											<div class="span6">
												<h4>Your Address</h4>
												<div class="control-group">
													<label class="control-label">Company</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Company ID:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Address 1:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Address 2:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> City:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Post Code:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Country:</label>
													<div class="controls">
														<select class="input-xlarge">
															<option value="1">Afghanistan</option>
															<option value="2">Belgia</option>
															<option value="3">China</option>
															<option value="4">Indonesia</option>
															<option value="5">India</option>
															<option value="6">Japan</option>
														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Region / State:</label>
													<div class="controls">
														<select name="zone_id" class="input-xlarge">
															<option value=""> --- Please Select --- </option>
															<option value="3513">Aberdeen</option>
															<option value="3514">Aberdeenshire</option>
															<option value="3515">Anglesey</option>
															<option value="3516">Angus</option>
															<option value="3517">Argyll and Bute</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
      						<div class="accordion-heading">
         					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
        					</div>
        						<div id="collapseThree" class="accordion-body collapse">
         						<div class="accordion-inner">
          						<div class="row-fluid">
								<div class="control-group">
								<label for="textarea" class="control-label">Comments</label>
								<div class="controls">
								<textarea rows="3" id="textarea" class="span12"></textarea>
								</div>
							</div>         
							<button class="btn btn-inverse pull-right" data-toggle="modal" data-target="#myModal">Confirm order</button>
								<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog">
						
									<!-- Modal content-->
									<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Confirmation</h4>
									</div>
									<div class="modal-body">
										<p>Your order has been confirmed</p>
								<p>Thank you for your order</p>
									</div>
								<div class="modal-footer">
								</div>
							</div>  
							</div>
						</div>
					</div>
						</div>
						</div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Strap</h4>
        </div>
        <div class="modal-body">
          <p>Our handmade strap is available in 5 colours</p>
          <p>• Black</p>
          <p>• Red Rose</p>
          <p>• Dark Brown</p>
          <p>• Navy</p>
          <p>• Natural</p>
        </div>
        <div class="modal-footer">
        </div>
      </div>  
    </div>
  </div>
</div>
									<!-- <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a> -->
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Comments</label>
												<div class="controls">
													<textarea rows="3" id="textarea" class="span12"></textarea>
												</div>
											</div>									
											<button class="btn btn-inverse pull-right">Confirm order</button>
										</div>
									</div>
								</div>
							</div>
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
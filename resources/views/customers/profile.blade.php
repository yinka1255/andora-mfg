<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Andora | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @include('includes.main-css')
<style>
    #dollar_value{
    box-shadow: none !important;
    border: 1px solid #333 !important;
    padding: 0px 0px 4px 20px !important;
    height: 46px !important;
    color: #fff !important;
    background: #222 !important;
    font-size: 14px !important;
    border-radius: 0 !important;
    outline: 0 !important;
    transition: .1s !important;

    }

</style>
</head>

<body>
    <!-- SVG Preloader Starts -->
    <div id="preloader">
        <div id="preloader-content">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                <feOffset dx="0" dy="0" result="offsetblur"/>
                <feFlood flood-color="red"/>
                <feComposite in2="offsetblur" operator="in"/>
                <feMerge>
                <feMergeNode/>
                <feMergeNode in="SourceGraphic"/>
                </feMerge>
                </filter>          
                <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>       
            </svg>
        </div>
    </div>
    <!-- SVG Preloader Ends -->
	<!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a id="orange-css" href="#" title="orange" class="color"><img src="{{asset('public/mantra/images/styleswitcher/colors/orange.png')}}')}}" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a id="green-css" href="#" title="green" class="color"><img src="{{asset('public/mantra/images/styleswitcher/colors/green.png')}}')}}" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a id="blue-css" href="#" title="blue" class="color"><img src="{{asset('public/mantra/images/styleswitcher/colors/blue.png')}}')}}" alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>
			
			<label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" /> Light</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

            <hr />

            <a href="#" class="custom-button purchase">Purchase</a>
            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <!-- <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div> -->
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        @include('includes.main-header')
        <!-- Header Ends -->
		<!-- Banner Area Starts -->
		<section class="banner-area">
			<div class="banner-overlay">
				<div class="banner-text text-center">
					<div class="container">
						<!-- Section Title Starts -->
						<div class="row text-center">
							<div class="col-xs-12">
								<!-- Title Starts -->
								<h2 class="title-head">{{$loggedInUser->name}} <span></span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="{{url('/')}}"> home</a></li>
									<li>Account</li>
								</ul>
								<!-- Breadcrumb Ends -->
							</div>
						</div>
						<!-- Section Title Ends -->
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Area Ends -->
		<!-- Section Services Starts -->
        <section class="services">
			<div class="container">
				<div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div id="transactions">
                            <h3>Your transaction history</h3>
                            <table class="table">
                                <thead>
                                    <th>SN</th>
                                    <th>Bitcoin value</th>
                                    <th>Dollar value</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $key=>$transaction)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$transaction->btc_value}}BTC</td>
                                        <td>${{$transaction->dollar_value}}</td>
                                        <td>{{$transaction->status}}</td>
                                        <td>{{$transaction->created_at}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if(count($transactions) < 1)
                                <p style="color: red">You have no transaction at the moment <a href="#sell" onclick="exec('link_sell')" style="color: #fff;padding-left: 30px;">Sell bitcoin now >></a> </p>
                            @endif

                        </div>
                        <div id="sell" style="display: none;">
                            <h3>Sell to us</h3>
                            <form action="{{url('customers/sell_post')}}" method="post">
                                {{ csrf_field() }}
                                    <!-- Input Field Starts -->
                                <div class="row" >
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Bitcoin you want to sell</label>
                                        <input class="form-control" name="btc_value" id="btc_value" value="1" min="1"   onkeyup="getDollar()" placeholder="BITCOIN VALUE" type="number" required>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Value you'd get in dollars($)</label>
                                        <input class="form-control" name="dollar_value" id="dollar_value" placeholder="DOLLAR VALUE($)" type="number" readonly required>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label>Your bitcoin address(through which you sent us bitcoin)</label>
                                        <input class="form-control" name="bitcoin_address" id="bitcoin_address" placeholder="YOUR BITCOIN WALLET ADDRESS" type="text" required>
                                    </div>
                                    
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Your preferred payment method</label>
                                        <select class="form-control" name="payment_method">
                                        <option>Paypal</option>
                                        <option>Western union</label>
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Provide us your email</label>
                                        <input class="form-control" name="email" value="{{$loggedInUser->email}}" id="email" placeholder="EMAIL" type="email" required>
                                    </div>
                                    <button class="btn btn-primary pull-right" style="margin-right: 10px" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div id="profile" style="display: none;">
                            <h3>Update Profile</h3>
                            <form action="{{url('customers/update_profile')}}" method="post">
                                {{ csrf_field() }}
                                    <!-- Input Field Starts -->
                                <div class="row" >
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Name</label>
                                        <input class="form-control" name="name" id="name" value="{{$loggedInUser->name}}" placeholder="YOUR NAME"  required>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Email</label>
                                        <input class="form-control" name="email" value="{{$loggedInUser->email}}" id="email1" placeholder="EMAIL" type="email" required>
                                    </div>
                                    <button class="btn btn-primary pull-right" style="margin-right: 10px" type="submit">Submit</button>
                                </div>
                            </form>
                            <h3>Update Password</h3>
                            <form action="{{url('customers/update_password')}}" method="post">
                                {{ csrf_field() }}
                                    <!-- Input Field Starts -->
                                <div class="row" >
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>New password</label>
                                        <input class="form-control" name="password" id="password" type="password" placeholder=""  required>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Confirm New password</label>
                                        <input class="form-control" name="cpassword" id="cpassword" type="password" placeholder=""  required>
                                    </div>
                                    <button class="btn btn-primary pull-right" style="margin-right: 10px" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
					<!-- Sidebar Starts -->
				<div class="sidebar col-xs-12 col-md-4">
					<!-- Latest Posts Widget Ends -->
					<div class="widget recent-posts" style="margin-top: 60px;">
						<h3 class="widget-title">Links</h3>
						<ul class="unstyled clearfix">
                        <li onclick="exec('link_transactions')">
							<a href="#transactions" class="myLink" id="link_transactions" >Transactions</a>
						</li>
						<li onclick="exec('link_sell')">
                            <a href="#sell"  class="myLink" id="link_sell" >Sell to us</a>
						</li>
						
						<li onclick="exec('link_profile')">
                            <a href="#profile"  class="myLink" id="link_profile" >Profile info</a>
						</li>
						<!-- Recent Post Widget Ends -->
						</ul>
					</div>
					<!-- Latest Posts Widget Ends -->
					
				</div>
				<!-- Sidebar Ends -->
                </div>
            </div>
        </section>
		<!-- Section Services Ends -->
        <!-- Call To Action Section Starts -->
        <section class="call-action-all">
			<div class="call-action-all-overlay">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- Call To Action Text Starts -->
							<div class="action-text">
								<h2>Need to speak with an agent?</h2>
								<p class="lead">Click the button below to contact us</p>
							</div>
							<!-- Call To Action Text Ends -->
							<!-- Call To Action Button Starts -->
							<p class="action-btn"><a class="btn btn-primary" href="{{url('contact')}}">Contact us</a></p>
							<!-- Call To Action Button Ends -->
						</div>
					</div>
				</div>
			</div>
        </section>
        <!-- Call To Action Section Ends -->
        <!-- Footer Starts -->
        
        <!-- Footer Ends -->
	
        <!-- Template JS Files -->
        @include('includes.footer')
        @include('includes.login')
        @include('includes.register')
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
		<!-- Back To Top Ends  -->
		

    </div>
    <!-- Wrapper Ends -->
    @include('includes.main-scripts')
    <script>
            $(document).ready(function(){
                getDollar();
                exec("link_transactions")
            })
            function getDollar(){
                var btc = $("#btc_value").val();
                $("#btc_value1").val(btc);
                var dollar = btc * 14122.12;
                $("#dollar_value").val(dollar.toFixed(2));
                $("#dollar_value1").val(dollar.toFixed(2));
            }

            function exec(id){
                $(".myLink").css('color', '#fff');
                $("#"+id).css('color', '#fd961a');

                if(id == "link_transactions"){
                    $("#transactions").show();
                    $("#sell").hide();
                    $("#profile").hide();
                    $('html, body').animate({
                        scrollTop: $("#transactions").offset().top + -100
                    }, 2000);
                }
                else if(id == "link_sell"){
                    $("#sell").show();
                    $("#transactions").hide();
                    $("#profile").hide();
                    $('html, body').animate({
                        scrollTop: $("#sell").offset().top + -100
                    }, 2000);
                }
                else if(id == "link_profile"){
                    $("#profile").show();
                    $("#transactions").hide();
                    $("#sell").hide();
                    $('html, body').animate({
                        scrollTop: $("#profile").offset().top + -100
                    }, 2000);
                }
            }
        </script>
    <!-- Wrapper Ends -->
</body>

</html>
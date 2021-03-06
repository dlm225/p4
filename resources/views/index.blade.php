@extends('layouts.master')

@section('title')
    Another CTF
@stop

@section('head')
    <link href="/css/style.css" rel='stylesheet' />
@stop

@section('content')
    <div class="container">
        <div class="text-center">
            <br /><br />
            <span class="glyphicon glyphicon-flag whitetext" style="font-size:200px;" aria-hidden="true"></span>
            <h1 class="whitetext">Another CTF</h1>
            <h4 class="whitetext">A Crowdsourced Capture-the-Flag Training Venue</h4>

            @if(Auth::user())
                <br /><br />
                <a class="joinbutton" href="/play">PLAY</a>
            @else
                <br />
                <a class="joinbutton" href="/login">ENTER</a>

                <div id="modal" class="popupContainer" style="display:none;">
            		<header class="popupHeader">
            			<span class="header_title">Login</span>
            			<span class="modal_close"><i class="fa fa-times"></i></span>
            		</header>

            		<section class="popupBody">
            			<!-- Social Login -->
                        <h2>Social Login</h2>
                        <div class="social_login">
            				<div class="">
            					<a href="#" class="social_box fb">
            						<span class="icon"><i class="fa fa-facebook"></i></span>
            						<span class="icon_title">Connect with Facebook</span>

            					</a>

            					<a href="#" class="social_box google">
            						<span class="icon"><i class="fa fa-google-plus"></i></span>
            						<span class="icon_title">Connect with Google</span>
            					</a>
            				</div>

            				<div class="centeredText">
            					<span>Or use your Username/Email</span>
            				</div>

            				<div class="action_btns">
            					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
            					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            				</div>
            			</div>

            			<!-- Username & Password Login form -->
            			<div class="user_login">
            				<form>
            					<label>Email / Username</label>
            					<input type="text" />
            					<br />

            					<label>Password</label>
            					<input type="password" />
            					<br />

            					<div class="checkbox">
            						<label for="remember"><input id="remember" type="checkbox" /> Remember me on this computer</label>
            					</div>

            					<div class="action_btns">
            						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
            						<div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
            					</div>
            				</form>

            				<a href="#" class="forgot_password">Forgot password?</a>
            			</div>

            			<!-- Register Form -->
            			<div class="user_register">
            				<form action="/join" method="post">
            					<label>Username</label>
            					<input type="text" />
            					<br />

            					<label>Email Address</label>
            					<input type="email" />
            					<br />

            					<label>Password</label>
            					<input type="password" />
            					<br />

            					<div class="checkbox">
            						<label for="send_updates"><input id="send_updates" type="checkbox" /> Send me occasional email updates</label>
            					</div>

            					<div class="action_btns">
            						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
            						<div class="one_half last"><input type="submit" class="btn btn_red">Register</div>
            					</div>
            				</form>
            			</div>
            		</section>
        	    </div>
            @endif
        </div>
    </div>
@stop

@section('body')
    <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/js/jquery.leanModal.min.js"></script>
    <script type="text/javascript">
        $("#modal_trigger").leanModal({top : 100, overlay : 0.6, closeButton: ".modal_close" });

        $(function () {
            // Calling Login Form
            $("#login_form").click(function () {
                $(".social_login").hide();
                $(".user_login").show();
                return false;
            });

            // Calling Register Form
            $("#register_form").click(function () {
                $(".social_login").hide();
                $(".user_register").show();
                $(".header_title").text('Register');
                return false;
            });

            // Going back to Social Forms
            $(".back_btn").click(function () {
                $(".user_login").hide();
                $(".user_register").hide();
                $(".social_login").show();
                $(".header_title").text('Login');
                return false;
            });
        })
    </script>
@stop

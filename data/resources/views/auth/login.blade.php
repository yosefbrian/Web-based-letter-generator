<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>SIM Persuratan</title>
<link href="{{ URL::asset('css/login.css') }}" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple Login Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<!--/start-login-one-->
<h1>SIM Persuratan</h1>
		<div class="login">	
			<div class="ribbon-wrapper h2 ribbon-red">
				<div class="ribbon-front">
					<h2>User Login</h2>
				</div>
				<div class="ribbon-edge-topleft2"></div>
				<div class="ribbon-edge-bottomleft"></div>
			</div>
			<form role="form" method="POST" action="{{ url('/login') }}">
				{!! csrf_field() !!}
				<ul>
					<li>
					 
                      <a href="#" class="icon fa fa-user" align="right"></a><input placeholder="Email Address" type="text" name="email" class="text" value="{{ old('email') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
                      
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</li>
					 <li>
                       <a href="#" class="icon fa fa-lock" align="right"></a><input type="password" value="Password" onfocus="this.value = '';" name="password" onblur="if (this.value == '') {this.value = 'Password';}">
                       

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</li>
				</ul>
            <div class="submit">
				<input type="submit" onclick="myFunction()" value="Log in" >
			</div>
			</form>
			
		</div>
<!--start-copyright-->
   		<div class="copy-right">
				<p>Template by &nbsp;<a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	<!--//end-copyright-->
</body>
</html>
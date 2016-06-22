
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from www.keenthemes.com/preview/metronic/theme/templates/admin2/login_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Apr 2015 19:48:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8"/>
<title>CONSTRUCTORA</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="css/login2.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link href="css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="container-fluid">

<div class="col-md-7">
	<div class="logo">
		<H1>INGENIERIA DE SOFTWARE 2</H1>
		<img src="" alt="">
	</div>
</div>
<div class="col-md-5">
<div class="logo">
	<a href="index-2.html">
	<!--img src="img/logo-big-white1.png" style="height: 40px;" alt=""/-->
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="negocio/suscriptorN.php" method="post">
		<div class="form-title">
			<span class="form-title">Bienvenido.</span>
			<span class="form-subtitle">Por favor ingrese su usuari<a href="suscriptorP.php">o</a>.</span>
		</div>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Contraseña" name="password"/>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary btn-block uppercase">Login</button>
		</div>
		
		<input type="hidden" value="ingresar" name="pagina">
	</form>
	<!-- BEGIN REGISTRATION FORM -->
	<div class="create-account">
			<p>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
			    <!-- Identify your business so that you can collect the payments. -->
				    <input type="hidden" name="return" value="http://www.jcspz0.hol.es/suscriptorP.php">
					<input type="hidden" name="cancel_return" value="http://www.jcspz0.hol.es//index.php">
				    <input type="hidden" name="business" value="jcspz0stardan1@gmail.com">

				    <!-- Specify a Subscribe button. -->
				    <input type="hidden" name="cmd" value="_xclick-subscriptions">
				    <!-- Identify the subscription. -->
				    <input type="hidden" name="item_name" value="suscripcion a sistema de registro">
				    <input type="hidden" name="item_number" value="DIG Weekly">

				    <!-- Set the terms of the regular subscription. -->
				    <input type="hidden" name="currency_code" value="USD">
				    <input type="hidden" name="a3" value="5.00">
				    <input type="hidden" name="p3" value="1">
				    <input type="hidden" name="t3" value="M">
				    <input type="hidden" name="no_shipping" value="1">
				    <!-- Set recurring payments until canceled. -->
				    <input type="hidden" name="src" value="1">
				    
				    <!-- Display the payment button. -->
				    <input type="image" name="submit"
				    src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif"
				    alt="PayPal - The safer, easier way to pay online">
				    <img alt="" width="1" height="1"
				    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

				</form>
			</p>
		</div>
    
	<!-- END REGISTRATION FORM -->
</div>
</div>
</div>

<div class="copyright hide">


</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="js/jquery.uniform.min.js" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="js/metronic.js" type="text/javascript"></script>
<script src="js/layout.js" type="text/javascript"></script>
<script src="js/demo.js" type="text/javascript"></script>
<script src="js/login.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/metronic/theme/templates/admin2/login_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Apr 2015 19:48:53 GMT -->
</html>
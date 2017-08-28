<!DOCTYPE html>
<html lang="es-es" id="extr-page" class="smart-style-6">
	<head>
    	<meta name="robots" content="noindex,nofollow">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta content="" name="description" />
		<meta content="" name="author" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="black" name="apple-mobile-web-app-status-bar-style" />
		<title>Contabilidad - @yield('title')</title>
    	<?php //echo view::renderPartial("HeadSmartAdmin"); ?>
    	@include('layouts/head')
    	<!--================================================== -->
		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<!--<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php //echo URL_PLANTILLA; ?>js/plugin/pace/pace.min.js"></script>-->

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="<?php //echo URL_PLANTILLA; ?>js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="<?php //echo URL_PLANTILLA; ?>js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>
	</head>
	
	<body class="animated fadeInDown smart-style-6">

		<header id="header">

			<div id="logo-group">
				<!--<span id="logo"><img src="<?php //echo core::getInstancePath(); ?>img/logo_movil_dydsoluciones.png" alt="DydSoluciones.net" width="50px">-->
				<!--<img src="<?php //echo core::getInstancePath(); ?>img/logo_movil_dydsoluciones.png" alt="DydSoluciones.net" width="100px">-->
			</div>
				<div class="pull-right">
				<img src="{{url('/')}}/img/logo.jpg" alt="DydSoluciones.net" width="100px">
				<span id="extr-page-header-space" > 
				<span class="hidden-mobile">Finante</span>
				<a href="http://www.dydsoluciones.net/index.php/contactanos/" class="btn btn-danger btn-sm">Contactanos</a>
				</span>				
				</div>
				
		</header>

		<div id="main" role="main" style="background-image: url('{{url('/')}}/img/banner/imagen2.jpg'); min-height: 650px; height: 100%; height: auto;">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="div_form_login">

						<h1 class="txt-color-white login-header-big">Bienvenidos a Finante</h1>
						<div class="padding">

								@yield('content')

						</div>
						
						  <h5 class="text-center"> - O Siguenos en -</h5>
															
							<ul class="list-inline text-center">
								<li>
									<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
						 
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="row">
							<h1 class="txt-color-white login-header-big">Software Contable y Financiero</h1>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
								<img src="{{url('/')}}/img/logo.jpg" alt="Dydsoluciones-Finante" width="150px"> 
							</div>	
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" >
								<p class="txt-color-white" style="font-size: 12pt;"> Software Contable y Financiero</p>
							</div>	
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 hidden-xs hidden-sm" id="from_login_left">
						
						<!--<div class="hero">-->
						<!--<div class="">
							<img src="{{url('/')}}/img/logo.jpg" alt="Dydsoluciones-Finante" width="250px">
						</div>-->
					</div>
					
				</div>
			</div><!-- content -->
			
		</div>

		<!--================================================== -->	

		@include('layouts/DefaultPageScript')
        
        
		

	</body>
</html>
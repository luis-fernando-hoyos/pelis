<!DOCTYPE html>
<html lang="es-es">

<?php //define('URL_PLANTILLA', core::getInstancePath()."public/SmartAdmin/" ); ?>

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
		<script>
	        window.Laravel = {!! json_encode([
	            'csrfToken' => csrf_token(),
	        ]) !!};
	    </script>
</head>

<body class="desktop-detected smart-style-6 fixed-header fixed-navigation fixed-ribbon fixed-page-footer">
<!--<body class=" ">-->
 
<header id="header">
	@include('layouts/header')
</header>
 

<aside id="left-panel">
	@include('layouts/aside')
</aside> 

 
<!-- MAIN PANEL -->
<div id="main">
	<!--<div id="main">-->
	<!-- RIBBON -->
	<div id="ribbon">
		<span class="ribbon-button-alignment btn btn-ribbon" data-html="php" data-original-title="message..." data-placement="bottom" data-title="refresh" id="refresh">Donde Estoy</span>
		<!-- breadcrumb -->
		<ol class="breadcrumb">
		<!-- if you are using the AJAX version, the breadcrumb area will be empty -->
			<li><a href="<?php //echo core::getInstancePath(); ?>/home/panel"><?php //echo Router::getApplication(); ?></a></li>
			<li><a href="<?php //echo core::getInstancePath().Router::getController(); ?>"><?php //echo Router::getController(); ?></a></li>
			<li><a href="<?php //echo core::getInstancePath().Router::getController()."/".Router::getAction(); ?>"><?php //echo Router::getAction(); ?></a></li>
		</ol><!-- end breadcrumb -->
	 
	</div><!-- END RIBBON -->
	<!-- MAIN CONTENT -->
	 
	<div id="content"> 
		@yield('content')
	</div>
	<!-- END MAIN CONTENT -->
	<!--</div>-->

	<!-- END MAIN PANEL -->
</div>

<div class="page-footer">
    @include('layouts/footer')
</div>
 

@include('layouts/shortcut')


@include('layouts/DefaultPageScript')
@include('layouts/ventanas_modal')
<?php //echo view::renderPartial("DefaultPageScriptSmartAdmin"); ?> 
</body>
</html>
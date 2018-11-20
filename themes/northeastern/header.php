<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta name="title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>" />
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="Northeastern University, http://www.northeastern.edu" />
		<meta name="copyright" content="<?=date("Y")?>" />
		<meta name="language" content="english" />
		<meta name="zipcode" content="02115" />
		<meta name="city" content="Boston" />
		<meta name="state" content="MA" />

		<meta http-equiv="pragma" content="no-cache" />
		<meta http-equiv="revisit" content="15 days" />
		<meta http-equiv="robots" content="all" />
		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="msapplication-tap-highlight" content="no" />

		<link rel="apple-touch-icon" sizes="57x57"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-57x57.png?v=2" />
    <link rel="apple-touch-icon" sizes="60x60"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-60x60.png?v=2" />
    <link rel="apple-touch-icon" sizes="72x72"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-72x72.png?v=2" />
    <link rel="apple-touch-icon" sizes="76x76"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-76x76.png?v=2" />
    <link rel="apple-touch-icon" sizes="114x114"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-114x114.png?v=2" />
    <link rel="apple-touch-icon" sizes="120x120"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-120x120.png?v=2" />
    <link rel="apple-touch-icon" sizes="144x144"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-144x144.png?v=2" />
    <link rel="apple-touch-icon" sizes="152x152"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-152x152.png?v=2" />
    <link rel="icon" sizes="144x144" type="image/png" href="https://brand.northeastern.edu/global/assets/favicon/android-chrome-144x144.png?v=2" />
    <link rel="icon" sizes="32x32" type="image/png" href="https://brand.northeastern.edu/global/assets/favicon/favicon-32x32.png?v=2" />
    <link rel="icon" sizes="16x16" type="image/png" href="https://brand.northeastern.edu/global/assets/favicon/favicon-16x16.png?v=2" />
    <link rel="manifest" href="https://brand.northeastern.edu/global/assets/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="https://brand.northeastern.edu/global/assets/favicon/mstile-144x144.png?v=2" />
    <meta name="theme-color" content="#ffffff" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>

		<script>
    	// conditionizr.com
    	// configure environment tests
	    conditionizr.config({
	        assets: '<?php echo get_template_directory_uri(); ?>',
	        tests: {}
	    });
    </script>

		<!-- Google Tag Manager - uncomment when going to production -->
		<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WGQLLJ');</script> -->
		<!-- End Google Tag Manager -->

	</head>
	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) - uncomment when going to production -->
		<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGQLLJ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
		<!-- End Google Tag Manager (noscript) -->

		<!-- screen size testing - set debug false in scripts JS when going to production -->
		<p class="testp" style="position:fixed;background:rgba(0,0,0,0.7);color:#fff;top:200px;left:0;font-weight:bold;font-size:20px;z-index:99999999;"></p>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<?php if(function_exists("NUML_globalheader")){NUML_globalheader();} ?><header class="header clear" role="banner">

				<div>

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?=get_settings('theme_settings_logosvg')?></a>
					</div>
					<!-- /logo -->

					<nav class="nu__main-nav" id="nu__main-nav-desktop">
						<?php northeastern_nav(); ?>
					</nav>

				</div>

			</header>
			<!-- /header -->

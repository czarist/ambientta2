<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(''); ?></title>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
	<meta name="theme-color" content="#121212">
	<meta name="author" content="Lucas Cezar Trentin" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>

	<!-- bootstrap -->
	<link href="<?php echo get_template_directory_uri(); ?>/library/bootstrap4.1.1/css/bootstrap.min.css" rel="stylesheet" />
	<script src="<?php echo get_template_directory_uri(); ?>/library/bootstrap4.1.1/js/bootstrap.min.js"></script>

	<!-- bootstrap icons -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/icons-1.5.0/font/bootstrap-icons.css" />

	<!-- fontawesome icons -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/fontawesome/css/all.css" />

	<!-- swipper -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/swiper/swiper.min.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/library/swiper/swiper.min.js"></script>

	<!-- aos -->
	<script src="<?php echo get_template_directory_uri(); ?>/library/aos/dist/aos.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/library/aos/dist/aos.css" rel="stylesheet" />

	<!-- urls -->
	<input type="hidden" name="get_template_directory_uri" id="get_template_directory_uri" value="<?php echo get_template_directory_uri(); ?>">
	<input type="hidden" name="home_url" id="home_url" value="<?php echo home_url(); ?>">

</head>

<div id="loadContent">
	<div class="lds-facebook">
		<div></div>
		<div></div>
		<div></div>
	</div>
	<img style="width: 130px;position: absolute;margin-bottom: 11pc;" src="<?php echo get_template_directory_uri(); ?>/library/images/logo2.png" alt="logoload">
</div>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

	<div id="theWhats" class="d-flex align-items-center justify-content-center">
		<a target="_blank" href="https://api.whatsapp.com/send?phone=<?= get_field('whatsapp', 5); ?>&text=Gostaria%20de%20marcar%20uma%20consulta!">
			<img id="whats" src="<?php echo get_template_directory_uri(); ?>/library/images/whats.svg" alt="whats">
		</a>
	</div>
	<div id="container">
		<header id="header" class="header header-maior w-100" role="banner" itemscope itemtype="https://schema.org/WPHeader">
			<div id="inner-header" class="container d-flex justify-content-between align-items-center">
				<img id="open-menu" class="d-flex d-xl-none burguer" src="<?php echo get_template_directory_uri(); ?>/library/images/burguer.svg" alt="open-menu">
				<img id="close-menu" class="d-none close_it" src="<?php echo get_template_directory_uri(); ?>/library/images/close.svg" alt="open-menu">
				<p id="logo" class="h1 d-none d-xl-flex justify-content-center align-items-center" itemscope itemtype="https://schema.org/Organization">
					<a href="<?= home_url()  ?>" rel="nofollow">
						<img id="imgLogo" src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="logo">
					</a>
				</p>
				<nav role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
					<ul class="d-lg-flex d-none justify-content-between align-items-center m-0">
						<li class="mr-5 d-none d-xl-block">
							<a class="mb-0" href="<?= home_url() ?>/quem-somos">QUEM SOMOS</a>
						</li>
						<li class="mr-5 d-none d-xl-block">
							<a class="mb-0" href="<?= $post->ID == 5 ? '#PORTFOLIO' : home_url() . '/#PORTFOLIO' ?>">PORTFÓLIO</a>
						</li>
						<li class="mr-5 d-none d-xl-block">
							<a class="mb-0" href="<?= $post->ID == 5 ? '#OQUEFAZEMOS' : home_url() . '/#OQUEFAZEMOS' ?>">O QUE FAZEMOS</a>
						</li>
						<li class="mr-5 d-none d-xl-block">
							<a class="mb-0" href="<?= $post->ID == 5 ? '#DEPOIMENTOS' : home_url() . '/#DEPOIMENTOS' ?>">DEPOIMENTOS</a>
						</li>
						<li class="mr-5 d-none d-xl-block">
							<a class="mb-0" href="<?= $post->ID == 5 ? '#METODOLOGIA' : home_url() . '/#METODOLOGIA' ?>">METODOLOGIA</a>
						</li>
						<li class="mr-5 d-none d-xl-block ">
							<a class="mb-0 dark-link" href="#CONTATO">FALE COM A GENTE</a>
						</li>
						<li>
							<a class="mr-5" target="_blank" href="<?= get_field('instagram', 5); ?>">
								<i class="bi bi-instagram h4"></i>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<nav id='menu-mobile' class="d-none" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<ul class="">
					<li class="mb-3 d-flex">
						<a class="text-left" href="<?= home_url() ?>/quem-somos">QUEM SOMOS</a>
					</li>
					<li class="mb-3 d-flex">
						<a class="text-left" href="<?= $post->ID == 5 ? '#PORTFOLIO' : home_url() . '/#PORTFOLIO' ?>">PORTFÓLIO</a>
					</li>
					<li class="mb-3 d-flex">
						<a class="text-left" href="<?= $post->ID == 5 ? '#OQUEFAZEMOS' : home_url() . '/#OQUEFAZEMOS' ?>">O QUE FAZEMOS</a>
					</li>
					<li class="mb-3 d-flex">
						<a class="text-left" href="<?= $post->ID == 5 ? '#DEPOIMENTOS' : home_url() . '/#DEPOIMENTOS' ?>">DEPOIMENTOS</a>
					</li>
					<li class="mb-3 d-flex">
						<a class="text-left" href="<?= $post->ID == 5 ? '#METODOLOGIA' : home_url() . '/#METODOLOGIA' ?>">METODOLOGIA</a>
					</li>
					<li class="mb-3 d-flex">
						<a class="text-left" href="#CONTATO">FALE COM A GENTE</a>
					</li>

					<li class="mb-3 d-flex w-100 justify-content-center">
						<p id="logo" class="h1" itemscope itemtype="https://schema.org/Organization">
							<a href="#banners" rel="nofollow">
								<img id="imgLogo" src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="logo">
							</a>
						</p>
					</li>
				</ul>
			</nav>

		</header>
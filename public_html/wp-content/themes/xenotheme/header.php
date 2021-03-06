<?php
    global $post;
    $slug = get_post( $post )->post_name;
?>
<!DOCTYPE html>
<html class="<?php echo $slug; ?>">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php bloginfo('name'); ?><?php if (wp_title('', false)) { echo ' | '; } ?><?php echo trim(wp_title('', false)); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="author" content="Xenostar Studios" />
	<meta name="rating" content="general" />
	<meta name="robots" content="index, follow" />
	<meta name="content-language" content="english">
	<meta name="audience" content="all" />

	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta property="og:title" content="<?php bloginfo('name'); ?><?php if (wp_title('', false)) { echo ' | '; } ?><?php echo trim(wp_title('', false)); ?>">
	<meta property="og:type" content="website">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<meta property="og:image" content="<?php echo site_url(); ?>/wp-content/themes/xenotheme/assets/img/logo.png">
	<meta property="og:url" content="<?php echo get_permalink(); ?>">

	<!-- Wordpress Header START -->
<?php wp_head(); ?>

	<!-- Disables Scaling on multi-touch interfaces -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" href="<?php echo site_url(); ?>/wp-content/themes/xenotheme/assets/img/apple-touch-icon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/xenotheme/assets/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/xenotheme/assets/css/master.min.css" />

	<!-- HTML5shiv, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="<?php echo site_url(); ?>/wp-content/themes/xenotheme/assets/libs/html5shiv/dist/html5shiv-printshiv.min.js"></script>
		<script src="<?php echo site_url(); ?>/wp-content/themes/xenotheme/assets/libs/REM-unit-polyfill/js/rem.min.js"></script>
	<![endif]-->

	<!-- Header Scripts -->
	<script>
		function imgLoaded(img){
			img.parentNode.className += ' loaded';
		};
		var imagePreload = [
			//'/uploads/hero_about.jpg',
		];
		(function(d) {
			var config = {
			kitId: 'axg4srq',
			scriptTimeout: 3000,
			async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		})(document);
	</script>

</head>
<body id="top" class="xeno">

<?php get_template_part('templates/nav', 'mobile'); ?>

<div class="wrapper gut">

<!DOCTYPE html>
<html class="" lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="language" content="en">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="canonical" href="<?php echo $pageinfo['canonical']; ?>">
	<link href="<?php echo SITEURL; ?>" rel="index" title="<?php echo $siteinfo['name']; ?>" />
	<meta name="description" content="<?php echo $pageinfo['description']; ?>">
	<title><?php echo $pageinfo['title']; ?></title>

	<link rel="shortcut icon" type="image/png" href="<?php echo SITEURL; ?>/module/img/index/favicon.ico">
	<link rel="apple-touch-icon" type="image/png" href="<?php echo SITEURL; ?>/module/img/index/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo SITEURL; ?>/module/img/index/android-chrome-192x192.png">

	<link rel="stylesheet" href="<?php echo SITEURL; ?>/module/css/init/reset.css">
	<link rel="stylesheet" href="<?php echo SITEURL ?>/module/css/common.css">

	<?php
	$TMPINFO = $pageinfo;
	$wp_header = str_replace('conts/','',ROOTPATH) . 'conts/wp-config.php';
	if(file_exists ($wp_header)){
		require($wp_header);
		wp_head();
		$pageinfo = $TMPINFO;
	}
	if(!function_exists ('wpcf7_enqueue_scripts')): ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<?php endif; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="<?php echo SITEURL; ?>/module/js/init/module.baseset.js"></script>
	<script src="<?php echo SITEURL; ?>/module/js/common.funcs.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
	<script src="<?php echo SITEURL; ?>/module/js/add/lity.min.js"></script>
	<link rel="stylesheet" href="<?php echo SITEURL; ?>/module/css/add/lity.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script src="<?php echo SITEURL; ?>/module/js/add/particles.min.js"></script>
	<meta property="og:image" content="<?php echo SITEURL; ?>/module/img/index/ogimage.jpg" />
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-81PNX3E3MK"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-81PNX3E3MK');
	</script>
</head>
<body id="<?php echo $pageinfo['id']; ?>" class="<?php echo $pageinfo['classtype']; ?> <?php echo $pageinfo['layouttype']; ?>">
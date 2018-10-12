<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<!--<title>
		<?php /*echo $this->fetch('title'); */?>
	</title>-->
	<title><?php echo __('Education') ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="index">
	<meta property="og:title" content="<?php echo __('title') ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://.jp/">
	<meta name="keywords" content="keywords">
	<meta name="description" content="description">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="icon" href="<?php echo $this->webroot.'img/logo.png' ?>">
	<link rel="shortcut icon" href="<?php echo $this->webroot.'img/logo.png' ?>">

	<?php
		echo $this->Html->css('bootstrap-3.1.1.min');
		echo $this->Html->css('layout.css?t='.time());
		echo $this->Html->css('flexslider.css?t='.time());
		echo $this->Html->css('main.css?t='.time());
		echo $this->Html->css('layout_custom.css?t='.time());
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('jquery-ui');
		echo $this->Html->css('jquery.fancybox.css?t='.time());
		echo $this->Html->css('common.css?time='.time());

		echo $this->Html->script('layouts/jquery-2.2.3.min');
		echo $this->Html->script('layouts/bootstrap.min');
		echo $this->Html->script('layouts/jquery.flexslider.js');
		echo $this->Html->script('layouts/main.js');
		echo $this->Html->script('layouts/move-top.js');
		echo $this->Html->script('layouts/easing.js');
		echo $this->Html->script('layouts/jquery-ui');
		echo $this->Html->script('common.js?time='.time());

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- //for-mobile-apps -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->

	<?php echo $this->element('Common/common_variables') ?>

</head>
<body>

	<!-- header -->
	<?php echo $this->element('../Layouts/Include/header'); ?>
	<!-- //header -->


	<?php echo $this->Flash->render(); ?>
	<?php echo $this->fetch('content'); ?>


	<!-- footer -->
	<?php echo $this->element('../Layouts/Include/footer'); ?>
	<!-- //footer -->

</body>
</html>

<script type="text/javascript">
	$(window).load(function () {
		$('.flexslider').flexslider({
			animation: "slide",
			start: function (slider) {
				$('body').removeClass('loading');
			}
		});
	});

	$(document).ready(function () {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
		});
	});

	var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 1200,
		easingType: 'linear'
	};

	$().UItoTop({easingType: 'easeOutQuart'});
</script>

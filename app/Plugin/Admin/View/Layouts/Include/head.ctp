<meta charset="utf-8">
<title><?php echo __('Toyo Investment') ?></title>
<link rel="icon" href="<?php echo $this->webroot.'img/Logo4.png' ?>">
<link rel="shortcut icon" href="<?php echo $this->webroot.'img/Logo4.png' ?>">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="">
<meta name="author" content="">

<?php

$plugin = $this->plugin;

echo $this->Html->css('../assets/components/bootstrap/css/bootstrap.min.css');
echo $this->Html->css('../assets/components/font-awesome/css/font-awesome.min.css');
echo $this->Html->css('../assets/components/node-waves/waves.css');
echo $this->Html->css('../assets/components/animate-css/animate.css');
//echo $this->Html->css('../assets/components/morrisjs/morris.css');
echo $this->Html->css('../assets/css/style.css?t='.time());
echo $this->Html->css('../assets/css/themes/all-themes.css');
echo $this->Html->css('../assets/css/materialize.css');
echo $this->Html->css('adminCommon.css?t='.time());

echo $this->Html->script('../assets/components/jquery/jquery.min.js');
echo $this->Html->script('../assets/components/bootstrap/js/bootstrap.min.js');
echo $this->Html->script('../assets/components/bootstrap-select/js/bootstrap-select.js');
echo $this->Html->script('../assets/components/node-waves/waves.js');
echo $this->Html->script('../assets/components/jquery/jquery.slimscroll.min.js');
echo $this->Html->script('../assets/components/jquery-countto/jquery.countTo.js');
echo $this->Html->script('../assets/components/raphael/raphael.min.js');
//echo $this->Html->script('../assets/components/morrisjs/morris.js');
echo $this->Html->script('../assets/components/chartjs/Chart.bundle.js');
echo $this->Html->script('../assets/components/flot-charts/jquery.flot.js');
echo $this->Html->script('../assets/components/flot-charts/jquery.flot.resize.js');
echo $this->Html->script('../assets/components/flot-charts/jquery.flot.pie.js');
echo $this->Html->script('../assets/components/flot-charts/jquery.flot.categories.js');
echo $this->Html->script('../assets/components/flot-charts/jquery.flot.time.js');
echo $this->Html->script('../assets/components/jquery-sparkline/jquery.sparkline.js');
echo $this->Html->script('../assets/js/admin.js');
echo $this->Html->script('../assets/js/pages/index.js');
echo $this->Html->script('../assets/js/demo.js');
echo $this->Html->script('common.js?time='.time());

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');

?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


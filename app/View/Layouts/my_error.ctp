<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>Error!!!</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        
        <?php 
	
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('animate');
		echo $this->Html->css('font-awesome');
		echo $this->Html->css('error.min');

		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap.js');
	    		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		?>
    </head>
    <!-- END HEAD -->

    <body class="page-404-3">
        <div class="page-inner">
            <img src="<?php echo $this->webroot; ?>img/earth.jpg" class="img-responsive" alt=""> </div>
        <div class="container error-404">
             <?php echo $this->Flash->render(); ?>
    		 <?php echo $this->fetch('content'); ?>   
        </div>
</body>


</html>
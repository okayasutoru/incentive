<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php echo __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
 
    <!-- Bootstrap -->
	<?php echo $this->Html->css('bootstrap.min'); ?>
 
	<!-- Le styles -->
  </head>
  <body>
 
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <?php echo $this->fetch('script'); ?>
  </body>
</html>

	<?php echo $this->Html->charset();?>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		echo $this->fetch('css');
		echo $this->Html->css('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
		echo $this->Html->css('custom');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans');
		echo $this->Html->script('jquery-1.10.2');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('jquery.metisMenu');
		echo $this->Html->script('custom');
		echo $this->Html->script('http://code.jquery.com/jquery.js');
	 	echo $this->Html->css('sb-admin'); ?>
	<?php echo $this->Html->css('morris'); ?>
	<?php echo $this->Html->css('font-awesome.min'); ?>
    



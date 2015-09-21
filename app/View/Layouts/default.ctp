<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset();?>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		echo $this->fetch('css');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
		echo $this->Html->css('custom');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans');

		echo $this->fetch('script');
		echo $this->Html->script('jquery-1.10.2');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('jquery.metisMenu');
		echo $this->Html->script('custom');
	?>
</head>
<body>
	<div id="container">

		<div id="content">

			<?php echo $this->Session->flash();?>

			<?php echo $this->fetch('content');?>

		</div>

	</div>
</body>
</html>

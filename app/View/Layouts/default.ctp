<?php
/**
 *
 *
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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap-theme.min');
		echo $this->Html->css('bootstrap.min');



		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container" class="container">
		<div id="header">
			

			<div class="page-header" style="position: relative;">
				<ul class="nav nav-pills" style="position: absolute;right: 0px;top: 0px;">
				  <li class="pull-right">
				    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'settings')) ?>">
				      <span class="glyphicon glyphicon-cog"></span>
				    </a>
				  </li>
				  <li class="dropdown pull-right">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				      Compte <span class="caret"></span>
				    </a>
				    <ul class="dropdown-menu">
				      <li>
					    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'feeds')) ?>">
					      Feeds
					    </a>
					  </li>
					  <li>
					    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'calendar')) ?>">
					      Calendar
					    </a>
					  </li>
					  <li>
					    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'whishlist')) ?>">
					      My Whishlist
					    </a>
					  </li>
					  <li>
					    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'cellar')) ?>">
					      My Cellar
					    </a>
					  </li>
				    </ul>
				  </li>
				  <li class="active pull-right">
				    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'profil')) ?>">
				      Profil
				    </a>
				  </li>
				  <li class="pull-right">
				    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'inbox')) ?>">
				      <span class="badge pull-right">42</span>
				      Messagerie
				    </a>
				  </li>
				</ul>
			  <h1 style><a href="/" style="text-decoration: none;">La Bonne Cave </a><small> Come for a wine !</small></h1>
			</div>
			
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<hr />
		<div id="footer">
			&copy; La bonne cave 2014 • 
			<a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'contact')) ?>">Contact</a> • 
			<a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'about')) ?>">about</a>
		</div>
	</div>
	<?php echo $this->Html->script('jquery.min'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->fetch('scriptBottom'); ?>
</body>
</html>

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

$cakeDescription = __d('cake_dev', 'La Bonne Cave');
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
	?>
</head>
<body>
	<div id="container" class="container">
		<div id="header">
			<?php if($auth) : ?>
			<ul class="nav nav-pills pull-right">
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
				      Actualités
				    </a>
				  </li>
				  <li>
				    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'wishlist')) ?>">
				      Ma Wishlist
				    </a>
				  </li>
				  <li>
				    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'cellar')) ?>">
				      Ma Cave
				    </a>
				  </li>
				  <li>
				    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'events')) ?>">
				      Mes évènements
				    </a>
				  </li>
				  <li class="divider"></li>
				  <li>
				    <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')) ?>">
				      Déconnexion
				    </a>
				  </li>
				  
			    </ul>
			  </li>
			  <li class="pull-right">
			    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'profil')) ?>">
			      <?= $auth['pseudo'] ?>
			    </a>
			  </li>
			</ul>
			<?php endif ?>
		  <h1 style><a href="/" style="text-decoration: none;">La Bonne Cave </a><small> Come for a wine !</small></h1>
		  <hr>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<hr />
		<div id="footer">
			&copy; La bonne cave 2014 • 
			<a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'contact')) ?>">Contact</a> • 
			<a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'about')) ?>">A propos</a>
		</div>
	</div>
	<?php echo $this->Html->script('jquery.min'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->fetch('scriptBottom'); ?>
	<?php echo $this->Html->script('script'); ?>
	<?php echo $this->fetch('script'); ?>
</body>
</html>

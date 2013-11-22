<?php
/**
 *
 * PHP 5
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
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php 
			//var_dump($this->Session->read());
			// Permet de voir toutes les donnees lies au compte
			$fname = $this->Session->read('Auth.User.fname');
			if (isset($fname))
			{
				echo '<h2>Vous &ecirc;tes connect&eacute; en tant que ';
				echo $this->Session->read('Auth.User.fname');
				echo ' ';
				echo $this->Session->read('Auth.User.name');
				echo '.</h2><p>';
				echo $this->Html->link('Home', '/', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Posts', '/Posts', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Add User', array('controller' => 'Posts', 'action' => 'add', 'full_base' => true) );
				echo ' - ';
				echo $this->Html->link('Users', '/Users', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Add User', array('controller' => 'Users', 'action' => 'add', 'full_base' => true) );
				echo ' - ';
				echo $this->Html->link('Jobs', '/Jobs', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Add Job', array('controller' => 'Jobs', 'action' => 'add', 'full_base' => true) );
				//echo $this->Html->link("Add Post", array('action' => 'add', 'full_base' => true)); 
				echo ' - ';
				echo $this->Html->link('Logout', array('controller' => 'Users', 'action' => 'logout') );
				echo '</p>'; 
			} else  { 
				echo '<h2>Vous n\'&ecirc;tes pas connect&eacute;</h2>';
				echo $this->Html->link('Home', '/', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Posts', '/Posts', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Users', '/Users', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Jobs', '/Jobs', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Login', array('controller' => 'Users', 'action' => 'login') );
			}
			?>	
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

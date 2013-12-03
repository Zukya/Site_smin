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
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('bootstrap.carousel');
		echo $this->Html->script('bootstrap.alert');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style>
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }  
      
      /* -- */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 100px;
    }
    .carousel-caption h1 {
     background-color: rgba(255,90,0,.8);
     font-weight:100;
     }
    
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      padding:20px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
     .carousel-caption .lead {
     margin-top:10px;
     background-color: rgba(20,20,20,.8);}
    .carousel-caption .btn {
      margin-top: 10px;
    }
    /* -- */  
    
    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    /* ----- */
	</style>
</head>
<body>
	<div class="container">
<?php 
		//$url = $this->Html->url('/Users') ;
		//$active = $this->request->here == $url? true: false;
		$tab = array(
			0=>"/",
			1=>"/Users",
			2=>"/Jobs",
			3=>"/Users/edit");
		for ($i = 0; $i < count($tab) ; $i++) {
			$url = $this->Html->url($tab[$i]);
			$active = $this->request->here == $url? true: false; 
			if ($active) {$tab[$i]="<li class='active'>";}
			else {$tab[$i]="<li>";}
		}
		// var_dump($tab);
		?>
	<div class="masthead">
        <ul class="nav nav-pills pull-right">
		<!-- <div id="header"> -->
		<?php if ($tab[0]=="active") {$option. ", active";} ?>
			
		<?php 
			//var_dump($this->Session->read());
			// Permet de voir toutes les donnees lies au compte
			$option = "'class' => 'button'";
			$fname = $this->Session->read('Auth.User.fname');
			if (isset($fname))
			{
				//echo '<h2>Vous &ecirc;tes connect&eacute; en tant que ';
				//echo $this->Session->read('Auth.User.fname');
				//echo ' ';
				//echo $this->Session->read('Auth.User.name');
				//echo '.</h2><p>';
				echo $tab[0];	
				/*		
				echo $this->Html->link(
					$this->Html->div("icon-home", "", array("class" => "button")), "/", array("class" => "button", "escape" => false)
					);
					*/
				echo $this->Html->link( "Home", "/", array("class" => "button", "escape" => false)
					);
				echo '</li>';
				echo $tab[1];
				//echo $this->Html->link('Add User', array('controller' => 'Posts', 'action' => 'add', 'full_base' => true) );
				echo $this->Html->link('Users', '/Users', array('class' => 'button'));
				echo '</li>';
				echo $tab[2];
				echo $this->Html->link('Jobs', '/Jobs', array('class' => 'button'));
				echo '</li>';
				echo $tab[3];
				echo $this->Html->link('Profil', '/Users', array('class' => 'button'));
				echo '</li>';
				echo '<li>';
				echo $this->Html->link('Logout', array('controller' => 'Users', 'action' => 'logout') );
				echo '</li>';
				//echo '</p>'; 
			} else  { 
				echo $this->Html->link('Home', '/', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Posts', '/Posts', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Users', '/Users', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Jobs', '/Jobs', array('class' => 'button'));
				echo ' - ';
				echo $this->Html->link('Login', array('controller' => 'Users', 'action' => 'login') );
				echo ' - ';
				echo $this->Html->link('Register', array('controller' => 'Users', 'action' => 'add') );
			}
			?>	
		<!-- </div> -->
		       </ul>
        <h3 class="muted">Squarecom</h3>
      </div>
    </div>
      
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src=" http://getbootstrap.com/2.3.2/assets/img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>SERVICES MOBILES INTERFACES NOMADES</h1>
              <p class="lead">La licence professionnelle des D&eacute;veloppeurs Web multi support sur Grenoble.
              </p>
              <a class="btn btn-large btn-primary" href="#">En savoir plus >></a>
             
            </div>
          </div>
        </div>
        <div class="item">
          <img src=" http://getbootstrap.com/2.3.2/assets/img/examples/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>LA LISTE DES MEMBRES</h1>
              <p class="lead">
              Chaque &eacute;tudiant poss&egrave;de son propre profil, avec des informations tel un curriculum vitae et ses projets en cours.<br/>
              La liste n'est &eacute;videmment pas exostive.
              </p>
              <a class="btn btn-large btn-primary" href="#">Voir la liste >></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src=" http://getbootstrap.com/2.3.2/assets/img/examples/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>NOS OFFRES D'EMPLOIS</h1>
              <p class="lead">
              De nombreuses entreprises ont d&eacute;pos&eacute;s des offres d'emplois sur notre site, n'h&eacute;sitez pas
              a en ajouter si vous faites partie d'une entreprise qui recherche des &eacute;tudiants dans le domaine du multim&eacute;dia.</p>
              <a class="btn btn-large btn-primary" href="#">Etudier les offres >></a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    
	<div id="container" class="container">
		<!-- <div id="content"> -->
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		<!-- </div> -->
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
	
	<script>
		$(".alert").alert();
	</script>
</body>
</html>

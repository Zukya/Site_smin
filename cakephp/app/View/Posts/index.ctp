<!-- File: /app/View/Posts/index.ctp  (edit links added) -->

<style>
.delinked {
	color: #333;

}
.delinked:hover {
	color: #333;
	text-decoration:none;
}
.prev, .next {
	background-color:rgb(255,90,0);
	color : white;
	width: 100%;
	display:block;
	text-align: center;
	padding: 5px 0;
	font-weight: bold;
	margin-bottom: 15px;

}
.prev a, .next a {
	background-color:rgb(255,90,0);
	width: 100%;
	display:block;
	text-decoration: none;
	color : white;

}

.img_post {
	max-width: 475px;
	max-height: 235px; 
	margin:auto; 
	display: block;
}

.recherche-blog::-webkit-input-placeholder {
   color: white;
}

.recherche-blog:-moz-placeholder { /* Firefox 18- */
   color: white;  
}

.recherche-blog::-moz-placeholder {  /* Firefox 19+ */
   color: white;  
}

.recherche-blog:-ms-input-placeholder {  
   color: white;  
}
.ndt-link{
	color:white; 
	padding: 5px;
 	margin-bottom:15px;
  	background-color: #08c;
   	font-weight:800;
}

.ndt-link a{
	color:white;
	display:block;
	width:100%; 
	text-decoration: none;
}
</style>
<?php 
/*
//var_dump($this->Session->read());
$fname = $this->Session->read('Auth.User.fname');
if (isset($fname))
{
echo '<h2>Vous &ecirc;tes connect&eacute; en tant que ';
echo $this->Session->read('Auth.User.fname');
echo ' ';
echo $this->Session->read('Auth.User.name');
echo '.</h2><p>';
echo $this->Html->link("Add Post", array('action' => 'add')); ?>
-
<?php  echo $this->Html->link(
    'Logout',
    array('controller' => 'Users', 'action' => 'logout') );?>
</p>

<?php 

} else  { echo '<h2>Vous n\'&ecirc;tes pas connect&eacute;</h2>';
echo $this->Html->link(
    'Login',
    array('controller' => 'Users', 'action' => 'login') );
}
*/	
?>
<div class="row-fluid show-grid">
	<div class="span12">
		<h1 class="text-center" style="font-weight:100;">L'Actualité Etudiante</h1>	
		<h5 class="text-center" style="color:#888;font-weight:100;">
« Les chocs culturels stimulent la créativité. »
	</h5>
		<hr>
	</div> 
</div> 

<div class="row-fluid show-grid">
	<div class="span10">
		<div class="row-fluid show-grid">
		<?php $max_caracteres=175; ?>
			<?php $del = 0; ?>
		<?php foreach ($posts as $post): ?>
			<?php $del++; ?>
			    <div class="span6" style="min-height:300px;">
			    	<?php
			    	if(!isset($post['Post']['image'])) 
			        	echo $this->Html->image('http://placehold.it/475x235', array('alt' => 'Image de base'));
			        else {
			        	echo $this->Html->image($post['Post']['image'], array('alt' => 'CakePHP','class'=>'img_post')); 
			        } ?>

			        <h4>
			       <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']), array('class' => 'delinked')); ?><br/>
			       </h4>
			  	<h5><em>Par 
			    <?php echo $post['User']['fname']; ?>
			  	<?php  echo $post['User']['name']; ?>
			  	<?php //echo $this->Html->link('Modifier', array('action' => 'edit', $post['Post']['id'])); ?>
			  	<?php //echo $this->Form->postLink('Supprimer',array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?')); ?>
			            
			            
			  	</em>
			  	</h5>
			  	<p style="color:#666;">
				<?php   
					$finalchar = $post['Post']['content'];
					if (strlen($post['Post']['content'])>$max_caracteres)
					{    
					$tempo = substr($post['Post']['content'], 0, $max_caracteres);
					$position_espace = strrpos($tempo, " ");    
					$finalchar = substr($tempo, 0, $position_espace);    
					$finalchar = $finalchar."...";
					}
					echo $finalchar;
					$finalchar = "..."; 
				?>
				</p>
			   </div>
			 <?php 
			 if (($del==2)||($del==4)||($del==6))
			 { echo '</div><div class="row-fluid show-grid">';}
			 ?>
		<?php endforeach; ?>
					<?php 
			 if ($del % 2 != 0)
			 { echo '</div><div class="row-fluid show-grid">'; }
			 ?>

			<div class="span6">
				<?php echo $this->Paginator->prev( __('Precedent'), array(), null, array('class' => 'fps  prev disabled')); ?>
			</div>
			<div class="span6">
				<?php echo $this->Paginator->next(__('Suivant') , array(), null, array('class' => ' fps next disabled')); ?>
			</div>
		</div>
	</div>
   <div class="span2">
	<div class="row-fluid show-grid"> 
	 	<div class="span12 text-center" style="color:white; margin-bottom:30px; background-color: #333;">
	 		<h3 style="background:none;">Facebook</h3>
	 	</div>
	</div>
	<div class="row-fluid show-grid"> 
	 	<div class="span12 text-center" style="color:white; margin-bottom:30px; background-color: #333;">
	 		<h3 style="background:none;">Twitter</h3>
	 	</div>
	</div>
	<div class="row-fluid show-grid"> 
	 	<div class="span12 text-center" style="color:white; margin-bottom:30px; background-color: #333;">
	 		<h3 style="background:none;">Linkedin</h3>
	 	</div>
	</div>
	<div class="row-fluid show-grid"> 
	 	<div class="span12 text-center" style="color:white; margin-bottom:30px; background-color: #333;">
	 		<h3 style="background:none;">RSS</h3>
	 	</div>
	</div>
	 <div class="row-fluid show-grid">
	  <div class="span12">
	  <!-- <input style="max-width:90%;" type="text" placeholder="Nom d'article...">  -->
	  <div style="color:white; margin-bottom:30px; ">
	  <?php
		echo $this->Form->create('Post', array('action' => 'seek', 'type' => 'get','style'=>'margin:0;'));

		echo '<div class=\'input-append\' style=\'margin-bottom:0;\'>';
		echo $this->Form->input('word', 
		array(	'placeholder'	=> 'Titre,prénom,...',				
				'label'=> false,
				'class' => 'recherche-blog',
				'style'=>'width:74%; background-color: rgba(255,90,0,.8); padding: 5px; color:white; border-radius:0px; border:none;',
				'div' => false
				));

		$options = array(
		    'label' => 'Go!',
		    'class'=>'btn btn-inverse',
		    'div' => false,
		    'style' => 'padding: 5px; border-radius:0px; border:none;'
		);
		echo $this->Form->end($options);
		echo '</div>';
		?>
	</div>
		<div class="text-center ndt-link"><a href="./Posts/seek?word=Facebook">Facebook</a></div>
		<div class="text-center ndt-link"><a href="./Posts/seek?word=Wordpress">Wordpress</a></div>
		<div class="text-center ndt-link"><a href="./Posts/seek?word=Entreprise">Entreprise<av></div>
		<div class="text-center ndt-link"><a href="./Posts/seek?word=Logo">Logo</a></div>
		<div class="text-center ndt-link"><a href="./Posts/seek?word=Contrat">Contrat</a></div>
		<div class="text-center ndt-link"><a href="./Posts/seek?word=Logiciel">Logiciel</a></div>
		<div class="text-center ndt-link"><a href="./Posts/seek?word=Image">Image</a></div>



<!--
	<h3>Notes</h3>
		<h1>Base de donnee</h1>
		<p>entreprise
			- Il manque une image pour l'entreprise qui ajoute un job. ( Entreprise, Contract, logo entreprise ? )
		</p>
		<h1>Add User</h1>
		<p>
			- Username qui donne l'erreur de l'adresse email<br/>
			- L'Avatar doit changer d'input (input text pas bon)
		</p>
		
	<h3>Blog posts</h3>-->
	


	</div>
</div>
</div>
</div>

<hr>
<div class="row-fluid show-grid">
	<div class="span12">
		<h1 class="text-center" style="font-weight:100;">La Licence Professionnelle</h1>	
		<h5 class="text-center" style="color:#888;font-weight:100;">
« Les chocs culturels stimulent la créativité. »
	</h5>
	</div> 
</div>
<!-- - - - - - -  - - -  - - - - - - - - - - - - - - - - - -  -  - - -   - - - - - -->
<hr>
<div class="row-fluid show-grid">
	<div class="span3" style="color:#5a5a5a;">	
		[CIBLE]
	</div>
	<div class="span9" style="color:#5a5a5a;">	
		<h3>Objectifs de la formation</h3>
		Maîtriser les technologies internet <br/>
	    Adapter les supports web à la téléphonie mobile <br/>
	    Former des professionnels pour les services web mobiles <br/>
	    Développer et maîtriser la conception des messages courts pour le contenu et le contenant <br/>
	    Acquérir une base solide en informatique et en traitement de l’information appliquée à la fourniture et à l’utilisation des services mobiles <br/>
	    Savoir participer à un projet de développement d’application pour Internet, sur de multiples supports,… <br/>
	</div>
</div>
<!-- - - - - - -  - - -  - - - - - - - - - - - - - - - - - -  -  - - -   - - - - - -->
<hr>
<div class="row-fluid show-grid">
	<div class="span9" style="color:#5a5a5a;">	
		<h3>Niveau de formation requis</h3>
		DUT services et réseaux de communication, DUT informatique, DUT réseaux et télécommunications <br/>
		L2 scientifique <br/>
		BTS informatique <br/>
		Candidats bénéficiant d'une Validation d’Études Supérieures en France ou à l'étranger (VES) ou Validation d'Acquis de l'Expérience (VAE)<br/>
	</div>
	<div class="span3" style="color:#5a5a5a;">	
		[REQUIS]
	</div>
</div>
<!-- - - - - - -  - - -  - - - - - - - - - - - - - - - - - -  -  - - -   - - - - - -->
<hr>
<div class="row-fluid show-grid">
	<div class="span3" style="color:#5a5a5a;">	
		[DIPLOME]
	</div>
	<div class="span9" style="color:#5a5a5a;">	
		<h3>Diplôme délivré</h3>
		Licence Professionnelle / Niveau II<br/>
	</div>
</div>
<!-- - - - - - -  - - -  - - - - - - - - - - - - - - - - - -  -  - - -   - - - - - -->
<hr>
<div class="row-fluid show-grid">
	<div class="span9" style="color:#5a5a5a;">	
		<h3>Contenus pédagogiques</h3>
		Cultures scientifiques et technologiques > 40 h
Programmation, Communication, Méthodologie,…<br/>

Architectures et services mobiles > 180 h
Systèmes informatiques, programmation mobile, marketing nomade, interface homme-machines mobiles,...<br/>

Interface nomade & Communication mobile > 120 h
Programmation mobile, messages courts, ergonomie et navigation nomades, interculturalité et nomadisme,…<br/>

Projet, Organisation et Communication > 60 h<br/>

Immersion professionnelle en stage et projet > 80h
Projet professionnel, Stage en entreprise (14 semaines)<br/>
	</div>
	<div class="span3" style="color:#5a5a5a;">	
		[CONTENUS]
	</div>
</div>
<!-- - - - - - -  - - -  - - - - - - - - - - - - - - - - - -  -  - - -   - - - - - -->
<hr>
<div class="row-fluid show-grid">
	<div class="span3" style="color:#5a5a5a;">	
		[TAFF]
	</div>
	<div class="span9" style="color:#5a5a5a;">	
		<h3>Alternance et stages</h3>
		Périodes en entreprises sous contrat de travail ou convention de stage d’une durée minimum de 14 semaines<br/>
	</div>

</div>
<!-- - - - - - -  - - -  - - - - - - - - - - - - - - - - - -  -  - - -   - - - - - -->
<hr>
<div class="row-fluid show-grid">
	<div class="span9" style="color:#5a5a5a;">	
		<h3>Compétences à l’issue de la formation</h3>
	Connaissances des techniques de développement web<br/>
    Portage du web sur les dispositifs mobiles<br/>
    Conception des contenus à messages courts<br/>
    Connaissance de l’informatique et du traitement de l’information appliqués à la fourniture et à l’utilisation des services mobiles<br/>
    Intégration pour différents supports (ordinateur de poche, téléphone cellulaire,...)<br/>
    Encadrement d’une équipe de développement<br/>
	</div>
	<div class="span3" style="color:#5a5a5a;">	
		[COMPETENCES]
	</div>
</div>
<!-- - - - - - -  - - -  - - - - - - - - - - - - - - - - - -  -  - - -   - - - - - -->
<hr>
<div class="row-fluid show-grid">
	<div class="span3" style="color:#5a5a5a;">	
		[PROFESSIONNEL]
	</div>
	<div class="span9" style="color:#5a5a5a;">	
		<h3>Le professionnel issu de cette formation est en mesure de :</h3>
	Maîtriser le développement web<br/>
    Être opérationnel pour le déploiement de sites web sur des dispositifs mobiles (PDA, téléphone cellulaire,…)<br/>
    Développer les applications pour de multiples supports<br/>
    Concevoir des interfaces technologiques nomades<br/>
    Faire communiquer les applications présentes sur différents périphériques mobiles<br/>
    Concevoir des contenus courts pour de la  mobilité<br/>
    Élaborer des logiciels pour les systèmes nomades communicants (PDA,...) et les réseaux  industriels<br/>
	</div>

</div>
<!-- - - - - - -  - - -  - - - - - - - - - - - - - - - - - -  -  - - -   - - - - - -->
<hr>
<div class="row-fluid show-grid">
	<div class="span9" style="color:#5a5a5a;">	
		<h3>Débouchés</h3>
    Webmaster<br/>
    Techniciens supérieurs et assistants ingénieur pour les sociétés de services en ingénierie informatique (SSII), les grandes entreprises  industrielles et les PME / PMI, dans les bureaux d'études, les cabinets de conseils, les agences de communication, les organismes d'intégration et de mise en service des systèmes, les services après vente, etc.<br/>
    Techniciens dans les sociétés de service mobile<br/>
	</div>
	<div class="span3" style="color:#5a5a5a;">	
		[DEBOUCHES]
	</div>
</div>
<!-- - - - - - -  - - -  - - - - - - - - - - - - - - - - - -  -  - - -   - - - - - -->













<br/><br/>


<?php echo $this->Js->writeBuffer(); ?>
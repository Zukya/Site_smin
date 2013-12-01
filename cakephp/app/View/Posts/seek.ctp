<!-- File: /app/View/Posts/seek.ctp -->

<style>
.delinked {
	color: #333;

}
.delinked:hover {
	color: #333;
	text-decoration:none;
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
	<div class="span10">
		<div class="row-fluid show-grid">
		<?php $max_caracteres=175; ?>
			<?php $del = 0; ?>
		<?php foreach ($posts as $post): ?>
			<?php $del++; ?>
			    <div class="span6" style="min-height:300px;">
			    
			       <?php echo $this->Html->image('http://placehold.it/475x235', array('alt' => 'Image de base')); ?>
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
			 { echo '</div><br><div class="row-fluid show-grid">';}
			 ?>
		<?php endforeach; ?>
		
		<?php echo $this->Paginator->prev(' << ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?> -
		<?php echo $this->Paginator->next(__('next') .  ' >> ', array(), null, array('class' => 'next disabled')); ?>
		
		</div>
	</div>
 <div class="span2">
	<div class="row-fluid show-grid"> 
	 <div class="span3 text-center" style="color:white; background-color: #333;"><i class=" icon-search icon-white"></i></div>
	 <div class="span3 text-center" style="color:white; background-color: #333;"><i class=" icon-camera icon-white"></i></div>
	<div class="span3 text-center" style="color:white; background-color: #333;;"><i class=" icon-tags icon-white"></i></div>
	<div class="span3 text-center" style="color:white; background-color: #333;"><i class=" icon-adjust icon-white"></i></div>
	 <br/>
	 </div><hr>
	 <div class="row-fluid show-grid">
	  <div class="span12">
	  <input style="max-width:90%;" type="text" placeholder="Nom d'article...">
	<h3>Notes</h3>
		<h1>Base de donnee</h1>
		<p>
			- Il manque une image pour l'entreprise qui ajoute un job. ( Entreprise, Contract, logo entreprise ? )
		</p>
		<h1>Add User</h1>
		<p>
			- Username qui donne l'erreur de l'adresse email<br/>
			- L'Avatar doit changer d'input (input text pas bon)
		</p>
		
	<h3>Blog posts</h3>
	
	</div>
</div>
</div>
</div>
<?php 
/*
 * A mettre si on met la pagiantion en AJAX :
 * echo $this->Js->writeBuffer();
*/
?>
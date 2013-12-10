<!-- File: /app/View/Users/view.ctp -->

<?php
	if(!isset($user['User']['avatar'])) 
		echo $this->Html->image('http://placehold.it/475x235', array('alt' => 'Image de base'));
	else {
		echo $this->Html->image($user['User']['avatar'], array('alt' => 'CakePHP','class'=>'img_post img-polaroid',
			'style'=>'min-height:200px; height:200px; width:200px; min-width:200px;'
			)); 
	} 
?>


<h1><?php echo h($user['User']['name']); echo h($user['User']['fname']);?></h1>

<p>Inscrit le : <?php echo $user['User']['created']; ?></p>

<p>Date de naissance : <?php echo $user['User']['birthdate'];?></p>

<p>Ville : <?php echo $user['User']['city'];?> </p>

<p>Comp&eacute;tences : <?php echo $user['User']['skills'];?> </p>

<p>Situation actuelle : <?php echo $user['User']['context'];?> </p>

<p>Hobbies : <?php echo $user['User']['hobbies'];?> </p>






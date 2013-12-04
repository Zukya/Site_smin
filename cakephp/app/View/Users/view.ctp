<!-- File: /app/View/Users/view.ctp -->

<img src="<?php echo $user['User']['avatar'];?>" />

<h1><?php echo h($user['User']['name']); echo h($user['User']['fname']);?></h1>

<p>Inscrit le : <?php echo $user['User']['created']; ?></p>

<p>Date de naissance : <?php echo $user['User']['birthdate'];?></p>

<p>Ville : <?php echo $user['User']['city'];?> </p>

<p>Compétences : <?php echo $user['User']['skills'];?> </p>

<p>Situation actuelle : <?php echo $user['User']['context'];?> </p>

<p>Hobbies : <?php echo $user['User']['hobbies'];?> </p>






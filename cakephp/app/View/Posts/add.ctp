<!-- File: /app/View/Posts/add.ctp -->

<style>
input, textarea {width:90%; max-width:90%;}
</style>

<?php echo $this->Form->create('Post', array('class'=>'form-horizontal','type'=>'file')); ?>
<div class="control-group">
	<div class="controls">
		<h1 >Ajouter un article</h1>
	</div>
</div>

<div class="control-groupe">
	<div class="controls">
		<a href="#" class="btn btn-primary disabled">
			Rédacteur :
			<?php echo $this->Session->read('Auth.User.fname'); 
			echo ' ';
			 echo $this->Session->read('Auth.User.name'); 
			 echo ' (';
			 switch ($this->Session->read('Auth.User.level')) {
			    case 0:
			        echo "Administrateur";
			        break;
			    case 1:
			        echo "Modérateur";
			        break;
			    case 2:
			        echo "Utilisateur";
			        break;
			}
			echo ')';
			?>
		</a>
		<?php echo $this->Html->link('Retour', '/', array('class' => 'btn btn-danger')); ?>
	</div>
</div>

<?php 
echo '<hr>';

echo $this->Form->input('title', 
	array(	'label'		=> array('class'=>'control-label', 'text'=>'Titre*'),
			'placeholder'	=> 'Titre de mon article...',
			'before'		=> '',
			'after'		 	=> '</div>',
			'between' 		=> '<div class=\'controls\'>',
			'div' 			=> array('class' => 'control-group')));
echo '<hr>';

echo $this->Form->input('content', 
	array(	'label'			=> array('class'=>'control-label', 'text'=>'Contenu*'),
			'rows' 			=> '5',
			'placeholder'	=> 'Bonjour, voici mon article sur ...',
			'before'		=> '',
			'after' 		=> '</div>',
			'between' 		=> '<div class=\'controls\'>',
			'div' 			=> array('class' => 'control-group')));

$user_id = $this->Session->read('Auth.User.id');
echo $this->Form->input('user_id', array('type' => 'hidden', 'default' => $user_id));

echo '<hr>';

echo $this->Form->input('image_file', 
	array(	'label'			=> array('class'=>'control-label', 'text'=>'Image'),
			'type' 			=> 'file',
			'before'		=> '',
			'after' 		=> '</div>',
			'between'	 	=> '<div class=\'controls\'>',
			'div' 			=> array('class' => 'control-group')));

echo '<hr>';

$options = array(
    'label' => 'Accepter',
    'div' => array(
        'class' => 'controls',
    ),
    'class'=>'btn btn-primary'
);
echo $this->Form->end($options);


?>
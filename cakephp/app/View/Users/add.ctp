<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('name', array(
        'label' => 'Nom'
        ));
        echo $this->Form->input('fname', array(
        'label' => 'Prénom'
        ));
        echo $this->Form->input('username', array(
        'label' => 'Adresse e-mail',
        'type' => 'email'
        ));
        echo $this->Form->input('password', array(
        'label' => 'Mot de passe'
        ));
        
        echo $this->Form->input('birthdate', array(
     	'label' => 'Date de naissance'
        'type'=>'date',
     	'dateFormat'=>'DMY',
     	'minYear'=>date('Y')-100,
     	'maxYear'=>date('Y'),
        'allowEmpty' => true
));

        echo $this->Form->input('city', array(
        'label' => 'Ville'
        ));
        echo $this->Form->input('skills', array(
        'label' => 'Compétences'
        ));
        echo $this->Form->input('context', array(
        'label' => 'Situation actuelle'
        'options' => array('En recherche de CDI','En recherche de Stage','En recherche d alternance','Auto-Entrepreneur','Autre'),
        'multiple' => 'multiple'
        ));
        echo $this->Form->input('hobbies', array(
        'label' => 'Hobbies'
        ));
        echo $this->Form->input('avatar');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
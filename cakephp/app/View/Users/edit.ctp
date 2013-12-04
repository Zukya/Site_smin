<!-- app/View/Users/edit.ctp -->
<div class="users form">
<?php echo $this->Form->create('User', array('action' => 'edit')); ?>

    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <?php 
        echo $this->Form->hidden('id');
        echo $this->Form->input('name', array(
        'label' => 'Nom'
        ));
        echo $this->Form->input('fname', array(
        'label' => 'Pr&eacutenom'
        ));
        echo $this->Form->input('username', array(
        'label' => 'Adresse e-mail',
        'type' => 'email'
        ));
        echo $this->Form->input('password', array(
        'label' => 'Mot de passe'
        ));
        
        echo $this->Form->input('birthdate', array(
     	'label' => 'Date de naissance',
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
        'label' => 'Comp&eacutetences'
        ));
        
        echo $this->Form->input('context', array(
        'label' => 'Situation actuelle',
        'options' => array(
        'En recherche de CDI' => 'En recherche de CDI',
        'En recherche de Stage' => 'En recherche de Stage',
        'En recherche d alternance' => 'En recherche d alternance',
        'Auto-Entrepreneur' => 'Auto-Entrepreneur',
        'Autre' => 'Autre')
        ));
        
        echo $this->Form->input('hobbies', array(
        'label' => 'Hobbies'
        ));
        
        echo $this->Form->input('avatar');
        
          
    
   // echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->end('Sauvegarder le Post');
    ?>
    
    
    
    
    
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
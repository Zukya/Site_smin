<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('name');
        echo $this->Form->input('fname');
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('birthdate');
        echo $this->Form->input('city');
        echo $this->Form->input('skills');
        echo $this->Form->input('context');
        echo $this->Form->input('hobbies');
        echo $this->Form->input('avatar');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
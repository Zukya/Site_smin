<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>

<?php
echo $this->Html->link('Return', '/', array('class' => 'button'));
?>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('content', array('rows' => '3'));
$user_id = $this->Session->read('Auth.User.id');
echo $this->Form->input('user_id', array('type' => 'hidden', 'default' => $user_id));
echo $this->Form->end('Save Post');
?>


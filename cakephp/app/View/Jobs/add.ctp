<!-- File: /app/View/Jobs/add.ctp -->

<h1>Add Job</h1>
<?php
echo $this->Form->create('Job');
echo $this->Form->input('title');
echo $this->Form->input('content', array('rows' => '3'));
echo $this->Form->input('firm');
echo $this->Form->input('contract');
echo $this->Form->input('checked', array('type' => 'hidden', 'default' => 0));
echo $this->Form->end('Save Job');
?>

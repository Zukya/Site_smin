<!-- File: /app/View/Posts/index.ctp  (edit links added) -->
<?php 
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
?>



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

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Action</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?></td>
        <td><?php echo $post['Post']['content']; ?></td>
        <td>
     		 <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
        <td><?php echo $post['Post']['modified']; ?></td>
    </tr>
<?php endforeach; ?>

</table>













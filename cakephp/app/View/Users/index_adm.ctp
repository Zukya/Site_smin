<!-- File: /app/View/Posts/index.ctp  (edit links added) -->

<h1>Users</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Pr&eacutenom</th>
        <th>Date d'inscription</th>
    </tr>

<!-- Here's where we loop through our $users array, printing out user info -->

<?php foreach ($Users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['name'], array('action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $this->Html->link($user['User']['fname'], array('action' => 'view', $user['User']['id'])); ?>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
        <td>
                  <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
        </td>
        
        <td>

      <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            </td>
            
        
    </tr>
<?php endforeach; ?>

</table>
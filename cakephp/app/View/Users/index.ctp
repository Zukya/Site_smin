<!-- File: /app/View/Posts/index.ctp  (edit links added) -->

<div class="row-fluid show-grid">
    <div class="span12">
        <h1 class="text-center" style="font-weight:100;">Les Membres de Squarecom</h1> 
        <h5 class="text-center" style="color:#888;font-weight:100;">
« Une communauté se reconnaît dans les plus entreprenants et les plus inventifs d’entre les siens. »   </h5>
        <hr>
    </div> 
</div> 

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
       
            
        
    </tr>
<?php endforeach; ?>

</table>
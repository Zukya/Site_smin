<!-- File: /app/View/Jobs/index_adm.ctp  (edit links added) -->

<div class="row-fluid show-grid">
    <div class="span12">
        <h1 class="text-center" style="font-weight:100;">Les Offres d'Emplois <br/> (MODE EDITION)</h1> 
        <h5 class="text-center" style="color:#888;font-weight:100;">
« Nous n'avons point d'Etat. Nous avons des administrations. » </h5>
        <hr>
    </div> 
</div>


<h1>Blog jobs</h1>
<p><?php echo $this->Html->link("Rajouter une offre d'emploi", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Entreprise</th>
        <th>Contrat</th>
        <th>Etat</th>
        <th>Cr&eacutee</th>
        <th>Modifi&eacute</th>
        <th>Editer</th>
        <th>Supprimer</th>
    </tr> 
<!-- Here's where we loop through our $jobs array, printing out job info -->

<?php foreach ($jobs as $job): ?>
    <tr>
        <td><?php echo $job['Job']['id']; ?></td>
        <td><?php echo $this->Html->link($job['Job']['title'], array('action' => 'view', $job['Job']['id'])); ?></td>
        <td><?php echo $job['Job']['content']; ?></td>
        <td><?php echo $job['Job']['firm']; ?></td>
        <td><?php echo $job['Job']['contract']; ?></td>
        <td><?php if ($job['Job']['approved']==0) { echo 'Non verifi&eacute';} else echo 'Verifié'; ?></td>
        <td><?php echo $job['Job']['created']; ?></td>
        <td><?php echo $job['Job']['modified']; ?></td>
        <td>
			<?php echo $this->Html->link('Editer', array('action' => 'edit', $job['Job']['id'])); ?>
        </td>
        <td>
        	<?php echo $this->Html->link('Supprimer', array('action' => 'delete', $job['Job']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>










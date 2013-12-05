<!-- File: /app/View/Jobs/index.ctp  (edit links added) -->



<h1>Blog jobs</h1>
<p><?php echo $this->Html->link("Add Job", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Firm</th>
        <th>Contract</th>
        <th>Option</th>
        <th>Approved</th>
        <th>Created</th>
        <th>Modified</th>
    </tr> 
<!-- Here's where we loop through our $jobs array, printing out job info -->

<?php foreach ($jobs as $job): ?>
    <tr>
        <td><?php echo $job['Job']['id']; ?></td>
        <td><?php echo $this->Html->link($job['Job']['title'], array('action' => 'view', $job['Job']['id'])); ?></td>
        <td><?php echo $job['Job']['content']; ?></td>
        <td><?php echo $job['Job']['firm']; ?></td>
        <td><?php echo $job['Job']['contract']; ?></td>
        <td>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $job['Job']['id'])); ?>
        </td>
        <td><?php if ($job['Job']['approved']==0) { echo 'Not approved';} else echo 'Approved'; ?></td>
        <td><?php echo $job['Job']['created']; ?></td>
        <td><?php echo $job['Job']['modified']; ?></td>
    </tr>
<?php endforeach; ?>

</table>










<!-- File: /app/View/Jobs/view.ctp -->

<h1><?php echo h($job['Job']['title']); ?></h1><br/>

<p><small>Created: <?php echo $job['Job']['created']; ?></small></p>
<p><small>Modified: <?php echo $job['Job']['modified']; ?></small></p><br/>

<p><?php echo h($job['Job']['content']); ?></p><br/>

<p><small>Entreprise : <?php echo $job['Job']['firm']; ?></small></p>
<p><small>Contract : <?php echo $job['Job']['contract']; ?></small></p>
<!-- File: /app/View/Posts/view.ctp -->

<h3><?php echo h($post['Post']['title']); ?></h3>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['content']); ?></p>
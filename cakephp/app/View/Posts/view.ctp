<!-- File: /app/View/Posts/view.ctp -->

<div class="row-fluid show-grid">
	<div class="span10">
		<div class="row-fluid show-grid">
			<h3><?php echo h($post['Post']['title']); ?></h3>
			<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
			<p><?php echo h($post['Post']['content']); ?></p>
		</div>
	</div>
	<div class="span2">
		<div class="row-fluid show-grid">
			<div class="span3 text-center"
				style="color: white; background-color: #333;">
				<i class=" icon-search icon-white"></i>
			</div>
			<div class="span3 text-center"
				style="color: white; background-color: #333;">
				<i class=" icon-camera icon-white"></i>
			</div>
			<div class="span3 text-center"
				style="color: white; background-color: #333;">
				<i class=" icon-tags icon-white"></i>
			</div>
			<div class="span3 text-center"
				style="color: white; background-color: #333;">
				<i class=" icon-adjust icon-white"></i>
			</div>
			<br />
		</div>
		<hr>
		<div class="row-fluid show-grid">
			<div class="span12">
				<!-- <input style="max-width:90%;" type="text" placeholder="Nom d'article...">  -->		
	  <?php
		echo $this->Form->create('Post', array('action' => 'seek', 'type' => 'get'));
		echo $this->Form->input('word', array('default' => 'Nom d\'article...'));
		echo $this->Form->end('Save Post');
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
	</div>
		</div>
	</div>
</div>
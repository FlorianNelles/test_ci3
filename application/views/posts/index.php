<!-- flashdata messages -->

<?php if($this->session->flashdata('post_edit')): ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_edit').'</p>'; ?>

<?php elseif ($this->session->flashdata('post_created')): ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>

<?php elseif ($this->session->flashdata('post_delete')): ?>
	<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('post_delete').'</p>'; ?>

<?php endif; ?>



<!-- begin content -->

<h2><?= $title ?></h2>

<p><a class="btn btn-success" href="<?php echo site_url('/posts/create');?>">Create a new message</a></p>

<?php foreach($posts as $post) : ?>
	<hr>
	<h3><?php echo $post['title']; ?></h3>

	Created at: <?php echo $post['created_at']; ?>
	<br>
	<?php echo $post['body']; ?>
	<br><br>

	<p><a class="btn btn-primary" href="<?php echo site_url('/posts/read/'.$post['id']);?>">More</a></p>

<?php endforeach; ?>

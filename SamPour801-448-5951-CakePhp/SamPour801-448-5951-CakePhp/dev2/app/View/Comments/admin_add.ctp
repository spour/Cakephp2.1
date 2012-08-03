<h2>New Comment</h2>
<form action="<?php echo $this->Html->url('/admin/comments/add'); ?>" method="post">
<div class="optional"> 
	<?php echo $this->Form->labelTag('Comment/post_id', 'Post');?>
 	<?php echo $this->Html->selectTag('Comment/post_id', $posts, $this->Html->tagValue('Comment/post_id'), array(), array(), true);?>
	<?php echo $this->Html->tagErrorMsg('Comment/post_id', 'Please select the Post.') ?>
</div>
<div class="optional"> 
	<?php echo $this->Form->labelTag('Comment/name', 'Name');?>
 	<?php echo $this->Html->input('Comment/name', array('size' => '60'));?>
	<?php echo $this->Html->tagErrorMsg('Comment/name', 'Please enter the Name.');?>
</div>
<div class="optional"> 
	<?php echo $this->Form->labelTag('Comment/email', 'Email');?>
 	<?php echo $this->Html->input('Comment/email', array('size' => '60'));?>
	<?php echo $this->Html->tagErrorMsg('Comment/email', 'Please enter the Email.');?>
</div>
<div class="optional"> 
	<?php echo $this->Form->labelTag( 'Comment/text', 'Text' );?>
 	<?php echo $this->Html->textarea('Comment/text', array('cols' => '60', 'rows' => '10'));?>
	<?php echo $this->Html->tagErrorMsg('Comment/text', 'Please enter the Text.');?>
</div>
<div class="submit">
	<?php echo $this->Html->submit('Add');?>
</div>
</form>
<ul class="actions">
<li><?php echo $this->Html->link('List Comments', '/admin/comments/index')?></li>
<li><?php echo $this->Html->link('View Posts', '/admin/posts/index/');?></li>
<li><?php echo $this->Html->link('Add Posts', '/admin/posts/add/');?></li>
</ul>

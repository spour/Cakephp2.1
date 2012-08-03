<h2>New Tag</h2>
<form action="<?php echo $this->Html->url('/tags/add'); ?>" method="post">
<div class="optional"> 
	<?php echo $this->Form->labelTag('Tag/tag', 'Tag');?>
 	<?php echo $this->Html->input('Tag/tag', array('size' => '60'));?>
	<?php echo $this->Html->tagErrorMsg('Tag/tag', 'Please enter the Tag.');?>
</div>
<div class="optional"> 
	<?php echo $this->Form->labelTag('Post/Post', 'Related Posts');?>
 	<?php echo $this->Html->selectTag('Post/Post', $posts, $selectedPosts, array('multiple' => 'multiple', 'class' => 'selectMultiple'), array(), false);?>
	<?php echo $this->Html->tagErrorMsg('Post/Post', 'Please select the Related Posts.');?>
</div>
<div class="submit">
	<?php echo $this->Html->submit('Add');?>
</div>
</form>
<ul class="actions">
<li><?php echo $this->Html->link('List Tags', '/tags/index')?></li>
</ul>

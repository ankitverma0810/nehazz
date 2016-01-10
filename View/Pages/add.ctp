<div class="pages form">
<?php echo $this->Form->create('Page'); ?>
	<fieldset>
		<legend><?php echo __('Add Page'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('filename');
		echo $this->Form->input('description');
		echo $this->Form->input('menu');
		echo $this->Form->input('meta_keywords');
		echo $this->Form->input('meta_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pages'), array('action' => 'index')); ?></li>
	</ul>
</div>

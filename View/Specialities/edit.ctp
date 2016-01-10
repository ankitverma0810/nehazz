<div class="specialities form">
<?php echo $this->Form->create('Speciality'); ?>
	<fieldset>
		<legend><?php echo __('Edit Speciality'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('filename');
		echo $this->Form->input('description');
		echo $this->Form->input('status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Speciality.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Speciality.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Specialities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>

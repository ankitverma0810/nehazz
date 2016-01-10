<div class="specialities view">
<h2><?php echo __('Speciality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($speciality['Speciality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($speciality['Speciality']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($speciality['Speciality']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($speciality['Speciality']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($speciality['Status']['title'], array('controller' => 'statuses', 'action' => 'view', $speciality['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($speciality['Speciality']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($speciality['Speciality']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Speciality'), array('action' => 'edit', $speciality['Speciality']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Speciality'), array('action' => 'delete', $speciality['Speciality']['id']), null, __('Are you sure you want to delete # %s?', $speciality['Speciality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Speciality'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>

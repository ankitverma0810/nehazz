<div class="menus view">
<h2><?php echo __('Menu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Id'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['parent_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menu['Status']['title'], array('controller' => 'statuses', 'action' => 'view', $menu['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Menu'), array('action' => 'edit', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Menu'), array('action' => 'delete', $menu['Menu']['id']), null, __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>

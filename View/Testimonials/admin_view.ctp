<div class="testimonials view">
<h2><?php echo __('Testimonial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($testimonial['Status']['title'], array('controller' => 'statuses', 'action' => 'view', $testimonial['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Testimonial'), array('action' => 'edit', $testimonial['Testimonial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Testimonial'), array('action' => 'delete', $testimonial['Testimonial']['id']), null, __('Are you sure you want to delete # %s?', $testimonial['Testimonial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Testimonial'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>

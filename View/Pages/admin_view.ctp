<div class="pages view">
<h2><?php echo __('Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($page['Page']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($page['Page']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($page['Page']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($page['Page']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($page['Page']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo h($page['Page']['menu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keywords'); ?></dt>
		<dd>
			<?php echo h($page['Page']['meta_keywords']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($page['Page']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($page['Page']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($page['Page']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page'), array('action' => 'edit', $page['Page']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Page'), array('action' => 'delete', $page['Page']['id']), null, __('Are you sure you want to delete # %s?', $page['Page']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('action' => 'add')); ?> </li>
	</ul>
</div>

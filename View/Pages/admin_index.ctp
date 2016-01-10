<h2>Pages List</h2>
<br />
<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($pages as $page): ?>
			<tr>
				<td><?php echo h($page['Page']['id']); ?>&nbsp;</td>
				<td><?php echo h($page['Page']['title']); ?>&nbsp;</td>
				<td>
					<?php
						if(!empty($page['Page']['filename'])){
							echo $this->Html->image('/files/pages/'.$page['Page']['filename'], array('width' => 250, 'height' => 100));
						} else {
							echo "";
						}
					?>
				</td>
				<td>
					<a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'edit', $page['Page']['id'])); ?>" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-pencil"></i>
						Edit
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="<?php echo $this->Html->url(array('controller' => 'Pages', 'action' => 'add')); ?>" class="btn btn-primary">
	<i class="entypo-plus"></i>
	Add Page
</a>
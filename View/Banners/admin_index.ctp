<h2>Banners List</h2>
<br />
<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Id</th>
			<th>Image</th>
			<th>URL</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($banners as $banner): ?>
			<tr>
				<td><?php echo h($banner['Banner']['id']); ?>&nbsp;</td>
				<td><?php echo $this->Html->image('/files/banners/'.$banner['Banner']['filename'], array('width' => 300, 'height' => 100)); ?></td>
				<td><?php echo h($banner['Banner']['url']); ?>&nbsp;</td>
				<td>
					<a href="<?php echo $this->Html->url(array('controller' => 'Banners', 'action' => 'delete', $banner['Banner']['id'])); ?>" class="btn btn-danger btn-sm">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="<?php echo $this->Html->url(array('controller' => 'Banners', 'action' => 'add')); ?>" class="btn btn-primary">
	<i class="entypo-plus"></i>
	Add Banner
</a>
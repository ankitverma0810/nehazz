<h2>Galleries List</h2>
<br />
<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Id</th>
			<th>Category</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($galleries as $gallery): ?>
			<tr>
				<td><?php echo h($gallery['Gallery']['id']); ?>&nbsp;</td>
				<td><?php echo h($gallery['Category']['title']); ?>&nbsp;</td>
				<td><?php echo $this->Html->image('/files/gallery/'.$gallery['Gallery']['filename'], array('width' => 100, 'height' => 100)); ?>&nbsp;</td>
				<td>
					<a href="<?php echo $this->Html->url(array('controller' => 'Galleries', 'action' => 'delete', $gallery['Gallery']['id'])); ?>" class="btn btn-danger btn-sm">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="<?php echo $this->Html->url(array('controller' => 'Galleries', 'action' => 'add')); ?>" class="btn btn-primary">
	<i class="entypo-plus"></i>
	Add Image
</a>

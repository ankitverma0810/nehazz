<h2>Menu List</h2>
<br />
<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Id</th>
			<th>Parent</th>
			<th>Title</th>
			<th>Controller</th>
			<th>Link</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($menus as $menu): ?>
			<tr>
				<td><?php echo h($menu['Menu']['id']); ?>&nbsp;</td>
				<td><?php echo h($menu['Parent']['title']); ?>&nbsp;</td>
				<td><?php echo h($menu['Menu']['title']); ?>&nbsp;</td>
				<td><?php echo h($menu['Menu']['controller']); ?>&nbsp;</td>
				<td><?php echo h($menu['Menu']['action']); ?>&nbsp;</td>
				<td id="change_<?php echo $menu['Menu']['id']; ?>_status"><?php echo $menu['Status']['title']; ?></td>
				<td>
					<a href="<?php echo $this->Html->url(array('controller' => 'Menus', 'action' => 'edit', $menu['Menu']['id'])); ?>" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-pencil"></i>
						Edit
					</a>
					
					<?php
						if($menu['Status']['id'] == 1){
					?> 
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left jquery_action_status" id = 'action_<?php echo $menu['Menu']['id']; ?>_Menus' rel="2">
							<i class="entypo-cancel"></i>
							Deactivate
						</a>
					<?php } else {
					?> 
						<a href="#" class="btn btn-success btn-sm btn-icon icon-left jquery_action_status" id = 'action_<?php echo $menu['Menu']['id']; ?>_Menus' rel="1">
							<i class="entypo-check"></i>
							Activate
						</a>
					<?php }	?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="<?php echo $this->Html->url(array('controller' => 'Menus', 'action' => 'add')); ?>" class="btn btn-primary">
	<i class="entypo-plus"></i>
	Add Menu
</a>

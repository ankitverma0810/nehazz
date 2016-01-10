<h2>Specialities List</h2>
<br />
<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Image</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($specialities as $speciality): ?>
			<tr>
				<td><?php echo h($speciality['Speciality']['id']); ?>&nbsp;</td>
				<td><?php echo h($speciality['Speciality']['title']); ?>&nbsp;</td>
				<td><?php echo $this->Html->image('/files/speciality/'.$speciality['Speciality']['filename'], array('width' => 100, 'height' => 100)); ?>&nbsp;</td>
				<td id="change_<?php echo $speciality['Speciality']['id']; ?>_status"><?php echo $speciality['Status']['title']; ?></td>
				<td>
					<a href="<?php echo $this->Html->url(array('controller' => 'Specialities', 'action' => 'edit', $speciality['Speciality']['id'])); ?>" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-pencil"></i>
						Edit
					</a>
					
					<?php
						if($speciality['Status']['id'] == 1){
					?> 
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left jquery_action_status" id = 'action_<?php echo $speciality['Speciality']['id']; ?>_Specialities' rel="2">
							<i class="entypo-cancel"></i>
							Deactivate
						</a>
					<?php } else {
					?> 
						<a href="#" class="btn btn-success btn-sm btn-icon icon-left jquery_action_status" id = 'action_<?php echo $speciality['Speciality']['id']; ?>_Specialities' rel="1">
							<i class="entypo-check"></i>
							Activate
						</a>
					<?php }	?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="<?php echo $this->Html->url(array('controller' => 'Specialities', 'action' => 'add')); ?>" class="btn btn-primary">
	<i class="entypo-plus"></i>
	Add Speciality
</a>

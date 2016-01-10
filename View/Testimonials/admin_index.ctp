<h2>Testimonial List</h2>
<br />
<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Id</th>
			<th>Image</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($testimonials as $testimonial): ?>
			<tr>
				<td><?php echo h($testimonial['Testimonial']['id']); ?>&nbsp;</td>
				<td><?php echo $this->Html->image('/files/testimonial/'.$testimonial['Testimonial']['filename'], array('width' => 100, 'height' => 100)); ?>&nbsp;</td>
				<td id="change_<?php echo $testimonial['Testimonial']['id']; ?>_status"><?php echo $testimonial['Status']['title']; ?></td>
				<td>
					<a href="<?php echo $this->Html->url(array('controller' => 'Testimonials', 'action' => 'edit', $testimonial['Testimonial']['id'])); ?>" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-pencil"></i>
						Edit
					</a>
					
					<?php
						if($testimonial['Status']['id'] == 1){
					?> 
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left jquery_action_status" id = 'action_<?php echo $testimonial['Testimonial']['id']; ?>_Testimonials' rel="2">
							<i class="entypo-cancel"></i>
							Deactivate
						</a>
					<?php } else {
					?> 
						<a href="#" class="btn btn-success btn-sm btn-icon icon-left jquery_action_status" id = 'action_<?php echo $testimonial['Testimonial']['id']; ?>_Testimonials' rel="1">
							<i class="entypo-check"></i>
							Activate
						</a>
					<?php }	?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="<?php echo $this->Html->url(array('controller' => 'Testimonials', 'action' => 'add')); ?>" class="btn btn-primary">
	<i class="entypo-plus"></i>
	Add Testimonial
</a>

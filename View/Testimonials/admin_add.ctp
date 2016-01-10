<div class="testimonials form">
	<h2><?php echo __('Add Testimonial'); ?></h2>
	<br />
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title">All fields have validation rules</div>
		</div>
		<div class="panel-body">
			<?php
				echo $this->Form->create('Testimonial', array('type' => 'file'));
				echo $this->element('admin/testimonial');
				$options = array(
					'label' => 'Submit',
					'class' => 'btn btn-success',
				    'div' => array(
				        'class' => 'form-group',
				    )
				);
				echo $this->Form->end($options);
			?>
		</div>
	</div>
</div>

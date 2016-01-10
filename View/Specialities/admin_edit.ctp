<div class="specialities form">
	<h2><?php echo __('Edit Speciality'); ?></h2>
	<br />
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title">All fields have validation rules</div>
		</div>
		<div class="panel-body">
			<?php
				echo $this->Form->create('Speciality', array('type' => 'file'));
				echo $this->Form->input('id');
				echo $this->element('admin/speciality');
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

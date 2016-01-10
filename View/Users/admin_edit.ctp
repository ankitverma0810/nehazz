<div class="users form">
	<h2><?php echo __('Change Password'); ?></h2>
	<br />
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title">All fields have validation rules</div>
		</div>
		<div class="panel-body">
			<?php
				echo $this->Form->create('User');
				echo $this->Form->input('id');
            	echo $this->Form->input('email', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));
            	echo $this->Form->input('password', array('label' => 'Old Password', 'class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));
            	echo $this->Form->input('new_password', array('type' => 'password', 'required', 'class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));
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


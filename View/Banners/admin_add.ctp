<div class="banners form">
	<h2><?php echo __('Add Image'); ?></h2>
	<br />
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title">All fields have validation rules</div>
		</div>
		<div class="panel-body">
			<?php
				echo $this->Form->create('Banner', array('type' => 'file'));
				echo $this->element('admin/banner');
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

<?php
	echo $this->Form->input('title', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

	echo $this->Form->input('filename', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label'), 'label' => 'Image', 'type' => 'file'));

	echo $this->Form->input('description', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));
?>
	<script type="text/javascript">
	CKEDITOR.replace( 'PageDescription',
		{
			fontSize_sizes : "30/30%;50/50%;75/75%;100/100%;120/120%;150/150%;200/200%;300/300%",
			toolbar :
			[
				['Link', 'Unlink'],
				['Bold', 'Italic','Underline'],
				['FontSize'],
				['TextColor'],
				['NumberedList','BulletedList'],
				['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
				['Source']
			]
		}    
	);
	</script>
<?php
	echo $this->Form->input('page_title', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

	echo $this->Form->input('meta_keywords', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

	echo $this->Form->input('meta_description', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));
?>
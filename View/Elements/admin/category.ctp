<?php
	echo $this->Form->input('title', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

	echo $this->Form->input('filename', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label', 'text' => 'Image'), 'type' => 'file'));

	echo $this->Form->input('status_id', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label'), 'empty' => 'Select Status'));
?>
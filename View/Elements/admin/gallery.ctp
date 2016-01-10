<?php
	echo $this->Form->input('category_id', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label'), 'empty' => 'Select Category'));

	echo $this->Form->input('thumbnail', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label', 'text' => 'Thumb Image'), 'type' => 'file'));

	echo $this->Form->input('filename', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label', 'text' => 'Image'), 'type' => 'file'));
?>
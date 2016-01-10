<?php
	echo $this->Form->input('filename', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label', 'text' => 'Image'), 'type' => 'file'));

	echo $this->Form->input('url', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));
?>
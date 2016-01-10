<?php
	echo $this->Form->input('parent_id', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label'), 'empty' => 'Select Parent'));

	echo $this->Form->input('title', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label', 'text' => 'Menu Name')));

	echo $this->Form->input('controller', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

	echo $this->Form->input('action', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label', 'text' => 'Link')));

	echo $this->Form->input('status_id', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label'), 'empty' => 'Select Status'));
?>
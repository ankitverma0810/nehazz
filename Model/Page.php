<?php
App::uses('AppModel', 'Model');

class Page extends AppModel {

	public $settings = array('location' => 'files/pages');
    var $actsAs = array('attachable');

	public $displayField = 'title';

	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}

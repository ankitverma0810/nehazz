<?php

App::uses('AppModel', 'Model');



class Banner extends AppModel {



	public $settings = array('location' => 'files/banners');

    var $actsAs = array('attachable');



	public $validate = array(

		'filename' => array(

			'rule' => array('extension',array('jpeg','jpg','png','gif')),

			'message' => 'Invalid file',

			//'allowEmpty' => true,

			//'required' => false,

			//'last' => false, // Stop validation after this rule

			'on' => 'create', // Limit validation to 'create' or 'update' operations

		),

		'url' => array(

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


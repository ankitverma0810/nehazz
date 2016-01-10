<?php

App::uses('AppModel', 'Model');



class Speciality extends AppModel {



	public $settings = array('location' => 'files/speciality');

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

		'filename' => array(

			'rule' => array('extension',array('jpeg','jpg','png','gif')),

			'message' => 'Invalid file',

			//'allowEmpty' => true,

			//'required' => false,

			//'last' => false, // Stop validation after this rule

			'on' => 'create', // Limit validation to 'create' or 'update' operations

		),

		'description' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

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

		'status_id' => array(

			'numeric' => array(

				'rule' => array('numeric'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

	);



	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(

		'Status' => array(

			'className' => 'Status',

			'foreignKey' => 'status_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		)

	);

}


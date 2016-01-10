<?php

App::uses('AppModel', 'Model');



class Gallery extends AppModel {



	public $settings = array('location' => 'files/gallery');

    var $actsAs = array('attachable', 'thumbnail');



	public $useTable = 'gallery';



	public $validate = array(

		'category_id' => array(

			'numeric' => array(

				'rule' => array('numeric'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'thumbnail' => array(

			'rule' => array('extension',array('jpeg','jpg','png','gif')),

			'message' => 'Invalid file',

			//'allowEmpty' => true,

			//'required' => false,

			//'last' => false, // Stop validation after this rule

			'on' => 'create', // Limit validation to 'create' or 'update' operations

		),

		'filename' => array(

			'rule' => array('extension',array('jpeg','jpg','png','gif')),

			'message' => 'Invalid file',

			//'allowEmpty' => true,

			//'required' => false,

			//'last' => false, // Stop validation after this rule

			'on' => 'create', // Limit validation to 'create' or 'update' operations

		),

	);



	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(

		'Category' => array(

			'className' => 'Category',

			'foreignKey' => 'category_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		)

	);

}


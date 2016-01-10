<?php
/**
 * GalleryFixture
 *
 */
class GalleryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gallery';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'filename' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'filename' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-01-21 10:24:23',
			'modified' => '2015-01-21 10:24:23'
		),
	);

}

<?php
App::uses('Menu', 'Model');

/**
 * Menu Test Case
 *
 */
class MenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.menu',
		'app.status',
		'app.category',
		'app.gallery',
		'app.speciality',
		'app.testimonial',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Menu = ClassRegistry::init('Menu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Menu);

		parent::tearDown();
	}

}

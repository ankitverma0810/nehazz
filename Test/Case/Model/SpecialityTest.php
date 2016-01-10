<?php
App::uses('Speciality', 'Model');

/**
 * Speciality Test Case
 *
 */
class SpecialityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.speciality',
		'app.status',
		'app.category',
		'app.gallery',
		'app.menu',
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
		$this->Speciality = ClassRegistry::init('Speciality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Speciality);

		parent::tearDown();
	}

}

<?php
App::uses('Gallery', 'Model');

/**
 * Gallery Test Case
 *
 */
class GalleryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gallery',
		'app.category',
		'app.status',
		'app.menu',
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
		$this->Gallery = ClassRegistry::init('Gallery');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gallery);

		parent::tearDown();
	}

}

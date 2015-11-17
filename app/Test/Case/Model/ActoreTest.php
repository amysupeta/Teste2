<?php
App::uses('Actore', 'Model');

/**
 * Actore Test Case
 *
 */
class ActoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Actore = ClassRegistry::init('Actore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actore);

		parent::tearDown();
	}

}

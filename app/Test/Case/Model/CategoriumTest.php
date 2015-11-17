<?php
App::uses('Categorium', 'Model');

/**
 * Categorium Test Case
 *
 */
class CategoriumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categorium = ClassRegistry::init('Categorium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categorium);

		parent::tearDown();
	}

}

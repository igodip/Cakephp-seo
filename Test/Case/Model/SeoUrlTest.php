<?php
App::uses('SeoUrl', 'Seo.Model');

/**
 * SeoUrl Test Case
 *
 */
class SeoUrlTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.seo.seo_url'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SeoUrl = ClassRegistry::init('Seo.SeoUrl');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SeoUrl);

		parent::tearDown();
	}

}

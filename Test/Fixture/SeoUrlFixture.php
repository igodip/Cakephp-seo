<?php
/**
 * SeoUrlFixture
 *
 */
class SeoUrlFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'location' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lastmod' => array('type' => 'date', 'null' => false, 'default' => null),
		'changefreq' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'priority' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID' => 1,
			'location' => 'Lorem ipsum dolor sit amet',
			'lastmod' => '2013-06-10',
			'changefreq' => 'Lorem ipsum dolor ',
			'priority' => 1
		),
	);

}

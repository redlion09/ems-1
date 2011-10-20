<?php
/* MiscellaneousFee Fixture generated on: 2011-10-20 08:56:04 : 1319072164 */
class MiscellaneousFeeFixture extends CakeTestFixture {
	var $name = 'MiscellaneousFee';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'report_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e9f71a4-cfe0-4f0e-8340-457b0be92463',
			'description' => 'Lorem ipsum dolor sit amet',
			'amount' => 1,
			'report_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}

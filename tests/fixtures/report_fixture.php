<?php
/* Report Fixture generated on: 2011-10-20 08:56:06 : 1319072166 */
class ReportFixture extends CakeTestFixture {
	var $name = 'Report';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'day' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'breakfast' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'lunch' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'dinner' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'liquidation_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e9f71a6-886c-43eb-9537-457b0be92463',
			'day' => 'Lorem i',
			'date' => '2011-10-20',
			'breakfast' => 1,
			'lunch' => 1,
			'dinner' => 1,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'liquidation_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}

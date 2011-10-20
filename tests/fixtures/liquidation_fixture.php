<?php
/* Liquidation Fixture generated on: 2011-10-20 08:56:04 : 1319072164 */
class LiquidationFixture extends CakeTestFixture {
	var $name = 'Liquidation';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lodging' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '6,2'),
		'total' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '7,2'),
		'isAccepted' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e9f71a4-c898-4564-bb7b-457b0be92463',
			'lodging' => 1,
			'total' => 1,
			'isAccepted' => 1,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'location_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}

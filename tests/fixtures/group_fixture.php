<?php
/* Group Fixture generated on: 2011-10-20 08:56:03 : 1319072163 */
class GroupFixture extends CakeTestFixture {
	var $name = 'Group';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'group' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 14, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e9f71a3-d2b0-4182-b161-457b0be92463',
			'group' => 'Lorem ipsum ',
			'created' => '2011-10-20 08:56:03',
			'modified' => '2011-10-20 08:56:03'
		),
	);
}

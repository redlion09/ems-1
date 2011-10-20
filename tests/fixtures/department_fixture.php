<?php
/* Department Fixture generated on: 2011-10-20 08:56:03 : 1319072163 */
class DepartmentFixture extends CakeTestFixture {
	var $name = 'Department';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'department' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 29, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e9f71a3-e050-4597-ba6e-457b0be92463',
			'department' => 'Lorem ipsum dolor sit amet'
		),
	);
}

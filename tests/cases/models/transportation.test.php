<?php
/* Transportation Test cases generated on: 2011-10-20 08:56:07 : 1319072167*/
App::import('Model', 'Transportation');

class TransportationTestCase extends CakeTestCase {
	var $fixtures = array('app.transportation', 'app.report', 'app.user', 'app.liquidation', 'app.location', 'app.miscellaneous_fee');

	function startTest() {
		$this->Transportation =& ClassRegistry::init('Transportation');
	}

	function endTest() {
		unset($this->Transportation);
		ClassRegistry::flush();
	}

}

<?php
/* Report Test cases generated on: 2011-10-20 08:56:06 : 1319072166*/
App::import('Model', 'Report');

class ReportTestCase extends CakeTestCase {
	var $fixtures = array('app.report', 'app.user', 'app.liquidation', 'app.location', 'app.miscellaneous_fee', 'app.transportation');

	function startTest() {
		$this->Report =& ClassRegistry::init('Report');
	}

	function endTest() {
		unset($this->Report);
		ClassRegistry::flush();
	}

}

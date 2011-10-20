<?php
/* MiscellaneousFee Test cases generated on: 2011-10-20 08:56:04 : 1319072164*/
App::import('Model', 'MiscellaneousFee');

class MiscellaneousFeeTestCase extends CakeTestCase {
	var $fixtures = array('app.miscellaneous_fee', 'app.report');

	function startTest() {
		$this->MiscellaneousFee =& ClassRegistry::init('MiscellaneousFee');
	}

	function endTest() {
		unset($this->MiscellaneousFee);
		ClassRegistry::flush();
	}

}

<?php
/* Rate Test cases generated on: 2011-10-20 08:56:05 : 1319072165*/
App::import('Model', 'Rate');

class RateTestCase extends CakeTestCase {
	var $fixtures = array('app.rate');

	function startTest() {
		$this->Rate =& ClassRegistry::init('Rate');
	}

	function endTest() {
		unset($this->Rate);
		ClassRegistry::flush();
	}

}

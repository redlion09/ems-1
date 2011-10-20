<?php
/* Liquidation Test cases generated on: 2011-10-20 08:56:04 : 1319072164*/
App::import('Model', 'Liquidation');

class LiquidationTestCase extends CakeTestCase {
	var $fixtures = array('app.liquidation', 'app.user', 'app.location', 'app.report');

	function startTest() {
		$this->Liquidation =& ClassRegistry::init('Liquidation');
	}

	function endTest() {
		unset($this->Liquidation);
		ClassRegistry::flush();
	}

}

<?php
/* Liquidations Test cases generated on: 2011-10-20 09:15:51 : 1319073351*/
App::import('Controller', 'Liquidations');

class TestLiquidationsController extends LiquidationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LiquidationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.liquidation', 'app.user', 'app.position', 'app.department', 'app.group', 'app.notification', 'app.announcement', 'app.tag', 'app.announcements_tag', 'app.report', 'app.miscellaneous_fee', 'app.transportation', 'app.location');

	function startTest() {
		$this->Liquidations =& new TestLiquidationsController();
		$this->Liquidations->constructClasses();
	}

	function endTest() {
		unset($this->Liquidations);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}

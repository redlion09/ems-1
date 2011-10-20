<?php
/* Positions Test cases generated on: 2011-10-20 09:15:51 : 1319073351*/
App::import('Controller', 'Positions');

class TestPositionsController extends PositionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PositionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.position', 'app.user', 'app.department', 'app.group', 'app.notification', 'app.announcement', 'app.tag', 'app.announcements_tag', 'app.liquidation', 'app.location', 'app.report', 'app.miscellaneous_fee', 'app.transportation');

	function startTest() {
		$this->Positions =& new TestPositionsController();
		$this->Positions->constructClasses();
	}

	function endTest() {
		unset($this->Positions);
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

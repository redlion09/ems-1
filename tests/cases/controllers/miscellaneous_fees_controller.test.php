<?php
/* MiscellaneousFees Test cases generated on: 2011-10-20 09:15:51 : 1319073351*/
App::import('Controller', 'MiscellaneousFees');

class TestMiscellaneousFeesController extends MiscellaneousFeesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MiscellaneousFeesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.miscellaneous_fee', 'app.report', 'app.user', 'app.position', 'app.department', 'app.group', 'app.notification', 'app.announcement', 'app.tag', 'app.announcements_tag', 'app.liquidation', 'app.location', 'app.transportation');

	function startTest() {
		$this->MiscellaneousFees =& new TestMiscellaneousFeesController();
		$this->MiscellaneousFees->constructClasses();
	}

	function endTest() {
		unset($this->MiscellaneousFees);
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

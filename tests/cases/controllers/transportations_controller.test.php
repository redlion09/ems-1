<?php
/* Transportations Test cases generated on: 2011-10-20 09:15:51 : 1319073351*/
App::import('Controller', 'Transportations');

class TestTransportationsController extends TransportationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TransportationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.transportation', 'app.report', 'app.user', 'app.position', 'app.department', 'app.group', 'app.notification', 'app.announcement', 'app.tag', 'app.announcements_tag', 'app.liquidation', 'app.location', 'app.miscellaneous_fee');

	function startTest() {
		$this->Transportations =& new TestTransportationsController();
		$this->Transportations->constructClasses();
	}

	function endTest() {
		unset($this->Transportations);
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

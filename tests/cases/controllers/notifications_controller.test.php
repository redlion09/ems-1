<?php
/* Notifications Test cases generated on: 2011-10-20 09:15:51 : 1319073351*/
App::import('Controller', 'Notifications');

class TestNotificationsController extends NotificationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NotificationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.notification', 'app.user', 'app.position', 'app.department', 'app.group', 'app.announcement', 'app.tag', 'app.announcements_tag', 'app.liquidation', 'app.location', 'app.report', 'app.miscellaneous_fee', 'app.transportation');

	function startTest() {
		$this->Notifications =& new TestNotificationsController();
		$this->Notifications->constructClasses();
	}

	function endTest() {
		unset($this->Notifications);
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

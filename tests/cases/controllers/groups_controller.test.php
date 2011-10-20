<?php
/* Groups Test cases generated on: 2011-10-20 09:15:51 : 1319073351*/
App::import('Controller', 'Groups');

class TestGroupsController extends GroupsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GroupsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.notification', 'app.user', 'app.position', 'app.department', 'app.announcement', 'app.tag', 'app.announcements_tag', 'app.liquidation', 'app.location', 'app.report', 'app.miscellaneous_fee', 'app.transportation');

	function startTest() {
		$this->Groups =& new TestGroupsController();
		$this->Groups->constructClasses();
	}

	function endTest() {
		unset($this->Groups);
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

<?php
/* Departments Test cases generated on: 2011-10-20 09:15:51 : 1319073351*/
App::import('Controller', 'Departments');

class TestDepartmentsController extends DepartmentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DepartmentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.department', 'app.user', 'app.position', 'app.group', 'app.notification', 'app.announcement', 'app.tag', 'app.announcements_tag', 'app.liquidation', 'app.location', 'app.report', 'app.miscellaneous_fee', 'app.transportation');

	function startTest() {
		$this->Departments =& new TestDepartmentsController();
		$this->Departments->constructClasses();
	}

	function endTest() {
		unset($this->Departments);
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

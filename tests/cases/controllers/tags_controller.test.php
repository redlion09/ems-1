<?php
/* Tags Test cases generated on: 2011-10-20 09:15:51 : 1319073351*/
App::import('Controller', 'Tags');

class TestTagsController extends TagsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TagsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tag', 'app.announcement', 'app.user', 'app.position', 'app.department', 'app.group', 'app.notification', 'app.liquidation', 'app.location', 'app.report', 'app.miscellaneous_fee', 'app.transportation', 'app.announcements_tag');

	function startTest() {
		$this->Tags =& new TestTagsController();
		$this->Tags->constructClasses();
	}

	function endTest() {
		unset($this->Tags);
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

<?php
/* AnnouncementsTags Test cases generated on: 2011-10-20 09:15:51 : 1319073351*/
App::import('Controller', 'AnnouncementsTags');

class TestAnnouncementsTagsController extends AnnouncementsTagsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AnnouncementsTagsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.announcements_tag', 'app.announcement', 'app.user', 'app.position', 'app.department', 'app.group', 'app.notification', 'app.liquidation', 'app.location', 'app.report', 'app.miscellaneous_fee', 'app.transportation', 'app.tag');

	function startTest() {
		$this->AnnouncementsTags =& new TestAnnouncementsTagsController();
		$this->AnnouncementsTags->constructClasses();
	}

	function endTest() {
		unset($this->AnnouncementsTags);
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

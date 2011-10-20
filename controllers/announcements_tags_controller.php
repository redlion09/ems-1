<?php
class AnnouncementsTagsController extends AppController {

	var $name = 'AnnouncementsTags';

	function index() {
		$this->AnnouncementsTag->recursive = 0;
		$this->set('announcementsTags', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid announcements tag', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('announcementsTag', $this->AnnouncementsTag->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AnnouncementsTag->create();
			if ($this->AnnouncementsTag->save($this->data)) {
				$this->Session->setFlash(__('The announcements tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The announcements tag could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid announcements tag', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AnnouncementsTag->save($this->data)) {
				$this->Session->setFlash(__('The announcements tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The announcements tag could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AnnouncementsTag->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for announcements tag', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AnnouncementsTag->delete($id)) {
			$this->Session->setFlash(__('Announcements tag deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Announcements tag was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

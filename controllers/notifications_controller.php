<?php
class NotificationsController extends AppController {

	var $name = 'Notifications';

	function index() {
		$this->Notification->recursive = 0;
		$this->set('notifications', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid notification', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('notification', $this->Notification->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Notification->create();
			if ($this->Notification->save($this->data)) {
				$this->Session->setFlash(__('The notification has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notification could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Notification->User->find('list');
		$groups = $this->Notification->Group->find('list');
		$this->set(compact('users', 'groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid notification', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Notification->save($this->data)) {
				$this->Session->setFlash(__('The notification has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notification could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Notification->read(null, $id);
		}
		$users = $this->Notification->User->find('list');
		$groups = $this->Notification->Group->find('list');
		$this->set(compact('users', 'groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for notification', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Notification->delete($id)) {
			$this->Session->setFlash(__('Notification deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Notification was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

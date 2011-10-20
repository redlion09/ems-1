<?php
class TransportationsController extends AppController {

	var $name = 'Transportations';

	function index() {
		$this->Transportation->recursive = 0;
		$this->set('transportations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid transportation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('transportation', $this->Transportation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Transportation->create();
			if ($this->Transportation->save($this->data)) {
				$this->Session->setFlash(__('The transportation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transportation could not be saved. Please, try again.', true));
			}
		}
		$reports = $this->Transportation->Report->find('list');
		$this->set(compact('reports'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid transportation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Transportation->save($this->data)) {
				$this->Session->setFlash(__('The transportation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transportation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Transportation->read(null, $id);
		}
		$reports = $this->Transportation->Report->find('list');
		$this->set(compact('reports'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for transportation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Transportation->delete($id)) {
			$this->Session->setFlash(__('Transportation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Transportation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

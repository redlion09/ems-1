<?php
class RatesController extends AppController {

	var $name = 'Rates';

	function index() {
		$this->Rate->recursive = 0;
		$this->set('rates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid rate', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('rate', $this->Rate->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Rate->create();
			if ($this->Rate->save($this->data)) {
				$this->Session->setFlash(__('The rate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid rate', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Rate->save($this->data)) {
				$this->Session->setFlash(__('The rate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Rate->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for rate', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Rate->delete($id)) {
			$this->Session->setFlash(__('Rate deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Rate was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
class MiscellaneousFeesController extends AppController {

	var $name = 'MiscellaneousFees';

	function index() {
		$this->MiscellaneousFee->recursive = 0;
		$this->set('miscellaneousFees', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid miscellaneous fee', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('miscellaneousFee', $this->MiscellaneousFee->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MiscellaneousFee->create();
			if ($this->MiscellaneousFee->save($this->data)) {
				$this->Session->setFlash(__('The miscellaneous fee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The miscellaneous fee could not be saved. Please, try again.', true));
			}
		}
		$reports = $this->MiscellaneousFee->Report->find('list');
		$this->set(compact('reports'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid miscellaneous fee', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MiscellaneousFee->save($this->data)) {
				$this->Session->setFlash(__('The miscellaneous fee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The miscellaneous fee could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MiscellaneousFee->read(null, $id);
		}
		$reports = $this->MiscellaneousFee->Report->find('list');
		$this->set(compact('reports'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for miscellaneous fee', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MiscellaneousFee->delete($id)) {
			$this->Session->setFlash(__('Miscellaneous fee deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Miscellaneous fee was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

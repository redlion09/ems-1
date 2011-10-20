<?php
class ReportsController extends AppController {

	var $name = 'Reports';

	function index() {
		$this->Report->recursive = 0;
		$this->set('reports', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid report', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('report', $this->Report->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Report->create();
			if ($this->Report->save($this->data)) {
				$this->Session->setFlash(__('The report has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The report could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Report->User->find('list');
		$liquidations = $this->Report->Liquidation->find('list');
		$this->set(compact('users', 'liquidations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid report', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Report->save($this->data)) {
				$this->Session->setFlash(__('The report has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The report could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Report->read(null, $id);
		}
		$users = $this->Report->User->find('list');
		$liquidations = $this->Report->Liquidation->find('list');
		$this->set(compact('users', 'liquidations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for report', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Report->delete($id)) {
			$this->Session->setFlash(__('Report deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Report was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

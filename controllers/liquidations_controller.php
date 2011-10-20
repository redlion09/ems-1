<?php
class LiquidationsController extends AppController {

	var $name = 'Liquidations';

	function index() {
		$this->Liquidation->recursive = 0;
		$this->set('liquidations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid liquidation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('liquidation', $this->Liquidation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Liquidation->create();
			if ($this->Liquidation->save($this->data)) {
				$this->Session->setFlash(__('The liquidation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The liquidation could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Liquidation->User->find('list');
		$locations = $this->Liquidation->Location->find('list');
		$this->set(compact('users', 'locations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid liquidation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Liquidation->save($this->data)) {
				$this->Session->setFlash(__('The liquidation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The liquidation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Liquidation->read(null, $id);
		}
		$users = $this->Liquidation->User->find('list');
		$locations = $this->Liquidation->Location->find('list');
		$this->set(compact('users', 'locations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for liquidation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Liquidation->delete($id)) {
			$this->Session->setFlash(__('Liquidation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Liquidation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

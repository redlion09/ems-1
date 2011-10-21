<?php
class UsersController extends AppController {

	var $name = 'Users';

        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow(array('*'));
            if($this->action == 'add' || $this->action == 'edit'){
                $this->Auth->authenticate = $this->User;
            }
        }
        
        function login() {}
    
        function logout() {
            $this->redirect($this->Auth->logout());
        }
        
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
        
	function profile() {
            $userInfo = $this->_userInfo();
            $id = $userInfo['id'][0];
		if ($id != $userInfo['id'][0]) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$positions = $this->User->Position->find('list');
		$departments = $this->User->Department->find('list');
		$groups = $this->User->Group->find('list');
		$this->set(compact('positions', 'departments', 'groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$positions = $this->User->Position->find('list');
		$departments = $this->User->Department->find('list');
		$groups = $this->User->Group->find('list');
		$this->set(compact('positions', 'departments', 'groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
        
//        function initDB() {
//        $group =& $this->User->Group;
//        
//        //admins
//        $group->id = '4ea17a9c-41f4-4ac5-85e4-04db7f000101' ;     
//        $this->Acl->allow($group, 'controllers');
//
//        //accounting
//        $group->id = '4ea17b88-a70c-4712-b451-27e17f000101';
//        $this->Acl->deny($group, 'controllers');
//        $this->Acl->deny($group, 'controllers/Liquidations/add');
//        $this->Acl->allow($group, 'controllers/Liquidations');
//        $this->Acl->allow($group, 'controllers/Announcements');
//        $this->Acl->allow($group, 'controllers/Users/profile');
//        $this->Acl->allow($group, 'controllers/Notifications/index');
//
//        //regular
//        $group->id = '4ea17b8c-fbfc-4825-a424-27e17f000101';
//        $this->Acl->deny($group, 'controllers');        
//        $this->Acl->allow($group, 'controllers/Liquidations');
//        $this->Acl->allow($group, 'controllers/Users/profile');
//        $this->Acl->allow($group, 'controllers/Announcements/view');
//        $this->Acl->allow($group, 'controllers/Notifications/index');
//        //we add an exit to avoid an ugly "missing views" error message
//        echo "all done";
//        exit;
//    }

        
}

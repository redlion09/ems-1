<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
    var $components = array('Acl','Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session', 'Javascript');
    
    function beforeFilter() {
        $this->Auth->actionPath = 'controllers/';
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->authError = "You are not currently logged in.";
        $this->Auth->loginError = "Incorrect username / password combination.";
        $this->Auth->loginRedirect = array('controller'=>'pages', 'action'=>'display', 'home');
        $this->Auth->logoutRedirect = array('controller'=>'users', 'action'=>'login');
    
        $userInfo = $this->_userInfo();
        $loggedIn = $this->_loggedIn();
        $this->set(compact('userInfo','loggedIn'));
    }
    
    function _loggedIn() {
        $loggedIn = false;
        if($this->Auth->user()){
            $loggedIn = true;
        }
        return $loggedIn;
    }
    
    function _userInfo() {
        $userInfo = array();
        if($this->Auth->user()){
            $userInfo['id'][0] = $this->Auth->user('id');
            $userInfo['username'][0] = $this->Auth->user('username');
            $userInfo['first_name'][0] = $this->Auth->user('first_name');
            $userInfo['last_name'][0] = $this->Auth->user('last_name');
            $userInfo['middle_name'][0] = $this->Auth->user('middle_name');
            $userInfo['account_type'][0] = $this->Auth->user('account_type');
        }
        return $userInfo;
    }
    
}

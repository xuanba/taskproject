<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App_Controller
 *
 * @author xuanba
 */
class AppController extends Controller {

    var $components = array('Acl', 'Auth', 'Session');

    function beforeFilter() {
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'tasks', 'action' => 'add');
    }

}

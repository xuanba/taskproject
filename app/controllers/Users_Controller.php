<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersController
 *
 * @author xuanba
 */
class UsersController extends AppController {

    var $name = "Users";

    function index() {
        $data = $this->User->find("all");
        $this->set("data", $data);
    }

    function add() {
        if (!empty($this->data)) {
            if ($this->User->save($this->data)) {
                $this->Session->setFlash('User has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function hashPasswords($data) {
        if (isset($data['User']['password'])) {
            $data['User']['password'] = md5($data['User']['password']);
            return $data;
        }
        return $data;
    }

}

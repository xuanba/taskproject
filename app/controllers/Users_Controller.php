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

    function edit($id = null) {
        $this->User->id = $id;
        if (empty($this->data)) {
            $this->data = $this->User->read();
        } else {
            if ($this->User->save($this->data)) {
                $this->Session->setFlash('User has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        if ($this->User->delete($id)) {
            $this->Session->setFlash('The user with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
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

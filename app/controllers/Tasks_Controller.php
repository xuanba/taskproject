<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tasks_Controller
 *
 * @author xuanba
 */
class TasksController extends AppController {

    var $name = "Tasks";

    function index() {
        $data = $this->Task->find("all");
        $this->set("data", $data);
    }

    function add() {
        $this->loadModel('User');
        $this->set('users', $this->User->find('list'));
        if (!empty($this->data)) {
            if ($this->Task->save($this->data)) {
                $this->Session->setFlash('Task has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function edit($id = null) {
        $this->Task->id = $id;
        if (empty($this->data)) {
            $this->data = $this->Task->read();
        } else {
            if ($this->Task->save($this->data)) {
                $this->Session->setFlash('Task has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        if ($this->Task->delete($id)) {
            $this->Session->setFlash('The task with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

    function view($id = null) {
        $this->Task->id = $id;
        $this->set('task', $this->Task->read());
    }

}

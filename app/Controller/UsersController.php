<?php

// app/Controller/UsersController.php
App::uses('AppController', 'Controller');


class UsersController extends AppController {
    public $name = 'Users';


    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'login', 'list');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('user', $this->paginate());
        $this->set('listarPosts', $this->User->query("SELECT * FROM posts ORDER BY id ASC"));

    }

    public function view($id = null) {
        //$this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->findById($id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $queryA = [];
            $queryA = [
                0 => $this->User->query("SELECT count(*) FROM users WHERE username = " . parent::exibeEmString($this->request->data['User']['username'])),
            ];
            if($queryA[0][0][0]['count'] === 0){
                $this->User->create();            
                if ($this->User->save($this->request->data)) {
                    $this->Session->write('userCreated', true);
                    return $this->redirect(array('action' => 'index'));
                }         
            }
            return $this->Session->write('userNotCreated', true);
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->write('username', $this->Auth->user('username'));
                $this->Session->write('logged', true);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->write('erro', true);
        }
    }
    

    
    public function logout() {
        //echo $this->Flash->set('Passou na action logout');
        $this->Session->write('logged', false);
        return $this->redirect($this->Auth->logout());
    }
    
    
    
}
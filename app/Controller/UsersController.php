<?php

// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
    public $name = 'Users';

    public function index() {
        $this->User->recursive = 0;
        $this->set('user', $this->paginate());
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
                    $this->Flash->success(__('The user has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }         
            }
            return $this->Session->write('erro', true);
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
        $this->Session->write('logged', false);
        return $this->redirect($this->Auth->logout());
    }
    
    public function list()
    {
        # code...
    }



    public function isAuthorized($user)
    {

        debug(Router::connect('/login', array('controller' => 'users', 'action' => 'login')));

        if ($this->Session->read('logged') && $this->action === 'login') {
            $this->Auth->deny('login');
        }
    }
}
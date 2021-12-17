<?php

App::uses('AppController', 'Controller');

class PostsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Posts';

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
}
?>
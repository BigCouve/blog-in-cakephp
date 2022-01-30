<?php 

App::uses('AppController', 'Controller');

class CategoriesController extends AppController {
    public $scaffold;
    public function list2()
    {
        $this->set('list2', $this->Category->find('all'));
    }

}
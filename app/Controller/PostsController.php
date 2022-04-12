<?php

App::uses('AppController', 'Controller');

class PostsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Posts';
    

    public function index(){
        
    }
    public function list() {
        // debug($this->Post->find('all'));
        $this->set('list', $this->Post->find('all', array('order' => 'Post.id ASC')));
        $this->set('userId', $this->Auth->user('id'));
        $this->set('userRole', $this->Auth->user('role'));

    }
                

    public function view($id = null) {
        $this->set('post', $this->Post->findById($id));
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Post']['user_id'] = $this->Auth->user('id'); // Adicionada essa linha
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success('Your post has been saved.');
                $this->redirect(array('action' => 'list'));
            }
        }
    }
    
    public function edit($id = null) {
        
        // Campo do id recebe id do post atual

        //variáveis
        $this->set('optionsEndButton', 'Salvar Post');
        

        $this->Post->id = $id;
        if ($this->request->is('get')) {
             $this->request->data = $this->Post->findById($id);
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->write('postAtualizado', true);
                $this->redirect(array('action' => 'list'));
            }
        }

    }

    public function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Flash->success('O post com o id: ' . $id . ' foi excluído.');
            $this->redirect(array('action' => 'list'));
        }
    }

    public function myList(){
        $this->Session->write('userId', $this->Auth->user('id')); 
        $this->set('listPostsOwned', $this->Post->query("SELECT * FROM posts WHERE user_id = " .  parent::exibeEmString($this->Session->read('userId')). " ORDER BY 1"));
        $this->set('userRole', $this->Auth->user('role'));
        
        // debug(gettype($userLogged));
        // $this->set('postsOwned', $this->Post->query("SELECT * FROM posts WHERE username = " . $this->Session->read('username')));
    }



    public function isAuthorized($user) {
        // Todos os usuários registrados podem criar posts e edita-los/deleta-los

        if ($this->action === 'add'|| $this->action === 'myList' || $user['role'] === 'admin') {
            return true;
        }
        if (!(parent::isAuthorized($user) ||  $user['role'] === 'admin' )){
            //debug('entrou o authorized filho'); 
            // O dono de um post pode editá-lo e deletá-lo
            if (in_array($this->request->action, array('edit', 'delete'))) {
                $postId = (int) $this->request->params['pass'][0];
                return $this->Post->isOwnedBy($postId, $user['id']);
            }
            $this->Session->write('erroNaoEditar', true);

        }
       //debug('não passou no authorize');

    }
}
?>
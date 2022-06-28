<?php

App::uses('AppController', 'Controller');

class PostsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Posts';
    

    public function index(){
        
    }
    public function list() {
        //passa para a variável list, um array com todos os posts
        $this->set('list', $this->Post->query("SELECT * FROM posts ORDER BY created DESC"));
        
        //se for o caso de envio de dados, a variável será alterada de acordo com o filtro
        if ($this->request->is('post')) {
            $this->set('list', $this->orderTable($this->request->data));
        }
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
                $this->Flash->success('Seu post foi salvo com sucesso. ');
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
        $this->set('userRole', $this->Auth->user('role'));

        if($this->request->data == null){
            $this->set('listPostsOwned', $this->Post->query("SELECT * FROM posts WHERE user_id = " .  parent::exibeEmString($this->Session->read('userId')). " ORDER BY 1"));
        }

        if ($this->request->is('post')) {
            $this->set('listPostsOwned', $this->orderTable($this->request->data));
        }   
    }


    public function orderTable($filter){
        $query = '';

        if (($filter['dateEnd'] == $filter['dateStart']) && ($filter['dateEnd']) != ''){
            $query = "WHERE created >= DATE " .  parent::exibeEmString($filter['dateStart']) . " + time '00:00' AND created <= DATE " . parent::exibeEmString($filter['dateEnd']) . " + time '23:59'";
        }
        else if ($filter['dateStart'] != '') {
            $query = "WHERE created > " . parent::exibeEmString($filter['dateStart']);
            if ($filter['dateEnd'] != '') {
                $query .= " AND created < " . parent::exibeEmString($filter['dateEnd']);
            }

        }
        else if ($filter['dateEnd'] != '') {
            if ($filter['dateStart'] != '') {
                $query = "WHERE created > " . parent::exibeEmString($filter['dateStart']);
                $query .= " AND created < " . parent::exibeEmString($filter['dateEnd']);
            }
            else {
                $query = "WHERE created < " . parent::exibeEmString($filter['dateEnd']);
            }


        }
            

        if ($filter['order'] === "Crescente") {
            $query .=  " ORDER BY created ASC";
        }
        else if ($filter['order'] === "Decrescente") {
            $query .= " ORDER BY created DESC";
        }
        $postsOrdenados = $this->Post->query("SELECT * FROM posts " . $query);
        return $postsOrdenados;
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
        return $this->redirect(array('controller' => 'users', 'action' => 'logout'));

    }
}
?>
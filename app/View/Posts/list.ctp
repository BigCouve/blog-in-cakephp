<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->

<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/PostsList.css" media="screen" />


<div class="noticia">
    <?php 
    
    if ($this->Session->consume('erroNaoEditar') === true) {  ?>
        <div class="alert alert-danger text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span area-hidden="true">&times;</span>
            </button>
            <b>Não é possível editar um post que não é de sua autoria.</b>
        </div>
    <?php } 
    else if ($this->Session->consume('postAtualizado') === true){  ?>
        <div class="alert alert-success text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span area-hidden = "true">&times;</span>
            </button>
            <b>O post foi atualizado com sucesso.</b>
        </div>
    <?php }  ?>

</div>


<div class="mainTitle">
    <h1>Posts do Mãe Terra</h1>
</div>





<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts --> 

<div class="container-fluid">
    <table class = "table table-striped table-bordered table-responsive table-hover" id="table">
        <?php
       
        if ($this->Session->read('logged') === true) { ?>
        <a id="addPost" class = "btn btn-default" href="http://localhost:8888/posts/add">
            <span id = "crossAddPost" class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Adicionar Post
        </a>
        <?php } ?>
        <tr id="cabecalho">
            <?php 
            foreach ($variable as $key => $value) {
                # code...
            }
            if ($this->Session->read('logged') === true && $userRole === 'admin') { ?>
                <th onclick="sortTable(0)">Id</th>
            <?php } ?>
            <th id="titlePosts" onclick="sortTable(1)">Título</th>
            <?php if ($this->Session->read('logged') === true) { ?>
                <th onclick="sortTable(2)">Ações</th>
            <?php } ?>
            <th id = "dateTimePost" onclick="sortTable(3)">Criado em</th>
        </tr>
        <tbody>
            <?php
            foreach ($list as $post):   ?>
                <tr id = "linePosts">
                    <?php if ($this->Session->read('logged') === true && $userRole === 'admin') { ?>
                        <td><?php echo $post['Post']['id']; ?></td>
                    <?php } ?>
                    <td>
                        <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
                    </td>
                    <?php if (($this->Session->read('logged') === true) && ($userId === $post['Post']['user_id'] || $userRole === 'admin')) { ?>
                        <td>
                            <?php echo $this->Form->postLink(
                                'Deletar',
                                array('action' => 'delete', $post['Post']['id']),
                                array('confirm' => 'Você tem certeza?')
                            )?>
                            <?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']));?>
                        </td>
                    <?php }
                    else if (($this->Session->read('logged') === true)){ ?>
                        <td>-</td>
                    <?php } ?>    
                    <td><?php
                    $date = date_create($post['Post']['created']);
                    echo date_format($date, 'd/m/Y H:i:s');  ?></td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
    </table>
</div>


<!-- Arquivos JS importados -->
<script src="app\webroot\js\orderTable.js"></script>


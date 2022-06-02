<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->

<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/PostsList.css" media="screen" >



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
    <div class="formulario-filtros">
        <form action="/guias" method="post">
            <div class="filtros">
                <select class="form-control" name="order">
                    <option value="Ordem">Ordem</option>
                    <option value="Crescente">Crescente</option>
                    <option value="Decrescente">Decrescente</option>
                </select>
                <select name="" id="" class="form-control">
                    <option value=""></option>
                </select><select name="" id="" class="form-control">
                    <option value=""></option>
                </select><select name="" id="" class="form-control">
                    <option value=""></option>
               
                </select>
            </div>
            <div class="envio">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </form>
        
    </div>
    
</div>
    


<div class="container-fluid">
    
    <table class = "table table-striped table-bordered table-responsive table-hover" >
        

        <tr id="cabecalho">
            <?php if ($this->Session->read('logged') === true && $userRole === 'admin') { ?>
                <th>Id</th>
            <?php } ?>
            <th>Título</th>
            <?php if ($this->Session->read('logged') === true) { ?>
                <th>Ações</th>
            <?php } ?>
            <th>Criado em</th>
        </tr>
        <tbody>
            <?php
            // debug($list);
            foreach ($list as $post):   ?>
                <tr class = "linePosts">
                    <?php if ($this->Session->read('logged') === true && $userRole === 'admin') { ?>
                        <td><?php echo $post[0]['id']; ?></td>
                    <?php } ?>
                    <td>
                        <?php echo $this->Html->link($post[0]['title'], array('action' => 'view', $post[0]['id']));?>
                    </td>
                    <?php if (($this->Session->read('logged') === true) && ($userId === $post[0]['user_id'] || $userRole === 'admin')) { ?>
                        <td>
                            <?php echo $this->Form->postLink(
                                'Deletar',
                                array('action' => 'delete', $post[0]['id']),
                                array('confirm' => 'Você tem certeza?')
                            )?>
                            <?php echo $this->Html->link('Editar', array('action' => 'edit', $post[0]['id']));?>
                        </td>
                    <?php }
                    else if (($this->Session->read('logged') === true)){ ?>
                        <td>-</td>
                    <?php } ?>    
                    <td><?php
                    $date = date_create($post[0]['created']);
                    echo date_format($date, 'd/m/Y H:i:s');  ?></td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
    </table>
</div>

<div class="botaoAdicionarPost">
    <?php if ($this->Session->read('logged') === true) { ?>

    <a id="addPost" class = "btn btn-default" href="http://localhost:8888/posts/add">
        <span id = "crossAddPost" class="glyphicon glyphicon-plus" aria-hidden="false"></span>
        Adicionar Post
    </a>

    <?php } ?>
</div>
<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/PostsList.css"  media="screen"/>


    <?php if ($this->Session->consume('postAtualizado') === true){  ?>
        <div class="alert alert-success text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span area-hidden = "true">&times;</span>
            </button>
            <b>O post foi atualizado com sucesso.</b>
        </div>
    <?php }  ?>

<div class="mainTitle">
    <h1>Meus Posts</h1>
</div>

<!-- Filtros da tabela de posts -->

<div class="container-fluid">
    <div class="formulario-filtros">
        <form action="/meusPosts" method="post">
            <div class="filtros">
                <select class="form-control" name="order" >
                    <option value="-">-</option>
                    <option value="Crescente">Crescente</option>
                    <option value="Decrescente">Decrescente</option>
                </select>
                <input name="dateStart" type="date" id="dateStart" class="form-control" > 
                </input>
                <input name="dateEnd" type="date" id="dateEnd" class="form-control" >
                </input>
            
            </div>
            <div class="envio">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </form>
        
    </div>
    
</div>

<div class="botaoAdicionarPost">
    <?php if ($this->Session->read('logged') === true) { ?>

    <a id="addPost" class = "btn btn-default" href="http://localhost:8888/posts/add">
        <span id = "crossAddPost" class="glyphicon glyphicon-plus" aria-hidden="false"></span>
        Novo Post
    </a>

    <?php } ?>
</div>

<div class="container-fluid"> 
    <table class="table table-striped table-bordered table-responsive table-hover">
        

        <tr id="cabecalho">

            <?php if ($userRole === 'admin') { ?>
                <th>Id</th>
            <?php } ?>
            <th>Título</th>
            <th>Ações</th>
            <th>Criado em</th>
        </tr>

        <tbody>
            <?php foreach ($listPostsOwned as $posts){ ?>
                <tr class="linePosts">
                    <?php if ($userRole === 'admin') { ?>
                        <td>
                            <?php echo $posts[0]['id']; ?>
                        </td>
                    <?php } ?>

                    <td>
                        <?php echo $this->Html->link($posts[0]['title'], array('action' => 'view', $posts[0]['id'])); ?>
                    </td>
                    <td>
                        <?php echo $this->Form->postLink(
                            'Deletar', 
                            array('action' => 'delete', $posts[0]['id']),
                            array('confirm' =>  'Você tem certeza?')); ?>
                        <?php echo $this->Html->link('Editar', array('action' => 'edit', $posts[0]['id'])); ?>
                    </td>
                    <td><?php
                    $date = date_create($posts[0]['created']);
                    echo date_format($date, 'd/m/Y H:i:s');  ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<!-- <?php echo $this->element('sql_dump'); ?>
<? debug($sql) ?> -->
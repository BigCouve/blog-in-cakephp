<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/Posts_my_List.css"  media="screen"/>


    <?php if ($this->Session->consume('postAtualizado') === true){  ?>
        <div class="alert alert-success text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span area-hidden = "true">&times;</span>
            </button>
            <b>O post foi atualizado com sucesso.</b>
        </div>
    <?php }  ?>

<div class="conteiner-fluid"> 
    <table class="table table-striped table-bordered table-responsive text-center">
        <a id="addPost" class = "btn btn-default" href="http://localhost:8888/posts/add">
            <span id = "crossAddPost" class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Adicionar Post
        </a>
        <tr id="cabecalho">

            <?php if ($userRole === 'admin') { ?>
                <th>Id</th>
            <?php } ?>
            <th id="titlePosts" >Título</th>
            <th >Ações</th>
            <th id = "dateTimePost">Criado em</th>
        </tr>
        <tbody>
            <?php foreach ($listPostsOwned as $posts){ ?>
                <tr>
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
                    <td>
                        <?php echo $posts[0]['created']; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

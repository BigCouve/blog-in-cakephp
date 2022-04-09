<? echo $this->Html->css(array('PostsList')); ?>



<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->
<div class="mainTitle">
    <h1>Posts do Mãe Terra</h1>
</div>
<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts --> 

<div class="container-fluid">
    <table class = "table table-striped table-bordered table-responsive table-hover" >
        <?php if ($this->Session->read('logged') === true) { ?>
        <a id="addPost" class = "btn btn-default" href="http://localhost:8888/posts/add">
            <span id = "crossAddPost" class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Adicionar Post
        </a>
        <?php } ?>
        <tr id="cabecalho">
            <?php if ($this->Session->read('logged') === true) { ?>
                <th>Id</th>
            <?php } ?>
            <th id="titlePosts" >Título</th>
            <?php if ($this->Session->read('logged') === true) { ?>
                <th >Ações</th>
            <?php } ?>
            <th id = "dateTimePost">Criado em</th>
        </tr>
        <tbody>
            <?php
            foreach ($list as $post):   ?>
                <tr id = "linePosts">
                    <?php if ($this->Session->read('logged') === true) { ?>
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
                    <?php } ?>    
                    <td><?php echo date($post['Post']['created']);  ?></td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
    </table>
</div>


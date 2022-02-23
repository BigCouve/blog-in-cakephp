<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>


<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts --> 

<div class="container-fluid">
    <div class="col-md-10 col-md-offset-1">
        <table class = "table table-striped table-bordered table-responsive table-hover" >
            <tr>
                <?php if ($this->Session->read('logged') === true) { ?>
                    <th>Id</th>
                <?php } ?>
                <th >Título</th>
                <?php if ($this->Session->read('logged') === true) { ?>
                    <th >Ações</th>
                <?php } ?>
                <th>Criado</th>
            </tr>
            <tbody>
                <?php foreach ($list as $post): ?>
                    <tr>
                        <?php if ($this->Session->read('logged') === true) { ?>
                            <td><?php echo $post['Post']['id']; ?></td>
                        <?php } ?>
                        <td>
                            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
                        </td>
                        <?php if ($this->Session->read('logged') === true) { ?>
                            <td>
                                <?php echo $this->Form->postLink(
                                    'Delete',
                                    array('action' => 'delete', $post['Post']['id']),
                                    array('confirm' => 'Você tem certeza?')
                                )?>
                                <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
                            </td>
                        <?php } ?>    
                        <td><?php echo $post['Post']['created']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>     
</div>

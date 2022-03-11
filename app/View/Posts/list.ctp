<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->
<div class="mainTitle text-center">
    <h1>Posts do blog</h1>
</div>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts --> 

<div class="container-fluid">
    <div class="col-md-8 col-md-offset-2">
        <table class = "table table-striped table-bordered table-responsive table-hover" >
        <?php if ($this->Session->read('logged') === true) { ?>
        <div>
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    <?php echo $this->Html->link("Adicionar Post", array('action' => 'add')); ?>
            </button> 
        </div>
        </br>
        <?php } ?>
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
                                    'Deletar',
                                    array('action' => 'delete', $post['Post']['id']),
                                    array('confirm' => 'Você tem certeza?')
                                )?>
                                <?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']));?>
                            </td>
                        <?php } ?>    
                        <td><?php echo $post['Post']['created']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>


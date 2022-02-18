<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>


<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php 
echo 'Antes de entrar na tabela, valor de logged: ' . $this->Session->read('logged');
if ($this->Session->read('logged' == true)) { ?>
    <table style = "width:100%">
        <tr>
            <th>Id</th>
            <th style = "width:30%">Title</th>
            <th style = "width:10%">Action</th>
            <th>Created</th>
        </tr>
        <?php foreach ($list as $post): ?>
            <tr>
                <td><?php echo $post['Post']['id']; ?></td>
                <td>
                    <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
                </td>
                <td>
                    <?php echo $this->Form->postLink(
                        'Delete',
                        array('action' => 'delete', $post['Post']['id']),
                        array('confirm' => 'Você tem certeza?')
                    )?>
                    <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
                </td>
                <td><?php echo $post['Post']['created']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table> 
<?php } 
else { ?>
    <table style = "width:100%">
        <tr>
            <th style = "width:30%">Title</th>
            <th>Created</th>
        </tr>
        <?php foreach ($list as $post):  ?>
            <tr>
                <td>
                    <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
                </td>
                <td><?php echo $post['Post']['created']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } ?>
    


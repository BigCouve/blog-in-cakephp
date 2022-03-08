<!-- File: /app/View/Posts/add.ctp -->

<div class="add_titulo">
    <h1>Adicionar um post</h1>
</div>

<div class="add_corpo">
    <?php 
    echo $this->Form->create('Post');
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '5'));
    echo $this->Form->end('Save Post');
    ?>
</div>
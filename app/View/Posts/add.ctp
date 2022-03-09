<!-- File: /app/View/Posts/add.ctp -->

<div class="add_titulo">
    <h1>Adicionar um post</h1>
</div>
</br>
<div class="add_titulo_corpo">
    <?php 
    echo $this->Form->create('Post');
    echo $this->Form->input(false, array(
        'name' => 'data[Post][title]',
        'type' => 'text',
        'rows' => '1',
        'value' => false,
        'class' => 'form-control',
        'id' => 'titleLogin',
        'placeholder' => 'Título'
        ));
    ?>
</div>
</br>
<div class="add_corpo">
    <?php
    echo $this->Form->input(false, array(
        'rows' => '5',
        'name' => 'data[Post][body]',
        'type' => 'text',
        'rows' => '1',
        'value' => false,
        'class' => 'form-control',
        'id' => 'titleLogin',
        'placeholder' => 'Descrição'
        ));
    echo $this->Form->end('Salvar Post');
    ?>
</div>  
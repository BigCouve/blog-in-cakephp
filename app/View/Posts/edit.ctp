<!-- File: /app/View/Posts/edit.ctp -->

<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/PostsEdit.css" media="screen" />

<h1>Editar o Post</h1>

<div class="container">

    <?php
        echo $this->Form->create('Post');
        echo $this->Form->input('title', array(
            'id' => 'tituloEdit',
            'type' => 'text',
            'rows' => '1',
            'class' => 'form-control',
            'placeholder' => 'Título do post',
            'required' => true,
            'label' => false,


            ));
        echo $this->Form->input('body', array(
            'id' => 'corpoEdit',
            'type' => 'text',
            'rows' => '3',
            'class' => 'form-control',
            'placeholder' => 'Corpo do post',
            'required' => true,
            'label' => false,

            ));

        echo $this->Form->input('id', array('type' => 'hidden'));
        
        echo $this->Form->end($optionsEndButton);
    ?>

</div>

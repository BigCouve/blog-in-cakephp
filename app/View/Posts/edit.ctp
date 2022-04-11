<!-- File: /app/View/Posts/edit.ctp -->

<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/PostsEdit.css" media="screen" />


<div class="container">
<h1>Editar o Post</h1>

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
        ?>
        <input id = "endButton" type="submit" value="Enviar Post" />
        </form>

</div>

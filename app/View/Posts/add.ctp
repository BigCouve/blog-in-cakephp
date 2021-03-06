<!-- File: /app/View/Posts/add.ctp -->

<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/PostsAdd.css" media="screen" />

<div class="corpoAdd">
    <div class="add_titulo">
        <h1>Adicionar um post</h1>
    </div>
    <div class="add_titulo_corpo" >
        <?php 
        echo $this->Form->create('Post');
        echo $this->Form->input(false, array(
            'name' => 'data[Post][title]',
            'type' => 'text',
            'rows' => '1',
            'value' => false,
            'class' => 'form-control',
            'id' => 'titleLogin',
            'placeholder' => 'Título',
            'required' => true,
            ));
        ?>
    </div>
    <div class="add_corpo" required>
        <?php
        echo $this->Form->input(false, array(
            'rows' => '5',
            'name' => 'data[Post][body]',
            'type' => 'text',
            'rows' => '1',
            'value' => false,
            'class' => 'form-control',
            'id' => 'titleLogin',
            'placeholder' => 'Descrição',
            'required' => true
            ));
        ?>
        
        
    </div>  
    <div class="send_form">
            <input class="submitButton" type="submit" value="Salvar Post" />
    </div>
    </form>
</div>
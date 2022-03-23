<!-- app/View/Users/add.ctp -->
.
<div class="bgAddUser col-md-offset-4">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Cadastar usuário'); ?></legend>
        <?php 
        echo $this->Form->input(false, array(
            'id' => 'usernameAddUser',
            'type' => 'text',
            'class' => 'form-control',
            'name' => 'data[User][username]',
            'placeholder' => 'Insira seu usuário',
            'value' => false,));
        echo $this->Form->input(false, array(
            'id' => 'passwordAddUser',
            'type' => 'password',
            'class' => 'form-control',
            'name' => 'data[User][password]',
            'placeholder' => 'Senha',
            'value' => false,));
        echo $this->Form->input('Perfil', array(
            'id' => 'profileAddUser',
            'options' => array('author' => 'Autor'),
        ));
    ?>
    </fieldset>
    <div class="form-group">
        <input class = "btn" id = "submitAddUser" type = "submit" value = "Cadastrar">
    </div>
    </form>
</div>
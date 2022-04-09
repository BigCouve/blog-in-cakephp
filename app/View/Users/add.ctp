<!-- app/View/Users/add.ctp -->

<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/UsersAdd.css" media="screen" />

<?php 
if($this->Session->consume('erro')){ ?>
    <div class="alert alert-danger text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <b>Nome de usuário já em uso, tente outro.</b>
  </div>
<?php }; ?>


<div class="bgAddUser col-md-4 col-md-offset-4">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Cadastrar usuário'); ?></legend>
        <?php 
        echo $this->Form->input(false, array(
            'id' => 'usernameAddUser',
            'type' => 'text',
            'class' => 'form-control',
            'name' => 'data[User][username]',
            'placeholder' => 'Insira seu usuário',
            'value' => false,
            'required' => true,

        ));
        echo $this->Form->input(false, array(
            'id' => 'passwordAddUser',
            'type' => 'password',
            'class' => 'form-control',
            'name' => 'data[User][password]',
            'placeholder' => 'Senha',
            'value' => false,
            'required' => true,

        ));
        echo $this->Form->input('role', array(
            'id' => 'profileAddUser',
            // 'options' => array('author' => 'author'),
            'type' => 'hidden',
            'label' => false,
            'value' => 'author',

        ));
        
    ?>
    </fieldset>
    <div class="form-group">
        <input class = "btn" id = "submitAddUser" type = "submit" value = "Cadastrar">
    </div>
    </form>
</div>
<?php 
?>
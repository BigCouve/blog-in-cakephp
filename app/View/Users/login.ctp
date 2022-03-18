<!--app/View/Users/login.ctp !-->
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User');

if ($this->Session->consume('erro')) { ?>
  <div class="alert alert-danger text-center col-md-6 col-md-offset-3" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <b>Usuário ou senha inválido, tente novamente</b>
  </div>
<?php } ?>





<div class="container jumbotron jumbotron-fluid col-md-4 col-md-offset-4 ">
  <div class="form-group">
    <?php
    //echo $this->Form->input('username'); // No div, no label

    echo $this->Form->input(
      false,
      array(
      'name' => 'data[User][username]',
      'type' => 'text',
      'class' => 'form-control',
      'id' =>'UserLogin',
      'placeholder' => 'Usuário',
      'value' => false,
      )
    );?>

  </div>
  <div class="form-group">
    <!--<input type="password" class="form-control" id="PasswordLogin" placeholder="Senha" > -->
    <?php
    //echo $this->Form->input('password'); // No div, no label

    echo $this->Form->input(
      false,
      array(
        'name' => "data[User][password]",
        'type' => 'password',
        'class' => 'form-control',
        'id' =>'PasswordLogin',
        'placeholder' => 'Senha',
        'value' => false,
      )
    );?>

  </div>
  <div class="form-group">
    <input class="btn" id = "ss" type="submit" value="Entrar" >
    <i class="fa fa-unlock"></i>
    </div>
</div>

</form>


<!--app/View/Users/login.ctp !-->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/Userslogin.css" media="screen" />

<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User');?>

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
      )
    );?>

  </div>
  <div class="form-group">
    <input class="btn" id = "ss" type="submit" value="Enviar" >
    <i class="fa fa-unlock"></i>
  </div>
</div>

</form>


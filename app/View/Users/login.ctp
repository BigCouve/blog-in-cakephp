<!--app/View/Users/login.ctp !-->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/Userslogin.css" media="screen" />

<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User');?>

<div class="container jumbotron jumbotron-fluid jumbotron-fluid-hover col-md-6 col-md-offset-3 ">
  <div class="form-group">
    <?php
    //echo $this->Form->input('username'); // No div, no label

    echo $this->Form->input(
      'username',
      array(
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
      'password',
      array(
      'type' => 'password',
      'class' => 'form-control',
      'id' =>'PasswordLogin',
      'placeholder' => 'Senha',
      )
    );?>

  </div>
  <div class="form-group">
    <input class="btn" id = "ss" type="submit" value="Enviar" >
  </div>
</div>

</form>


<!-- Arquivos CSS importados -->
<?php 

if($this->Session->consume('userCreated')){ ?>
    <div id = "userCreated" class="alert alert-success text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <b>O usuário foi criado com sucesso</b>
  </div>
<?php }; ?>

<link rel="stylesheet" type="text/css" href="/app/webroot/css/UsersIndex.css" media="screen" />
<div class="welcome">
    <h1 class="jumpLine">
        Bem vindo<b><?php 
        if ($this->Session->read('logged') === true) {
            echo ", " . $this->Session->read('username');
        }
        ?></b>!
    </h1>
    <h4>Por favor, clique em algum dos campos acima.</h4>
</div>


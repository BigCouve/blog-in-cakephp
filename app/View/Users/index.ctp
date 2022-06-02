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



<div class="secondlineThumbs">
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="app\webroot\img\tomate.png" alt="...">
        <div class="caption">
          <h3>Thumbnail Label</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, corrupti!</p>
          <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="app\webroot\img\cebola.png" alt="...">
        <div class="caption">
          <h3>Thumbnail Label</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores exercitationem itaque nobis amet! Deserunt rerum amet minus aspernatur eaque repellendus, error id saepe, magnam dolorem temporibus, corporis impedit neque voluptatem.</p>
          <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="app\webroot\img\beringela.png" alt="...">
        <div class="caption">
          <h3>Thumbnail Label</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eaque a incidunt praesentium commodi impedit! Pariatur, amet vitae!</p>
          <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
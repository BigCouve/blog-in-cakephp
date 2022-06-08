<!-- Arquivos CSS importados -->
<link rel="stylesheet" href="app\webroot\css\UsersIndex.css">
<?php 
if($this->Session->consume('userCreated')){ ?>
    <div id = "userCreated" class="alert alert-success text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <b>O usuário foi criado com sucesso</b>
  </div>
<?php }; ?>

<div class="anuncios">
  <ul>
    <li><a href="#"><img src="app\webroot\img\altonoticias.jpg" alt=""></a></li>
    <li><a href="#"><img src="app\webroot\img\altonoticiasdentario.jpg" alt=""></a></li>
  </ul>
</div>

<!-- <link rel="stylesheet" type="text/css" href="/app/webroot/css/UsersIndex.css" media="screen" />
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
 -->


<div class="secondlineThumbs">
  <?php
  foreach ($listarPosts as $post) {
    // debug($post[0]['image']);?>    
    <div class="thumbnail">
      <div class="skeleton">
        <img src="app\webroot\img\<?php echo $post[0]['image'];
          ?>" alt="..." >
      </div>

      <div class="caption">
        <h3><?php echo $post[0]['title']?></h3>
        <p class="pBody"><?php echo $post[0]['body']?></p>
        <p>
          <a href="http://localhost:8888/posts/view/<?php echo $post[0]['id']?>" class="btn btn-primary">Ver Mais</a> 
        </p>
      </div>
    </div>
  <?php } ?>
</div>



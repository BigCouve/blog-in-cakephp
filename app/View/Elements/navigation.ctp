<div class="container">
  <nav class="navbar navbar-inverse ">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="#">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </a>     
        <a class="nav navbar-brand" href="http://localhost:8888/">
        <img src="/app/webroot/img/arvore2.png" width="30" height="30" class="img-circle">
          <a class="nav navbar-brand" href="http://localhost:8888/">
          Mãe Terra
          </a>
      </a> 
      </div>
      <div class="navbar-collapse collapse" id = "bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" >
          <li class = "active"><a href="http://localhost:8888/">Início</a></li>
          <li><a href="http://localhost:8888/1">Guias</a></li>
          <li><a href="http://localhost:8888/2">Categorias (scaffold)</a></li>
          <li role="presentation" class="disabled"><a href="#">Sobre nós</a></li>
          <li role="presentation" class="disabled"><a href="#">Contate-nos</a></li> 
          
        </ul>   
        <!--<<ul class="nav navbar-nav navbar-right">aaasdasdas</ul>-->
        <ul class="nav navbar-nav navbar-right ">
          <?php 
            if ($this->Session->read('logged') == true) { ?>
              <div class="navbar-text btn-group">Logado como
                <a class="dropdown"> 
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <?php echo $this->Session->read('username') ?>
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Meu Perfil</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="http://localhost:8888/logout">Sair</a></li>
                  </ul>
                </a>
              </div>
            <?php } 
            else { ?>
              <a href="http://localhost:8888/login"><button type="button" class="btn btn-primary navbar-btn">Entrar</button></a>
              
              <a href="http://localhost:8888/add"><button type="button" class="btn btn-secondary navbar-btn">Cadastrar</button></a>
              <?php //$this->extend('/Users/login') 
                
              ?>


          <?php } 
          ?>
          <!-- Single button -->
          
        </ul>
      </div>
    </div>
    
  </nav><!--/.nav-collapse -->
  
</div><!--/.container.fluid -->


<!-- Single button -->

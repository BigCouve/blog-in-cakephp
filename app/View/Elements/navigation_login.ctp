<div class="navbar navbar-inverse bg-info navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="container">
          
          </div>
          

        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav" >
            <a class="nav navbar-brand" href="http://localhost:8888/">
            <img src="/app/webroot/img/arvore2.png" width="30" height="30" class="img-circle">
              <a class="nav navbar-brand" href="http://localhost:8888/">
              Mãe Terra
              </a>
            </a>
            <li class = "active"><a href="http://localhost:8888/">Início</a></li>
            <li><a href="http://localhost:8888/1">Guias</a></li>
            <li><a href="http://localhost:8888/2">Categorias (scaffold)</a></li>
            <li role="presentation" class="disabled"><a href="#">Sobre nós</a></li>
            <li role="presentation" class="disabled"><a href="#">Contate-nos</a></li>
            <a href="http://localhost:8888/6"><button type="button" class="btn btn-default navbar-btn">Sair</button></a>
            <p class="navbar-text navbar-right">Logado como <a href="#" class="navbar-link"><?php echo $this->Session->read('username') ?></a></p>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


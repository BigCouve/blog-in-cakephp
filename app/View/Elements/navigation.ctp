
  <nav class="navbar navbar-inverse navbar-fixed-top">
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
        <img src="/app/webroot/img/arvore2.png" width="30" height="30" class="img-responsive">
          <a class="nav navbar-brand" href="http://localhost:8888/">
          Mãe Terra
          </a>
      </a> 
      </div>
      <div class="navbar-collapse collapse" id = "bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav nav-pills" >
          <li class = "active"><a href="http://localhost:8888/">Início</a></li>
          <li><a href="http://localhost:8888/guias">Guias</a></li>
          <li role="presentation" class="disabled"><a href="#">Sobre nós</a></li>
          <li role="presentation" class="disabled"><a href="#">Contate-nos</a></li> 
          
        </ul>   
        <!--<<ul class="nav navbar-nav navbar-right">aaasdasdas</ul>-->
        <ul class="nav navbar-nav navbar-right ">
          <?php 
            if ($this->Session->read('logged') == true) { ?>
              <div class="navbar-text btn-group">Logado como
                <a class="dropdown"> 
                <a href="#" class="dropdown-toggle" id="dropdown-menu-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <?php echo $this->Session->read('username') ?>
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://localhost:8888/meusPosts">Meus Posts</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="http://localhost:8888/logout">Sair</a></li>
                  </ul>
                </a>
              </div>
            <?php } 
            else { ?>
            
              <a href="http://localhost:8888/login">
                <button type="button" class="btn btn-primary navbar-btn">
                  Entrar
                </button>
              </a>
              
              <a href="http://localhost:8888/adduser">
                <button type="button" class="btn btn-secondary navbar-btn">
                  Inscreva-se
                </button>
              </a>

          <?php } 
          ?>
          <!-- Single button -->
          
        </ul>
      </div>
    </div>
    
  </nav><!--/.nav-collapse -->
  
<!--/.container.fluid -->


<!-- Single button -->

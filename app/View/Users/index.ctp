<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/UsersIndex.css" media="screen" />

<div class="welcome">
    <h1 class="jumpLine">
        Bem vindo<b><?php 
        if ($this->Session->read('logged') === true) {
            echo " " . $this->Session->read('username');
        }
        ?></b>!
    </h1>
    <h4>Por favor, clique em algum dos campos acima.</h4>
</div>


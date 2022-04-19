<!-- File: /app/View/Posts/view.ctp -->

<!-- Arquivos CSS importados -->
<link rel="stylesheet" type="text/css" href="/app/webroot/css/PostsView.css" media="screen" />



<div class="tituloPostView">
    <h1><?php echo $post['Post']['title']?></h1>
</div>
<div class="corpoPostView">
    <div>
        <p><?php echo $post['Post']['body']?></p>
    </div>
    
</div>


<div class="footerView text-right panel-footer">
    <p>
        Criado em: <?php $date = date_create($post['Post']['created']);
                    echo date_format($date, 'd/m/Y' );
                    echo ', às ';
                    echo date_format($date, 'H:i:s' );
                    ?>
    </p>
</div>




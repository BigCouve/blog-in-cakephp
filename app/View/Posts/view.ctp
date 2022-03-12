
<!-- File: /app/View/Posts/view.ctp -->
<div class="tituloPostView">
    <h1><?php echo $post['Post']['title']?></h1>
</div>
<div class="corpoPostView">
    <div>
        <p><small>Created: <?php echo $post['Post']['created']?></small></p>
    </div>
    <div>
        <p><?php echo $post['Post']['body']?></p>
    </div>
</div>


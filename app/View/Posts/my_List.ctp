<div class="conteiner-fluid"> 
    <table class="table table-striped table-bordered table-responsive">
        <tr id="cabecalho">
            <th>Id</th>
            <th id="titlePosts" >Título</th>
            <th >Ações</th>
            <th id = "dateTimePost">Criado em</th>
        </tr>
        <tbody>
            <?php foreach ($listPostsOwned as $posts){ ?>
                <tr>
                    <td>
                        <?php echo $posts[0]['id']; ?>
                    </td>
                    <td>
                        <?php echo $posts ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="conteiner-fluid"> 
    <table class="table table-striped table-bordered table-responsive">
        <tr id="cabecalho">
            <th>Id</th>
            <th id="titlePosts" >Título</th>
            <th >Ações</th>
            <th id = "dateTimePost">Criado em</th>
        </tr>
        <tr>
            <tbody>
                <?php foreach($listOwned as $posts){ ?>
                    <tr>
                        <?php echo $posts['Post']['id']; ?>
                    </tr>
                <?php } ?>
            </tbody>
        </tr>
    </table>
</div>

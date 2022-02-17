<!--app/View/Users/login.ctp !-->



<!-- Button trigger modal -->


<?php 
//$this->extend('/Posts/index');
$this->start('headss'); ?>
  <h1>ACHA, PORRA</h1>
<?php $this->end(); ?>


<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">
    Entrar (modal)
  </button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="titleModalLogin">Por favor, insira seu usuário e senha</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="users form">
            <?php echo $this->Flash->render('auth'); ?>
            <?php echo $this->Form->create('User'); ?>
                <fieldset>
                    <?php echo $this->Form->input('username');
                    echo $this->Form->input('password');
                ?>
                </fieldset>
            
            </div>
      </div>
      <div class="modal-footer">
      <div class="submit">
      <input class = "btn btn-primary" type="submit" value="Entrar" />
      </div>
      </form>
      <?php echo $this->fetch('body')?>
      </div>
    </div>
  </div>
</div>



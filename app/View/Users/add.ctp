<!-- app/View/Users/add.ctp -->
<div class="bgAddUser">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Cadastar usuário'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input(false, array(
            'id' => 'passwordAddUser',
            'placeholder' => 'Nome do usuário',
            'value' => 'void'));
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
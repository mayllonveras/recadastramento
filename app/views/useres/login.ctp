<?php echo $this->Session->flash('auth') ?>
<?php echo $this->Session->flash() ?>

<?php echo $this->Form->create('User', array('action' => 'login')) ?>
<?php echo $this->Form->input('username') ?>
<?php echo $this->Form->input('password', array('type' => 'password')) ?>
<?php echo $this->Form->end('Entrar') ?>
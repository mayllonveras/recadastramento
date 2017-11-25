<div class="dependentes form">
<?php echo $this->Form->create('Dependente');?>
	<fieldset>
		<legend><?php __('Admin Add Dependente'); ?></legend>
	<?php
		echo $this->Form->input('servidor_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('nascimento');
		echo $this->Form->input('tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dependentes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
	</ul>
</div>
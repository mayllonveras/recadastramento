<div class="cedidos form">
<?php echo $this->Form->create('Cedido');?>
	<fieldset>
		<legend><?php __('Edit Cedido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Servidor_id');
		echo $this->Form->input('Setor_origem');
		echo $this->Form->input('Setor_destino');
		echo $this->Form->input('onus');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Cedido.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Cedido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cedidos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Setores', true), array('controller' => 'setores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor', true), array('controller' => 'setores', 'action' => 'add')); ?> </li>
	</ul>
</div>
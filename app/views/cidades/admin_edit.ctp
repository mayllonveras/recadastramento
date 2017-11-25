<div class="cidades form">
<?php echo $this->Form->create('Cidade');?>
	<fieldset>
		<legend><?php __('Admin Edit Cidade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Estado_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Cidade.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Cidade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Enderecos', true), array('controller' => 'enderecos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Endereco', true), array('controller' => 'enderecos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="enderecos form">
<?php echo $this->Form->create('Endereco');?>
	<fieldset>
		<legend><?php __('Admin Add Endereco'); ?></legend>
	<?php
		echo $this->Form->input('Servidor_id');
		echo $this->Form->input('Cidade_id');
		echo $this->Form->input('cep');
		echo $this->Form->input('tipologradouro');
		echo $this->Form->input('logradouro');
		echo $this->Form->input('numero');
		echo $this->Form->input('complemento');
		echo $this->Form->input('bairro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Enderecos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades', true), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade', true), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
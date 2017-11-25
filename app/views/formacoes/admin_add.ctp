<div class="formacoes form">
<?php echo $this->Form->create('Formacao');?>
	<fieldset>
		<legend><?php __('Admin Add Formacao'); ?></legend>
	<?php
		echo $this->Form->input('Servidor_id');
		echo $this->Form->input('Nivelescolaridade_id');
		echo $this->Form->input('curso');
		echo $this->Form->input('instituicao');
		echo $this->Form->input('conclusao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Formacoes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nivelescolaridades', true), array('controller' => 'nivelescolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nivelescolaridade', true), array('controller' => 'nivelescolaridades', 'action' => 'add')); ?> </li>
	</ul>
</div>
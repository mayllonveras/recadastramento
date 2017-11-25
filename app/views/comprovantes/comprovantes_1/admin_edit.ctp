<div class="comprovantes form">
<?php echo $this->Form->create('Comprovante');?>
	<fieldset>
		<legend><?php __('Admin Edit Comprovante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Servidor_id');
		echo $this->Form->input('status');
		echo $this->Form->input('arquivo');
		echo $this->Form->input('Tipocomprovante');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Comprovante.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Comprovante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comprovantes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocomprovantes', true), array('controller' => 'tipocomprovantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocomprovante', true), array('controller' => 'tipocomprovantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
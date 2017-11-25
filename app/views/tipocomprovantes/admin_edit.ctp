<div class="tipocomprovantes form">
<?php echo $this->Form->create('Tipocomprovante');?>
	<fieldset>
		<legend><?php __('Admin Edit Tipocomprovante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('Comprovante');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tipocomprovante.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tipocomprovante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipocomprovantes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Comprovantes', true), array('controller' => 'comprovantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comprovante', true), array('controller' => 'comprovantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
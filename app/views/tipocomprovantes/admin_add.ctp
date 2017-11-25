<div class="tipocomprovantes form">
<?php echo $this->Form->create('Tipocomprovante');?>
	<fieldset>
		<legend><?php __('Admin Add Tipocomprovante'); ?></legend>
	<?php
		echo $this->Form->input('tipo');
		echo $this->Form->input('Comprovante');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipocomprovantes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Comprovantes', true), array('controller' => 'comprovantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comprovante', true), array('controller' => 'comprovantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
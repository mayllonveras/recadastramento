<div class="cargos form">
<?php echo $this->Form->create('Cargo');?>
	<fieldset>
		<legend><?php __('Admin Add Cargo'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cargos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Funcionais', true), array('controller' => 'funcionais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcional', true), array('controller' => 'funcionais', 'action' => 'add')); ?> </li>
	</ul>
</div>
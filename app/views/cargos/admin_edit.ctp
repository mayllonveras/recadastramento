<div class="cargos form">
<?php echo $this->Form->create('Cargo');?>
	<fieldset>
		<legend><?php __('Admin Edit Cargo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Cargo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Cargo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cargos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Funcionais', true), array('controller' => 'funcionais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcional', true), array('controller' => 'funcionais', 'action' => 'add')); ?> </li>
	</ul>
</div>
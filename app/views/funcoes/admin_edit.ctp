<div class="funcoes form">
<?php echo $this->Form->create('Funcao');?>
	<fieldset>
		<legend><?php __('Admin Edit Funcao'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Funcao.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Funcao.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Funcoes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Funcionais', true), array('controller' => 'funcionais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcional', true), array('controller' => 'funcionais', 'action' => 'add')); ?> </li>
	</ul>
</div>
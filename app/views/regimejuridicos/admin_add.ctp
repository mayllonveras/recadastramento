<div class="regimejuridicos form">
<?php echo $this->Form->create('Regimejuridico');?>
	<fieldset>
		<legend><?php __('Admin Add Regimejuridico'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Regimejuridicos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Funcionais', true), array('controller' => 'funcionais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcional', true), array('controller' => 'funcionais', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="nivelescolaridades form">
<?php echo $this->Form->create('Nivelescolaridade');?>
	<fieldset>
		<legend><?php __('Admin Add Nivelescolaridade'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Nivelescolaridades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Formacoes', true), array('controller' => 'formacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formacao', true), array('controller' => 'formacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
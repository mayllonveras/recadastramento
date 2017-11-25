<div class="estadocivis form">
<?php echo $this->Form->create('Estadocivil');?>
	<fieldset>
		<legend><?php __('Admin Edit Estadocivil'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Estadocivil.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Estadocivil.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estadocivis', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
	</ul>
</div>
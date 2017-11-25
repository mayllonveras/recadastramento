<div class="setores form">
<?php echo $this->Form->create('Setor');?>
	<fieldset>
		<legend><?php __('Admin Edit Setor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('setor_vinculo');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Setor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Setor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Setores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Setores', true), array('controller' => 'setores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor', true), array('controller' => 'setores', 'action' => 'add')); ?> </li>
	</ul>
</div>
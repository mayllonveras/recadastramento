<div class="setores form">
<?php echo $this->Form->create('Setor');?>
	<fieldset>
		<legend><?php __('Admin Add Setor'); ?></legend>
	<?php
		echo $this->Form->input('setor_vinculo');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Setores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Setores', true), array('controller' => 'setores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor', true), array('controller' => 'setores', 'action' => 'add')); ?> </li>
	</ul>
</div>
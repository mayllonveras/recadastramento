<div class="funcionais form">
<?php echo $this->Form->create('Funcional');?>
	<fieldset>
		<legend><?php __('Admin Add Funcional'); ?></legend>
	<?php
		echo $this->Form->input('Servidor_id');
		echo $this->Form->input('admissao');
		echo $this->Form->input('cargahoraria');
		echo $this->Form->input('efetivoexercicio');
		echo $this->Form->input('registroclasse');
		echo $this->Form->input('Funcionaiscol');
		echo $this->Form->input('Setor_id');
		echo $this->Form->input('Funcao_id');
		echo $this->Form->input('Cargo_id');
		echo $this->Form->input('Regimejuridico_id');
		echo $this->Form->input('licenca');
		echo $this->Form->input('cid');
		echo $this->Form->input('vencimentolicenca');
		echo $this->Form->input('reintegrado');
		echo $this->Form->input('datareintegracao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Funcionais', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Setores', true), array('controller' => 'setores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor', true), array('controller' => 'setores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcoes', true), array('controller' => 'funcoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcao', true), array('controller' => 'funcoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regimejuridicos', true), array('controller' => 'regimejuridicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regimejuridico', true), array('controller' => 'regimejuridicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
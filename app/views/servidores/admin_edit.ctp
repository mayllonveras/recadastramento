<div class="servidores form">
<?php echo $this->Form->create('Servidor');?>
	<fieldset>
		<legend><?php __('Admin Edit Servidor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('matricula');
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
		echo $this->Form->input('pis_pasep');
		echo $this->Form->input('tiposanguineo');
		echo $this->Form->input('rg');
		echo $this->Form->input('rg_org_exp');
		echo $this->Form->input('rg_data_emi');
		echo $this->Form->input('titulo_eleitor');
		echo $this->Form->input('zona_eleitoral');
		echo $this->Form->input('secao_eleitoral');
		echo $this->Form->input('titulo_data_emi');
		echo $this->Form->input('Estadocivil_id');
		echo $this->Form->input('datanasc');
		echo $this->Form->input('sexo');
		echo $this->Form->input('mae');
		echo $this->Form->input('pai');
		echo $this->Form->input('senha');
		echo $this->Form->input('Cidade_nasc');
		echo $this->Form->input('fonetrabalho');
		echo $this->Form->input('foneresidencial');
		echo $this->Form->input('celular');
		echo $this->Form->input('fonerecado');
		echo $this->Form->input('emailinstitucional');
		echo $this->Form->input('emailpessoal');
		echo $this->Form->input('necessidadesespeciais');
		echo $this->Form->input('cid');
		echo $this->Form->input('tempoaverbado');
		echo $this->Form->input('tempoaaverbar');
		echo $this->Form->input('especialidade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Servidor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Servidor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Estadocivis', true), array('controller' => 'estadocivis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estadocivil', true), array('controller' => 'estadocivis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades', true), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade', true), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
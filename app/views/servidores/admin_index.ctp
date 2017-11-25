<div class="servidores index">
	<h2><?php __('Servidores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('matricula');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('cpf');?></th>
			<th><?php echo $this->Paginator->sort('pis_pasep');?></th>
			<th><?php echo $this->Paginator->sort('tiposanguineo');?></th>
			<th><?php echo $this->Paginator->sort('rg');?></th>
			<th><?php echo $this->Paginator->sort('rg_org_exp');?></th>
			<th><?php echo $this->Paginator->sort('rg_data_emi');?></th>
			<th><?php echo $this->Paginator->sort('titulo_eleitor');?></th>
			<th><?php echo $this->Paginator->sort('zona_eleitoral');?></th>
			<th><?php echo $this->Paginator->sort('secao_eleitoral');?></th>
			<th><?php echo $this->Paginator->sort('titulo_data_emi');?></th>
			<th><?php echo $this->Paginator->sort('Estadocivil_id');?></th>
			<th><?php echo $this->Paginator->sort('datanasc');?></th>
			<th><?php echo $this->Paginator->sort('sexo');?></th>
			<th><?php echo $this->Paginator->sort('mae');?></th>
			<th><?php echo $this->Paginator->sort('pai');?></th>
			<th><?php echo $this->Paginator->sort('senha');?></th>
			<th><?php echo $this->Paginator->sort('Cidade_nasc');?></th>
			<th><?php echo $this->Paginator->sort('fonetrabalho');?></th>
			<th><?php echo $this->Paginator->sort('foneresidencial');?></th>
			<th><?php echo $this->Paginator->sort('celular');?></th>
			<th><?php echo $this->Paginator->sort('fonerecado');?></th>
			<th><?php echo $this->Paginator->sort('emailinstitucional');?></th>
			<th><?php echo $this->Paginator->sort('emailpessoal');?></th>
			<th><?php echo $this->Paginator->sort('necessidadesespeciais');?></th>
			<th><?php echo $this->Paginator->sort('cid');?></th>
			<th><?php echo $this->Paginator->sort('tempoaverbado');?></th>
			<th><?php echo $this->Paginator->sort('tempoaaverbar');?></th>
			<th><?php echo $this->Paginator->sort('especialidade');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($servidores as $servidor):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $servidor['Servidor']['id']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['matricula']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['nome']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['cpf']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['pis_pasep']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['tiposanguineo']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['rg']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['rg_org_exp']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['rg_data_emi']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['titulo_eleitor']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['zona_eleitoral']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['secao_eleitoral']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['titulo_data_emi']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($servidor['Estadocivil']['descricao'], array('controller' => 'estadocivis', 'action' => 'view', $servidor['Estadocivil']['id'])); ?>
		</td>
		<td><?php echo $servidor['Servidor']['datanasc']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['sexo']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['mae']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['pai']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['senha']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($servidor['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $servidor['Cidade']['id'])); ?>
		</td>
		<td><?php echo $servidor['Servidor']['fonetrabalho']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['foneresidencial']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['celular']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['fonerecado']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['emailinstitucional']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['emailpessoal']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['necessidadesespeciais']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['cid']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['tempoaverbado']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['tempoaaverbar']; ?>&nbsp;</td>
		<td><?php echo $servidor['Servidor']['especialidade']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $servidor['Servidor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $servidor['Servidor']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $servidor['Servidor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $servidor['Servidor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estadocivis', true), array('controller' => 'estadocivis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estadocivil', true), array('controller' => 'estadocivis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades', true), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade', true), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
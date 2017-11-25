<div class="funcionais index">
	<h2><?php __('Funcionais');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Servidor_id');?></th>
			<th><?php echo $this->Paginator->sort('admissao');?></th>
			<th><?php echo $this->Paginator->sort('cargahoraria');?></th>
			<th><?php echo $this->Paginator->sort('efetivoexercicio');?></th>
			<th><?php echo $this->Paginator->sort('registroclasse');?></th>
			<th><?php echo $this->Paginator->sort('Funcionaiscol');?></th>
			<th><?php echo $this->Paginator->sort('Setor_id');?></th>
			<th><?php echo $this->Paginator->sort('Funcao_id');?></th>
			<th><?php echo $this->Paginator->sort('Cargo_id');?></th>
			<th><?php echo $this->Paginator->sort('Regimejuridico_id');?></th>
			<th><?php echo $this->Paginator->sort('licenca');?></th>
			<th><?php echo $this->Paginator->sort('cid');?></th>
			<th><?php echo $this->Paginator->sort('vencimentolicenca');?></th>
			<th><?php echo $this->Paginator->sort('reintegrado');?></th>
			<th><?php echo $this->Paginator->sort('datareintegracao');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($funcionais as $funcional):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $funcional['Funcional']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($funcional['Servidor']['nome'], array('controller' => 'servidores', 'action' => 'view', $funcional['Servidor']['id'])); ?>
		</td>
		<td><?php echo $funcional['Funcional']['admissao']; ?>&nbsp;</td>
		<td><?php echo $funcional['Funcional']['cargahoraria']; ?>&nbsp;</td>
		<td><?php echo $funcional['Funcional']['efetivoexercicio']; ?>&nbsp;</td>
		<td><?php echo $funcional['Funcional']['registroclasse']; ?>&nbsp;</td>
		<td><?php echo $funcional['Funcional']['Funcionaiscol']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($funcional['Setor']['descricao'], array('controller' => 'setores', 'action' => 'view', $funcional['Setor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($funcional['Funcao']['descricao'], array('controller' => 'funcoes', 'action' => 'view', $funcional['Funcao']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($funcional['Cargo']['descricao'], array('controller' => 'cargos', 'action' => 'view', $funcional['Cargo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($funcional['Regimejuridico']['descricao'], array('controller' => 'regimejuridicos', 'action' => 'view', $funcional['Regimejuridico']['id'])); ?>
		</td>
		<td><?php echo $funcional['Funcional']['licenca']; ?>&nbsp;</td>
		<td><?php echo $funcional['Funcional']['cid']; ?>&nbsp;</td>
		<td><?php echo $funcional['Funcional']['vencimentolicenca']; ?>&nbsp;</td>
		<td><?php echo $funcional['Funcional']['reintegrado']; ?>&nbsp;</td>
		<td><?php echo $funcional['Funcional']['datareintegracao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $funcional['Funcional']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $funcional['Funcional']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $funcional['Funcional']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $funcional['Funcional']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Funcional', true), array('action' => 'add')); ?></li>
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
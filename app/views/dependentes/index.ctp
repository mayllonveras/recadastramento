<div class="dependentes index">
	<h2><?php __('Dependentes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('servidor_id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('nascimento');?></th>
			<th><?php echo $this->Paginator->sort('tipo');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($dependentes as $dependente):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $dependente['Dependente']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dependente['Servidor']['id'], array('controller' => 'servidores', 'action' => 'view', $dependente['Servidor']['id'])); ?>
		</td>
		<td><?php echo $dependente['Dependente']['nome']; ?>&nbsp;</td>
		<td><?php echo $dependente['Dependente']['nascimento']; ?>&nbsp;</td>
		<td><?php echo $dependente['Dependente']['tipo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $dependente['Dependente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $dependente['Dependente']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $dependente['Dependente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dependente['Dependente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dependente', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
	</ul>
</div>
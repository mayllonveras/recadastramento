<div class="cedidos index">
	<h2><?php __('Cedidos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Servidor_id');?></th>
			<th><?php echo $this->Paginator->sort('Setor_origem');?></th>
			<th><?php echo $this->Paginator->sort('Setor_destino');?></th>
			<th><?php echo $this->Paginator->sort('onus');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cedidos as $cedido):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cedido['Cedido']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cedido['Servidor']['nome'], array('controller' => 'servidores', 'action' => 'view', $cedido['Servidor']['id'])); ?>
		</td>
		<td><?php echo $cedido['Cedido']['Setor_origem']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cedido['Setor']['descricao'], array('controller' => 'setores', 'action' => 'view', $cedido['Setor']['id'])); ?>
		</td>
		<td><?php echo $cedido['Cedido']['onus']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $cedido['Cedido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $cedido['Cedido']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $cedido['Cedido']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cedido['Cedido']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cedido', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Setores', true), array('controller' => 'setores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor', true), array('controller' => 'setores', 'action' => 'add')); ?> </li>
	</ul>
</div>
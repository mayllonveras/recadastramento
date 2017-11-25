<div class="comprovantes index">
	<h2><?php __('Comprovantes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Servidor_id');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('arquivo');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($comprovantes as $comprovante):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $comprovante['Comprovante']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comprovante['Servidor']['nome'], array('controller' => 'servidores', 'action' => 'view', $comprovante['Servidor']['id'])); ?>
		</td>
		<td><?php echo $comprovante['Comprovante']['status']; ?>&nbsp;</td>
		<td><?php echo $comprovante['Comprovante']['arquivo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $comprovante['Comprovante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $comprovante['Comprovante']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $comprovante['Comprovante']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comprovante['Comprovante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Comprovante', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocomprovantes', true), array('controller' => 'tipocomprovantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocomprovante', true), array('controller' => 'tipocomprovantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
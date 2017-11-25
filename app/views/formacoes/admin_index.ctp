<div class="formacoes index">
	<h2><?php __('Formacoes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Servidor_id');?></th>
			<th><?php echo $this->Paginator->sort('Nivelescolaridade_id');?></th>
			<th><?php echo $this->Paginator->sort('curso');?></th>
			<th><?php echo $this->Paginator->sort('instituicao');?></th>
			<th><?php echo $this->Paginator->sort('conclusao');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($formacoes as $formacao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $formacao['Formacao']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($formacao['Servidor']['nome'], array('controller' => 'servidores', 'action' => 'view', $formacao['Servidor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($formacao['Nivelescolaridade']['descricao'], array('controller' => 'nivelescolaridades', 'action' => 'view', $formacao['Nivelescolaridade']['id'])); ?>
		</td>
		<td><?php echo $formacao['Formacao']['curso']; ?>&nbsp;</td>
		<td><?php echo $formacao['Formacao']['instituicao']; ?>&nbsp;</td>
		<td><?php echo $formacao['Formacao']['conclusao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $formacao['Formacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $formacao['Formacao']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $formacao['Formacao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $formacao['Formacao']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Formacao', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nivelescolaridades', true), array('controller' => 'nivelescolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nivelescolaridade', true), array('controller' => 'nivelescolaridades', 'action' => 'add')); ?> </li>
	</ul>
</div>
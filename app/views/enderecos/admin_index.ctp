<div class="enderecos index">
	<h2><?php __('Enderecos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Servidor_id');?></th>
			<th><?php echo $this->Paginator->sort('Cidade_id');?></th>
			<th><?php echo $this->Paginator->sort('cep');?></th>
			<th><?php echo $this->Paginator->sort('tipologradouro');?></th>
			<th><?php echo $this->Paginator->sort('logradouro');?></th>
			<th><?php echo $this->Paginator->sort('numero');?></th>
			<th><?php echo $this->Paginator->sort('complemento');?></th>
			<th><?php echo $this->Paginator->sort('bairro');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($enderecos as $endereco):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $endereco['Endereco']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($endereco['Servidor']['nome'], array('controller' => 'servidores', 'action' => 'view', $endereco['Servidor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($endereco['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $endereco['Cidade']['id'])); ?>
		</td>
		<td><?php echo $endereco['Endereco']['cep']; ?>&nbsp;</td>
		<td><?php echo $endereco['Endereco']['tipologradouro']; ?>&nbsp;</td>
		<td><?php echo $endereco['Endereco']['logradouro']; ?>&nbsp;</td>
		<td><?php echo $endereco['Endereco']['numero']; ?>&nbsp;</td>
		<td><?php echo $endereco['Endereco']['complemento']; ?>&nbsp;</td>
		<td><?php echo $endereco['Endereco']['bairro']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $endereco['Endereco']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $endereco['Endereco']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $endereco['Endereco']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $endereco['Endereco']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Endereco', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades', true), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade', true), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
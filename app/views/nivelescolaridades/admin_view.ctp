<div class="nivelescolaridades view">
<h2><?php  __('Nivelescolaridade');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nivelescolaridade['Nivelescolaridade']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nivelescolaridade['Nivelescolaridade']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nivelescolaridade', true), array('action' => 'edit', $nivelescolaridade['Nivelescolaridade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Nivelescolaridade', true), array('action' => 'delete', $nivelescolaridade['Nivelescolaridade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nivelescolaridade['Nivelescolaridade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nivelescolaridades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nivelescolaridade', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formacoes', true), array('controller' => 'formacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formacao', true), array('controller' => 'formacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Formacoes');?></h3>
	<?php if (!empty($nivelescolaridade['Formacao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Servidor Id'); ?></th>
		<th><?php __('Nivelescolaridade Id'); ?></th>
		<th><?php __('Curso'); ?></th>
		<th><?php __('Instituicao'); ?></th>
		<th><?php __('Conclusao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($nivelescolaridade['Formacao'] as $formacao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $formacao['id'];?></td>
			<td><?php echo $formacao['Servidor_id'];?></td>
			<td><?php echo $formacao['Nivelescolaridade_id'];?></td>
			<td><?php echo $formacao['curso'];?></td>
			<td><?php echo $formacao['instituicao'];?></td>
			<td><?php echo $formacao['conclusao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'formacoes', 'action' => 'view', $formacao['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'formacoes', 'action' => 'edit', $formacao['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'formacoes', 'action' => 'delete', $formacao['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $formacao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Formacao', true), array('controller' => 'formacoes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="tipocomprovantes view">
<h2><?php  __('Tipocomprovante');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipocomprovante['Tipocomprovante']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipocomprovante['Tipocomprovante']['tipo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipocomprovante', true), array('action' => 'edit', $tipocomprovante['Tipocomprovante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tipocomprovante', true), array('action' => 'delete', $tipocomprovante['Tipocomprovante']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipocomprovante['Tipocomprovante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocomprovantes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocomprovante', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comprovantes', true), array('controller' => 'comprovantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comprovante', true), array('controller' => 'comprovantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Comprovantes');?></h3>
	<?php if (!empty($tipocomprovante['Comprovante'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Servidor Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Arquivo'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipocomprovante['Comprovante'] as $comprovante):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $comprovante['id'];?></td>
			<td><?php echo $comprovante['Servidor_id'];?></td>
			<td><?php echo $comprovante['status'];?></td>
			<td><?php echo $comprovante['arquivo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'comprovantes', 'action' => 'view', $comprovante['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comprovantes', 'action' => 'edit', $comprovante['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comprovantes', 'action' => 'delete', $comprovante['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comprovante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comprovante', true), array('controller' => 'comprovantes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

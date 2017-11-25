<div class="comprovantes view">
<h2><?php  __('Comprovante');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $comprovante['Comprovante']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Servidor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($comprovante['Servidor']['nome'], array('controller' => 'servidores', 'action' => 'view', $comprovante['Servidor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $comprovante['Comprovante']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Arquivo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $comprovante['Comprovante']['arquivo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comprovante', true), array('action' => 'edit', $comprovante['Comprovante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Comprovante', true), array('action' => 'delete', $comprovante['Comprovante']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comprovante['Comprovante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comprovantes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comprovante', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocomprovantes', true), array('controller' => 'tipocomprovantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocomprovante', true), array('controller' => 'tipocomprovantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Tipocomprovantes');?></h3>
	<?php if (!empty($comprovante['Tipocomprovante'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($comprovante['Tipocomprovante'] as $tipocomprovante):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tipocomprovante['id'];?></td>
			<td><?php echo $tipocomprovante['tipo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tipocomprovantes', 'action' => 'view', $tipocomprovante['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tipocomprovantes', 'action' => 'edit', $tipocomprovante['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tipocomprovantes', 'action' => 'delete', $tipocomprovante['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipocomprovante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipocomprovante', true), array('controller' => 'tipocomprovantes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

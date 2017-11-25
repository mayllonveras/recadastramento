<div class="funcoes view">
<h2><?php  __('Funcao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcao['Funcao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcao['Funcao']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Funcao', true), array('action' => 'edit', $funcao['Funcao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Funcao', true), array('action' => 'delete', $funcao['Funcao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $funcao['Funcao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcoes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcao', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionais', true), array('controller' => 'funcionais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcional', true), array('controller' => 'funcionais', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Funcionais');?></h3>
	<?php if (!empty($funcao['Funcional'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Servidor Id'); ?></th>
		<th><?php __('Admissao'); ?></th>
		<th><?php __('Cargahoraria'); ?></th>
		<th><?php __('Efetivoexercicio'); ?></th>
		<th><?php __('Registroclasse'); ?></th>
		<th><?php __('Funcionaiscol'); ?></th>
		<th><?php __('Setor Id'); ?></th>
		<th><?php __('Funcao Id'); ?></th>
		<th><?php __('Cargo Id'); ?></th>
		<th><?php __('Regimejuridico Id'); ?></th>
		<th><?php __('Licenca'); ?></th>
		<th><?php __('Cid'); ?></th>
		<th><?php __('Vencimentolicenca'); ?></th>
		<th><?php __('Reintegrado'); ?></th>
		<th><?php __('Datareintegracao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($funcao['Funcional'] as $funcional):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $funcional['id'];?></td>
			<td><?php echo $funcional['Servidor_id'];?></td>
			<td><?php echo $funcional['admissao'];?></td>
			<td><?php echo $funcional['cargahoraria'];?></td>
			<td><?php echo $funcional['efetivoexercicio'];?></td>
			<td><?php echo $funcional['registroclasse'];?></td>
			<td><?php echo $funcional['Funcionaiscol'];?></td>
			<td><?php echo $funcional['Setor_id'];?></td>
			<td><?php echo $funcional['Funcao_id'];?></td>
			<td><?php echo $funcional['Cargo_id'];?></td>
			<td><?php echo $funcional['Regimejuridico_id'];?></td>
			<td><?php echo $funcional['licenca'];?></td>
			<td><?php echo $funcional['cid'];?></td>
			<td><?php echo $funcional['vencimentolicenca'];?></td>
			<td><?php echo $funcional['reintegrado'];?></td>
			<td><?php echo $funcional['datareintegracao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'funcionais', 'action' => 'view', $funcional['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'funcionais', 'action' => 'edit', $funcional['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'funcionais', 'action' => 'delete', $funcional['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $funcional['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funcional', true), array('controller' => 'funcionais', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="dependentes view">
<h2><?php  __('Dependente');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dependente['Dependente']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Servidor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($dependente['Servidor']['id'], array('controller' => 'servidores', 'action' => 'view', $dependente['Servidor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dependente['Dependente']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nascimento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dependente['Dependente']['nascimento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dependente['Dependente']['tipo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dependente', true), array('action' => 'edit', $dependente['Dependente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Dependente', true), array('action' => 'delete', $dependente['Dependente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dependente['Dependente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependentes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependente', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
	</ul>
</div>

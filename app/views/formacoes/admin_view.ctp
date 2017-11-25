<div class="formacoes view">
<h2><?php  __('Formacao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formacao['Formacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Servidor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($formacao['Servidor']['nome'], array('controller' => 'servidores', 'action' => 'view', $formacao['Servidor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nivelescolaridade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($formacao['Nivelescolaridade']['descricao'], array('controller' => 'nivelescolaridades', 'action' => 'view', $formacao['Nivelescolaridade']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Curso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formacao['Formacao']['curso']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Instituicao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formacao['Formacao']['instituicao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conclusao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formacao['Formacao']['conclusao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formacao', true), array('action' => 'edit', $formacao['Formacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Formacao', true), array('action' => 'delete', $formacao['Formacao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $formacao['Formacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formacoes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formacao', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nivelescolaridades', true), array('controller' => 'nivelescolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nivelescolaridade', true), array('controller' => 'nivelescolaridades', 'action' => 'add')); ?> </li>
	</ul>
</div>

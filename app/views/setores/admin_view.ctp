<div class="setores view">
<h2><?php  __('Setor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setor['Setor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Setor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($setor['Setor']['descricao'], array('controller' => 'setores', 'action' => 'view', $setor['Setor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setor['Setor']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Setor', true), array('action' => 'edit', $setor['Setor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Setor', true), array('action' => 'delete', $setor['Setor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $setor['Setor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Setores', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Setores', true), array('controller' => 'setores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor', true), array('controller' => 'setores', 'action' => 'add')); ?> </li>
	</ul>
</div>

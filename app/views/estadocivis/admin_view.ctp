<div class="estadocivis view">
<h2><?php  __('Estadocivil');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadocivil['Estadocivil']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadocivil['Estadocivil']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estadocivil', true), array('action' => 'edit', $estadocivil['Estadocivil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Estadocivil', true), array('action' => 'delete', $estadocivil['Estadocivil']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estadocivil['Estadocivil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estadocivis', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estadocivil', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div c
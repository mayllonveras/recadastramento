<div class="funcionais view">
<h2><?php  __('Funcional');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Servidor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($funcional['Servidor']['nome'], array('controller' => 'servidores', 'action' => 'view', $funcional['Servidor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Admissao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['admissao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cargahoraria'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['cargahoraria']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Efetivoexercicio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['efetivoexercicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registroclasse'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['registroclasse']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Funcionaiscol'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['Funcionaiscol']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Setor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($funcional['Setor']['descricao'], array('controller' => 'setores', 'action' => 'view', $funcional['Setor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Funcao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($funcional['Funcao']['descricao'], array('controller' => 'funcoes', 'action' => 'view', $funcional['Funcao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cargo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($funcional['Cargo']['descricao'], array('controller' => 'cargos', 'action' => 'view', $funcional['Cargo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Regimejuridico'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($funcional['Regimejuridico']['descricao'], array('controller' => 'regimejuridicos', 'action' => 'view', $funcional['Regimejuridico']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Licenca'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['licenca']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['cid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vencimentolicenca'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['vencimentolicenca']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Reintegrado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['reintegrado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Datareintegracao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $funcional['Funcional']['datareintegracao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Funcional', true), array('action' => 'edit', $funcional['Funcional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Funcional', true), array('action' => 'delete', $funcional['Funcional']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $funcional['Funcional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionais', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcional', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Setores', true), array('controller' => 'setores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor', true), array('controller' => 'setores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcoes', true), array('controller' => 'funcoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcao', true), array('controller' => 'funcoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regimejuridicos', true), array('controller' => 'regimejuridicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regimejuridico', true), array('controller' => 'regimejuridicos', 'action' => 'add')); ?> </li>
	</ul>
</div>

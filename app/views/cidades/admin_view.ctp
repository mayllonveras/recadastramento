<div class="cidades view">
<h2><?php  __('Cidade');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cidade['Cidade']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cidade['Estado']['sigla'], array('controller' => 'estados', 'action' => 'view', $cidade['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cidade['Cidade']['nome']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cidade', true), array('action' => 'edit', $cidade['Cidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cidade', true), array('action' => 'delete', $cidade['Cidade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cidade['Cidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servidores', true), array('controller' => 'servidores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Enderecos', true), array('controller' => 'enderecos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Endereco', true), array('controller' => 'enderecos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Servidores');?></h3>
	<?php if (!empty($cidade['Servidor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Matricula'); ?></th>
		<th><?php __('Nome'); ?></th>
		<th><?php __('Cpf'); ?></th>
		<th><?php __('Pis Pasep'); ?></th>
		<th><?php __('Tiposanguineo'); ?></th>
		<th><?php __('Rg'); ?></th>
		<th><?php __('Rg Org Exp'); ?></th>
		<th><?php __('Rg Data Emi'); ?></th>
		<th><?php __('Titulo Eleitor'); ?></th>
		<th><?php __('Zona Eleitoral'); ?></th>
		<th><?php __('Secao Eleitoral'); ?></th>
		<th><?php __('Titulo Data Emi'); ?></th>
		<th><?php __('Estadocivil Id'); ?></th>
		<th><?php __('Datanasc'); ?></th>
		<th><?php __('Sexo'); ?></th>
		<th><?php __('Mae'); ?></th>
		<th><?php __('Pai'); ?></th>
		<th><?php __('Senha'); ?></th>
		<th><?php __('Cidade Nasc'); ?></th>
		<th><?php __('Fonetrabalho'); ?></th>
		<th><?php __('Foneresidencial'); ?></th>
		<th><?php __('Celular'); ?></th>
		<th><?php __('Fonerecado'); ?></th>
		<th><?php __('Emailinstitucional'); ?></th>
		<th><?php __('Emailpessoal'); ?></th>
		<th><?php __('Necessidadesespeciais'); ?></th>
		<th><?php __('Cid'); ?></th>
		<th><?php __('Tempoaverbado'); ?></th>
		<th><?php __('Tempoaaverbar'); ?></th>
		<th><?php __('Especialidade'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cidade['Servidor'] as $servidor):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $servidor['id'];?></td>
			<td><?php echo $servidor['matricula'];?></td>
			<td><?php echo $servidor['nome'];?></td>
			<td><?php echo $servidor['cpf'];?></td>
			<td><?php echo $servidor['pis_pasep'];?></td>
			<td><?php echo $servidor['tiposanguineo'];?></td>
			<td><?php echo $servidor['rg'];?></td>
			<td><?php echo $servidor['rg_org_exp'];?></td>
			<td><?php echo $servidor['rg_data_emi'];?></td>
			<td><?php echo $servidor['titulo_eleitor'];?></td>
			<td><?php echo $servidor['zona_eleitoral'];?></td>
			<td><?php echo $servidor['secao_eleitoral'];?></td>
			<td><?php echo $servidor['titulo_data_emi'];?></td>
			<td><?php echo $servidor['Estadocivil_id'];?></td>
			<td><?php echo $servidor['datanasc'];?></td>
			<td><?php echo $servidor['sexo'];?></td>
			<td><?php echo $servidor['mae'];?></td>
			<td><?php echo $servidor['pai'];?></td>
			<td><?php echo $servidor['senha'];?></td>
			<td><?php echo $servidor['Cidade_nasc'];?></td>
			<td><?php echo $servidor['fonetrabalho'];?></td>
			<td><?php echo $servidor['foneresidencial'];?></td>
			<td><?php echo $servidor['celular'];?></td>
			<td><?php echo $servidor['fonerecado'];?></td>
			<td><?php echo $servidor['emailinstitucional'];?></td>
			<td><?php echo $servidor['emailpessoal'];?></td>
			<td><?php echo $servidor['necessidadesespeciais'];?></td>
			<td><?php echo $servidor['cid'];?></td>
			<td><?php echo $servidor['tempoaverbado'];?></td>
			<td><?php echo $servidor['tempoaaverbar'];?></td>
			<td><?php echo $servidor['especialidade'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'servidores', 'action' => 'view', $servidor['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'servidores', 'action' => 'edit', $servidor['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'servidores', 'action' => 'delete', $servidor['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $servidor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Servidor', true), array('controller' => 'servidores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Enderecos');?></h3>
	<?php if (!empty($cidade['Endereco'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Servidor Id'); ?></th>
		<th><?php __('Cidade Id'); ?></th>
		<th><?php __('Cep'); ?></th>
		<th><?php __('Tipologradouro'); ?></th>
		<th><?php __('Logradouro'); ?></th>
		<th><?php __('Numero'); ?></th>
		<th><?php __('Complemento'); ?></th>
		<th><?php __('Bairro'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cidade['Endereco'] as $endereco):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $endereco['id'];?></td>
			<td><?php echo $endereco['Servidor_id'];?></td>
			<td><?php echo $endereco['Cidade_id'];?></td>
			<td><?php echo $endereco['cep'];?></td>
			<td><?php echo $endereco['tipologradouro'];?></td>
			<td><?php echo $endereco['logradouro'];?></td>
			<td><?php echo $endereco['numero'];?></td>
			<td><?php echo $endereco['complemento'];?></td>
			<td><?php echo $endereco['bairro'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'enderecos', 'action' => 'view', $endereco['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'enderecos', 'action' => 'edit', $endereco['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'enderecos', 'action' => 'delete', $endereco['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $endereco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Endereco', true), array('controller' => 'enderecos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

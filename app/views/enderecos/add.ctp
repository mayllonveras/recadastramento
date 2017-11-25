<?php
echo $html->script('prototype');
echo $html->script('scriptaculous');
echo $html->script('validacao');
$tiposLogradouro = array(   'AER'=>'AEROPORTO', 'AL' => 'APARTAMENTO', 'AV'=>'AVENIDA', 'BC'=>'BECO', 
                            'BL'=>'BLOCO', 'CAM'=>'CAMINHO', 'CONJ'=>'CONJUNTO','ESCD'=>'ESCADINHA', 'EST'=>'ESTAÇÃO',
                            'ETR'=>'ESTRADA', 'FAZ'=>'FAZENDA', 'FORT'=>'FORTALEZA', 'GL'=>'GALERIA',
                            'LD'=>'LADEIRA', 'LGO'=>'LARGO', 'PÇA'=>'PRAÇA', 'PRQ'=>'PARQUE', 'PR'=>'PRAIA',
                            'QD'=>'QUADRA', 'KM'=>'QUILÔMETRO', 'QTA'=>'QUINTA', 'ROD'=>'RODOVIA',
                            'R'=>'RUA', 'SQD'=>'SUPER QUADRA', 'TRV'=>'TRAVESSA', 'VD'=>'VIADUTO', 'VL'=>'VILA')
?>
<div class="enderecos form">
<?php echo $this->Form->create('Endereco', array('class'=>'formee'));?>
	<fieldset>
		<legend><?php __('Endereço'); ?></legend>
	<?php
		echo $this->Form->input('Servidor_id', array('type'=>'hidden', 'value'=>$servidor['Servidor']['id']));
		 echo '<div class="grid-2-12 left">';
                    echo $this->Form->input('estado', array('id'=>'estado','label'=>'Estado',  'type'=>'select', 'options'=>$estados, 'empty'=>'Selecione'));
                echo '</div>';
                echo '<div class="grid-1-12 left" id="loading" style="display:none; align:center">carregando...';
                    echo $this->Html->image('carregando2.gif');
                echo '</div>';
                echo '<div class="grid-4-12 left">';
                    echo $this->Form->input('Cidade_id', array('id'=>'cidade','label'=>'Cidade',  'type'=>'select','empty'=>'<= Primeiro o Estado'));
                echo '</div>';
                echo '<div class="grid-3-12">';
		echo $this->Form->input('tipologradouro', array('label'=>'Tipo de Logradouro','type'=>'select', 'options'=>$tiposLogradouro, 'empty'=>'Selecione'));
                echo '</div>';
                echo '<div class="grid-3-12 left">';
		echo $this->Form->input('logradouro');
                echo '</div>';
                echo '<div class="grid-2-12 left">';
		echo $this->Form->input('numero', array('label'=>'Número'));
                echo '</div>';
                echo '<div class="grid-4-12 left">';
		echo $this->Form->input('complemento');
                echo '</div>';
                echo '<div class="grid-4-12">';
		echo $this->Form->input('bairro');
                echo '</div>';
                echo '<div class="grid-2-12 left">';
		echo $this->Form->input('cep', array('label'=>'CEP', 'onKeyPress'=>'MascaraCep(EnderecoAddForm.EnderecoCep)'));
                echo '</div>';
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
</div>
<?php
    echo $ajax->observeField('estado', 
        array(
            'url' => array(
                    'action' => 'listar_cidades' 
                ),
            //'frequency' => 0.2,
            'update' => 'cidade',
            'indicator' => 'loading',
        ) 
    ); 
?>
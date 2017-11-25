<script type="text/javascript">
    function alterna(op, id) {
        if(op == 1 ){
            document.getElementById(id).style.display = "block";
        }else{
            document.getElementById(id).style.display = "none";
        }
    }
</script>
<?php
echo $html->script('prototype');
echo $html->script('scriptaculous');
echo $html->script('validacao');
$necessidadesEspeciais = array('não' => 'Não', 'Física' => 'Física', 'Motora' => 'Motora', 'Intelectual' => 'Intelectual', 'Auditiva' => 'Auditiva', 'Visual' => 'Visual', 'Autismo' => 'Autismo', 'Altas habilidades' => 'Altas habilidades', 'Superdotação' => 'Superdotação')
?>
<div class="servidores form">
    <?php echo $this->Form->create('Servidor', array('class' => 'formee')); ?>
    <fieldset>
        <legend><?php __('Informações Pessoais'); ?></legend>
        <?php
        echo $this->Form->input('matricula', array('type' => 'hidden', 'value' => $servidor['DadosServidor']['MATRICULA_FUNCIONAL']));
        echo '<div class="grid-5-12 left">';
        echo $this->Form->input('outramatricula', array('label' => 'Possui um segundo número de matrícula?', 'type' => 'select', 'options' => array('Não', 'Sim'), 'empty' => 'Selecione', 'required' => 'true', 'onchange' => 'alterna(this.value, "matricula2")'));
        echo '</div>';
        echo '<div id="matricula2" style="display:none">';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('matricula2', array('label' => 'Segunda matrícula'));
        echo '</div>';
        echo '</div>';
        echo '<div class="grid-7-12">';
        echo $this->Form->input('nome', array('value' => $servidor['DadosServidor']['NOME_SERVIDOR'], 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('cpf', array('label' => 'CPF', 'value' => $servidor['DadosServidor']['CPF'], 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-2-12 left">';
        echo $this->Form->input('pis_pasep', array('label' => 'PIS/PASEP', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-2-12 up">';
        echo $this->Form->input('tiposanguineo', array('type' => 'select', 'options' => array('A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-', 'Desconhecido'), 'label' => 'Tipo sanguíneo', 'empty' => 'Selecione', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('rg', array('label' => 'RG', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-2-12 left up">';
        echo $this->Form->input('rg_org_exp', array('label' => 'Org. expedidor', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-5-12 left">';
        echo $this->Form->input('rg_data_emi', array('label' => 'Data de emissão (RG)', 'class' => 'data', 'dateFormat' => 'DMY', 'minYear' => '1930'));
        echo '</div>';
        echo '<div class="grid-3-12">';
        echo $this->Form->input('titulo_eleitor', array('label' => 'Título de eleitor', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-2-12 left">';
        echo $this->Form->input('zona_eleitoral', array('required' => 'true'));
        echo '</div>';
        echo '<div class="grid-2-12 left">';
        echo $this->Form->input('secao_eleitoral', array('required' => 'true'));
        echo '</div>';
        echo '<div class="grid-5-12 left">';
        echo $this->Form->input('titulo_data_emi', array('label' => 'Data de emissão (Título)', 'class' => 'data', 'dateFormat' => 'DMY', 'minYear' => '1930'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('Estadocivil_id', array('label' => 'Estado civil', 'empty' => 'Selecione', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('datanasc', array('label' => 'Data de nascimento', 'class' => 'data', 'dateFormat' => 'DMY', 'minYear' => '1930', 'maxYear' => '2005'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('sexo', array('type' => 'select', 'options' => array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'), 'empty' => 'Selecione', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-6-12">';
        echo $this->Form->input('mae', array('label' => 'Nome da mãe', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('pai', array('label' => 'Nome do pai'));
        echo '</div>';
        echo '<div class="grid-2-12 left up">';
        echo $this->Form->input('estado', array('id' => 'estado', 'label' => 'Estado', 'type' => 'select', 'options' => $estados, 'empty' => 'Selecione'));
        echo '</div>';
        echo '<div class="grid-1-12 left" id="loading" style="display:none; align:center">carregando...';
        echo $this->Html->image('carregando2.gif');
        echo '</div>';
        echo '<div class="grid-3-12 left up">';
        echo $this->Form->input('Cidade_nasc', array('id' => 'cidade', 'label' => 'Cidade de nascimento', 'type' => 'select', 'empty' => '<= Primeiro o Estado'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('fonetrabalho', array('label' => 'Fone Trabalho', 'onKeyPress' => 'MascaraTelefone(ServidorAddForm.ServidorFonetrabalho)'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('foneresidencial', array('label' => 'Fone Residência', 'onKeyPress' => 'MascaraTelefone(ServidorAddForm.ServidorFoneresidencial)'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('celular', array('label' => 'Celular', 'onKeyPress' => 'MascaraTelefone(ServidorAddForm.ServidorCelular)'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('fonerecado', array('label' => 'Fone p/ Recados', 'onKeyPress' => 'MascaraTelefone(ServidorAddForm.ServidorFonerecado)'));
        echo '</div>';
        echo '<div class="grid-5-12 left">';
        echo $this->Form->input('emailinstitucional', array('label' => 'Email institucional'));
        echo '</div>';
        echo '<div class="grid-5-12 left">';
        echo $this->Form->input('emailpessoal', array('label' => 'Email pessoal'));
        echo '</div>';
        echo '<div class="grid-3-12 left up">';
        echo $this->Form->input('necessidadesespeciais', array('type' => 'select', 'options' => $necessidadesEspeciais, 'label' => 'Port. de nec. especiais?', 'empty' => 'Selecione', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('cid', array('label' => 'CID'));
        echo '</div>';
	//echo '<div class="grid-6-12 left">';
        //echo $this->Form->input('especialidade', array('id' => 'especialidade', 'title' => 'Para médicos e professores.'));
        //echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('tempoaverbado', array('type' => 'select', 'options' => array('1' => 'Sim', '0' => 'Não'), 'label' => 'Possui tempo averbado?', 'empty' => 'Selecione', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('tempoaaverbar', array('type' => 'select', 'options' => array('1' => 'Sim', '0' => 'Não'), 'label' => 'Possui tempo a averbar?', 'empty' => 'Selecione', 'required' => 'true'));
        echo '</div>';
        ?>

    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">

</div>
<?php
echo $ajax->observeField('estado', array(
    'url' => array(
        'action' => 'listar_cidades'
    ),
    //'frequency' => 0.2,
    'update' => 'cidade',
    'indicator' => 'loading',
        )
);
?>

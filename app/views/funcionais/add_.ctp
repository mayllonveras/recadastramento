<script type="text/javascript">
    function alterna(op, id) {
        if(op == 1 ){
            document.getElementById(id).style.display = "block";
        }else{
            document.getElementById(id).style.display = "none";
            var fields = document.getElementsByName(id);
            for( var i = 0;i < fields.length; i++) {
                fields[i].value = null;
            }
        }
    }
</script>
<div class="funcionais form">
    <?php echo $this->Form->create('Funcional', array('class' => 'formee')); ?>
    <fieldset>
        <legend><?php __('Informações Funcionais'); ?></legend>
        <?php
        echo $this->Form->input('Servidor_id', array('type' => 'hidden', 'value' => $servidor['Servidor']['id']));
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('admissao', array('label' => 'Data de admissão', 'dateFormat' => 'DMY', 'minYear' => '1925', 'class' => 'data'));
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('efetivoexercicio', array('label' => 'Data de efetivo exercício', 'minYear' => '1925', 'dateFormat' => 'DMY', 'class' => 'data'));
        echo '</div>';
        echo '<div class="grid-2-12 left">';
        echo $this->Form->input('cargahoraria', array('label' => 'Carga horária'));
        echo '</div>';
        echo '<div class="grid-4-12 left">';
        echo $this->Form->input('registroclasse', array('label' => 'Registro de classe'));
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('Setor_id');
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('Cargo_id');
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('Funcao_id', array('label' => 'Função'));
        echo '</div>';
        echo $this->Form->input('Regimejuridico_id', array('type' => 'hidden', 'value' => $regimeJuridico['Regimejuridico']['id']));
        echo '<div class="grid-3-12">';
        echo $this->Form->input('licenca', array('label' => 'Está de licença?', 'type' => 'select', 'options' => array('Não', 'Sim'), 'empty' => 'Selecione', 'required' => 'true', 'onchange'=>'alterna(this.value, "licenca")'));
        echo '</div>';
        echo '<div id="licenca" style="display:none">';
        echo '<div class="grid-4-12 left">';
        echo $this->Form->input('cid', array('label' => 'CID', 'name'=>'licenca'));
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('vencimentolicenca', array('label' => 'Data de vencimento da licença', 'name'=>'licenca', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'class' => 'data', 'value'=>''));
        echo '</div>';
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('reintegrado', array('label' => 'Reintegrado?', 'type' => 'select', 'options' => array('Não', 'Sim'), 'empty' => 'Selecione', 'required' => 'true', 'onchange'=>'alterna(this.value, "reintegrado")'));
        echo '</div>';
        echo '<div id="reintegrado" style="display:none">';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('datareintegracao', array('label' => 'Data de reintegração', 'minYear' => '1925', 'dateFormat' => 'DMY', 'class' => 'data', 'name'=>'reintegrado'));
        echo '</div>';
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('outro', array('label' => 'Possui outro cargo público?', 'type' => 'select', 'options' => array('Não', 'Sim'), 'empty' => 'Selecione', 'required' => 'true', 'onchange'=>'alterna(this.value, "outro")'));
        echo '</div>';
        echo '<div id="outro" style="display:none">';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('outro_cargo_publico', array('label' => 'Qual cargo? '));
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('orgao_outro_cargo', array('label' => 'Em qual órgão você ocupa tal cargo?'));
        echo '</div>';
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('Cedido.cedido', array('label' => 'Cedido?', 'type' => 'select', 'options' => array('Não', 'Sim'), 'empty' => 'Selecione', 'required' => 'true', 'onchange'=>'alterna(this.value, "cedido")'));
        echo '</div>';
        echo '<div id="cedido" style="display:none">';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('Cedido.setor_origem', array('label' => 'De qual órgão? '));
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('Cedido.setor_destino', array('label' => 'Para qual órgão?'));
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('Cedido.onus', array('label' => 'Cedência com ônus para o órgão de origem', 'type'=>'select', 'options'=>array('Não','Sim'), 'empty'=>'selecione'));
        echo '</div>';

        echo '</div>';
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">

</div>
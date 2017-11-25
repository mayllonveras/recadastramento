<?php
echo $html->script('validacao');
echo $html->script('jquery.min');
?>
<div class="contatos form">
    <?php echo $this->Form->create('Contato', array('class' => 'formee')); ?>
    <fieldset>
        <legend><?php __('Contato'); ?></legend>
        <?php
        echo '<div class="grid-9-12 left">';
        echo $this->Form->input('nome');
        echo '</div>';
        echo '<div class="grid-4-12 left">';
        echo $this->Form->input('matricula');
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $form->input('cpf', array('label' => 'CPF', 'onBlur' => 'ValidarCPF(ServidorIndexForm.ServidorCpf, botaoEnviar);', 'onKeyPress' => 'MascaraCPF(ServidorIndexForm.ServidorCpf)', 'required' => 'true'));
        echo '</div>';
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('email');
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('telefone');
        echo '</div>';
        echo '<div class="grid-12-12 left">';
        echo $this->Form->input('descricao', array('label'=>'Descrição'));
        echo '</div>';
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
</div>
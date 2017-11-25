<?php
$tipoDependentes = array('filho' => 'filho', 'enteado' => 'enteado', 'curatelado' => 'curetelado',
    'tutelado' => 'tutelado', 'menor' => 'menor sob guarda judicial', 'pai' => 'pai',
    'mãe' => 'mãe', 'irmão' => 'irmão', 'cônjuge' => 'cônjuge',
    'companheiro(a)' => 'companheiro(a)');
?>
<?php if ($dependentes) { ?>
    <div class="dependentes index">
        <h2><?php __('Dependentes cadastrados'); ?></h2>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo 'Nome'; ?></th>
                <th><?php echo 'Nascimento'; ?></th>
                <th><?php echo 'Tipo'; ?></th>
                <th class="actions"></th>
            </tr>
            <?php
            $i = 0;
            foreach ($dependentes as $dependente):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
                <tr<?php echo $class; ?>>
                    <td><?php echo $dependente['Dependente']['nome']; ?>&nbsp;</td>
                    <td><?php echo $this->Formatacao->data($dependente['Dependente']['nascimento']); ?>&nbsp;</td>
                    <td><?php echo $dependente['Dependente']['tipo']; ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $dependente['Dependente']['id']), null, sprintf(__('Deseja realmente excluir o dependente  %s?', true), $dependente['Dependente']['nome'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="actions">

    </div>
<?php } ?>
<div class="dependentes form">
    <?php echo $this->Form->create('Dependente', array('class' => 'formee')); ?>
    <fieldset>
        <legend><?php __('Adicionar Dependente'); ?></legend>
        <?php
        echo '<div class="grid-12-12 left">';
        echo $this->Form->button('Voltar para Formações', array('type' => 'button', 'class' => 'submit right', 'onclick' => "window.location='../formacoes/add'"));
        echo '</div>';
        echo $this->Form->input('servidor_id', array('type' => 'hidden', 'value' => $servidor['Servidor']['id']));
        echo '<div class="grid-3-12 left">';
        echo $this->Form->input('tipo', array('type' => 'select', 'options' => $tipoDependentes, 'empty' => 'selecione'));
        echo '</div>';
        echo '<div class="grid-4-12 left">';
        echo $this->Form->input('nome');
        echo '</div>';
        echo '<div class="grid-5-12 left">';
        echo $this->Form->input('nascimento', array('class' => 'data', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 100, 'maxYear' => date('Y')));
        echo '</div>';
        echo '<div class="grid-1-12 left">';
        echo $this->Form->button('Enviar', array('class' => 'submit'));
        echo '</div>';
        echo '<div class="grid-11-12 left "formee-msg-error"">';
        echo '<div class="formee-msg-info"><h4>Para avançar para a próxima página, clique o botão enviar sem preencher o nome do dependente.</h4></div>';
        //echo $this->Form->button('Pronto! Avançar', array('type' => 'button', 'class' => 'submit right', 'onclick' => "window.location='../comprovantes/add'"));
        echo '</div>';
        ?>
    </fieldset>
    <?php echo $this->Form->end(__(null, false)); ?>
</div>

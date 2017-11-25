<?php if ($formacoes) { ?>
    <div class="formacoes index">
        <h2><?php __('Formações Cadastradas'); ?></h2>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo 'Nível'; ?></th>
                <th><?php echo 'Curso'; ?></th>
                <th><?php echo 'Instituição'; ?></th>
                <th><?php echo 'Conclusão'; ?></th>
                <th class="actions"></th>
            </tr>
            <?php
            $i = 0;
            foreach ($formacoes as $formacao):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
                <tr<?php echo $class; ?>>
                    <td>
                        <?php echo $nivelescolaridades[$formacao['Formacao']['Nivelescolaridade_id']]; ?>&nbsp;
                    </td>
                    <td><?php echo $formacao['Formacao']['curso']; ?>&nbsp;</td>
                    <td><?php echo $formacao['Formacao']['instituicao']; ?>&nbsp;</td>
                    <td><?php echo $formacao['Formacao']['conclusao']; ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $formacao['Formacao']['id']), null, sprintf(__('Deseja realmente excluir a formação: %s?', true), $formacao['Formacao']['curso'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="actions"></div>
<?php } ?>
<div class="formacoes form">
    <?php echo $this->Form->create('Formacao', array('class' => 'formee')); ?>
    <fieldset>
        <legend><?php __('Adicionar Formação'); ?></legend>
        <?php
        echo $this->Form->input('Servidor_id', array('type' => 'hidden', 'value' => $servidor['Servidor']['id']));
        echo '<div class="grid-2-12 left">';
        echo $this->Form->input('Nivelescolaridade_id', array('label' => 'Nível'));
        echo '</div>';
        echo '<div class="grid-4-12 left">';
        echo $this->Form->input('curso');
        echo '</div>';
        echo '<div class="grid-4-12 left">';
        echo $this->Form->input('instituicao', array('label' => 'Instituição'));
        echo '</div>';
        echo '<div class="grid-2-12 left">';
        echo $this->Form->input('conclusao', array('label' => 'Conclusão', 'type' => 'date', 'dateFormat' => 'Y', 'minYear' => date('Y') - 100, 'maxYear' => date('Y')));
        echo '</div>';
        echo '<div class="grid-1-12 left">';
        echo $this->Form->button('Enviar', array('class' => 'submit'));
        echo '</div>';
        echo '<div class="grid-11-12 left "formee-msg-error"">';
        echo '<div class="formee-msg-info"><h4>Para avançar para a próxima página, clique o botão enviar sem preencher o curso e a instituição.</h4></div>';
        //echo $this->Form->button('Pronto! Avançar', array('type' => 'button', 'class' => 'submit right', 'onclick' => "window.location='../dependentes/add'"));
        echo '</div>';
        ?>
    </fieldset>
    <?php echo $this->Form->end(__(null, true)); ?>
</div>

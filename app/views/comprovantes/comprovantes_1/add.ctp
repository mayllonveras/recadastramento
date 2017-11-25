
<?php if ($comprovantes) { ?>
    <div class="comprovantes index">
        <h2><?php __('Comprovantes enviados'); ?></h2>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo 'Arquivo' ?></th>
                <th><?php echo 'Tipo'; ?></th>
                <th class="actions"></th>
            </tr>
            <?php
            $i = 0;
            foreach ($comprovantes as $comprovante):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
                <tr<?php echo $class; ?>>
                    <td>
                        <?php echo $this->Html->image('/img/documentos/' . $comprovante['Comprovante']['arquivo'], array('height' => '50px', 'class' => 'screenshot')); ?>&nbsp;</td>
                    <td>
                        <ul>
                            <?php
                            foreach ($comprovante['Tipocomprovante'] as $tipo) {
                                echo '<li>' . $tipo['tipo'] . '</li>';
                            }
                            ?>
                        </ul>
                    </td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $comprovante['Comprovante']['id']), null, sprintf(__('Deseja realmente excluir este comprovante?', true))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="actions">

    </div>
<?php } ?>
<div class="comprovantes form">
    <?php
    echo $this->Form->create('Comprovante', array('class' => 'formee', 'action' => 'createimage_step2', "enctype" => "multipart/form-data"));
    echo '<div class="grid-12-12 left">';
    echo $this->Form->button('Voltar para Dependentes', array('type' => 'button', 'class' => 'submit right', 'onclick' => "window.location='../dependentes/add'"));
    echo '</div>';
    ?>

    <fieldset>
        <legend><?php __('Adicionar Comprovante'); ?></legend>
        <?php
        echo $this->Form->input('Servidor_id', array('type' => 'hidden', 'value' => $servidor['Servidor']['id']));
        echo $this->Form->input('status', array('type' => 'hidden', 'value' => 'enviado'));
        echo '<div class="grid-6-12 left">';
        echo $this->Form->input('arquivo', array('type' => 'file', 'label' => ''));
        echo '</div>';
        echo $this->Form->input('status', array('type' => 'hidden'));
        echo '<div class="formee-msg-info">
                    <h3>Mais de um documento em um arquivo?</h3>
                    <h4>Selecione abaixo os documentos presentes no arquivo a ser enviado.</h4>
                </div>';
        echo $this->Form->input('Tipocomprovante', array('required' => 'true', 'label' => '', 'multiple' => 'checkbox', 'class' => 'grid-4-12 left'));
        ?>
    </fieldset>
    <?php
    echo '<div class="grid-12-12 left">';
    echo $this->Form->button('Adicionar', array('type' => 'submit', 'class' => 'submit'));
    echo '</div>';
    echo '<div class="grid-12-12">';
    echo $this->Form->button('Finalizar cadastro', array('type' => 'button', 'class' => 'submit right', 'onclick' => "window.location='../servidores/encerrar'"));
    echo '</div>';
    ?>
    <?php echo $this->Form->end(__(null, true)); ?>
</div>

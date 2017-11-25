<?php
echo $html->script('validacao');
echo $html->script('jquery.min');
echo $html->script('jquery.powertip');
?>
<script type='text/javascript'>//<![CDATA[ 
$(function(){

$('#por-que div').data('powertipjq', $([
    '<p>Este é um mecanismo de desafio-resposta </p>\n\
    <p>utilizado para tentar garantir que a resposta é </p>\n\
    <p>gerada por um ser humano. Sua aplicação no  </p>\n\
    <p>Sistema de Recadastramento dos Servidores Municipais </p>\n\
    <p>tem como objetivo evitar que o preenchimento dos </p>\n\
    <p>formulários seja feito por programas (bots ou robôs) </p>\n\
    <p>mal intencionados.</p>',
    ].join('\n')));
$('#por-que div').powerTip({
    placement: 'ne',
    smartPlacement: true,
    mouseOnToPopup: true
});
});//]]>  

</script>


<div class="servidores form">
    <?php
    echo $form->create('Servidor', array('class' => 'formee'));
    echo '<div class="grid-2-12">';
    echo $form->input('matricula', array('required'=>'true'));
    echo '</div>';
    echo '<div class="grid-3-12 left">';
    echo $form->input('cpf', array('label' => 'CPF', 'onBlur'=>'ValidarCPF(ServidorIndexForm.ServidorCpf, botaoEnviar);', 'onKeyPress'=>'MascaraCPF(ServidorIndexForm.ServidorCpf)', 'required'=>'true'));
    echo '</div>';
    echo '<div class="grid-5-12" id="por-que">';
    echo $form->input('security_code', array('label' => 'Por favor, informe a soma de ' . $mathCaptcha.'<div style="float:right; border:0">Por quê?</div>', 'required'=>'true'));
    echo '</div>';
    echo '<div id="porque">';
    echo '</div>';
    echo $form->end(array('name' => 'Send', 'class' => 'input_btn', 'id'=>'botaoEnviar'));
    ?>
</div>

<div class="actions">
    
</div>

<?php
echo $html->script('validacao');
echo $html->script('jquery.min');
?>
<div class="servidores form">
    <?php

	echo $form->create('Servidor');
	echo $form->input('matricula');
	echo $form->end('send');
	/*
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
	*/   
 ?>
</div>

<div class="actions">
    
</div>

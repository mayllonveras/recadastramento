<?php
echo $html -> script('validacao');
echo $html -> script('jquery.min');
echo $html -> script('jquery.powertip');
?>
<div class="servidores form">
	<?php echo $this -> Form -> create('Servidor', array('class' => 'formee')); ?>
	<?php
        echo '<div class="grid-2-12">';
        echo $form -> input('matricula', array('required' => 'true'));
        echo '</div>';
        echo '<div class="grid-3-12 left">';
        echo $form -> input('cpf', array('label' => 'CPF', 'onBlur' => 'ValidarCPF(ServidorEntrarForm.ServidorCpf, botaoEnviar);', 'onKeyPress' => 'MascaraCPF(ServidorEntrarForm.ServidorCpf)', 'required' => 'true'));
        echo '</div>';
	?>
	<?php echo $form -> end(array('name' => 'Send', 'class' => 'input_btn', 'id' => 'botaoEnviar')); ?>

	<?php echo $this -> Html -> link('Manual para Recadastramento', 'http://parnaiba.pi.gov.br/recadastramento/MANUAL-DE-RECADASTRAMENTO-DE-SERVIDORES-2013.pdf', array('target' => 'blank')); ?>
	<br />
	<br />
	<div class="formee-msg-info grid-10-12">
		<h4>Melhor visualizado com Google Chrome.</h4>
	</div>
</div>
<div class="actions">

</div>

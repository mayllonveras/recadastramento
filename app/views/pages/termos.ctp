<div class="formacoes index">
    <h3>Termos Legais</h3>
    </br>
    <p>No período estabelecido para o recadastramento os servidores municipais efetivos deverão acessar o sistema de recadastramento disponível na página da prefeitura na Internet, munidos da documentação estabelecida, bem como de suas cópias digitalizadas.</p>
    </br>
    <p>Não serão recadastrados os servidores que apresentarem documentação incompleta, ilegível ou em desacordo com o solicitado. </p>
    </br>
    <p>Os servidores que não se recadastrarem dentro prazo estabelecido serão considerados em falta funcional por descumprimento de dever funcional, implicando abertura de processo disciplinar.</p>
    </br>
    <p>Responderá penal e administrativamente o servidor que no ato de recadastramento, deliberadamente, prestar informações incorretas ou incompletas.</p>
    </br>
    <p>Os casos não previstos no Decreto  de Recadastramento serão avaliados pela SUADM (Superintendência de Administração), responsável pela Coordenação do Recadastramento, cabendo a esta decidir sobre os procedimentos a serem adotados.</p>
    <?php echo $this->Form->create(''); ?>
    <?php
    echo '<div class="grid-12-12 right">';
    echo $this->Form->button('Aceito. Iniciar meu Recadastramento', array('type' => 'button', 'class' => 'submit right', 'onclick' => "window.location='../servidores/add'"));
    echo '</div>';
    ?>
<?php echo $this->Form->end(__(null, true)); ?>
</div>
<div class="actions"></div>
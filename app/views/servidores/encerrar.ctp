<div class="servidores index">
    </br></br></br>
    <div class="formee-msg-success"> 
        <h3>Obrigado!</h3> 
        <h4>Seu cadastro foi armazenado com sucesso.</h4>
        <h4>Código de inscrição: <?php echo $servidor['Servidor']['id']?></h4>
        <h4>Seus comprovantes serão validados pelo setor de RH e você receberá o resultado por email.</h4>
        <h4>Caso haja algum problema com seu cadastro, entraremos em contato por email ou telefone.</h4>
    </div>
    <?php
    echo '<div class="grid-12-12">';
    echo $this->Form->button('Novo Cadastro', array('type' => 'button', 'class' => 'novocadastro', 'onclick' => "window.location='../servidores'"));
    echo '</div>';
    ?>
</div>
<div class="actions">

</div>
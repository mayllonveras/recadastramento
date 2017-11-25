<div class="container-login">
    <form class="form-signin" method="post" action="" id="login-form">
        <h2 class="form-signin-heading">Administração</h2>
        <?php
        FlashSession::showErrors();
        ?>
        <input type="text" class="input-block-level" placeholder="Nome de usuario" name="username">
        <input type="password" class="input-block-level" placeholder="Senha" name="password">

        <button class="btn btn-primary" type="submit" name="submitLoginBtn">Entrar</button>
    </form>

</div>
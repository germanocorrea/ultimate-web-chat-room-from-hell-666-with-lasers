{include file='_cabecalho.tpl'}

<div class="container">
    <h2>Register Now!</h2>
    <form class="register-form" action="gravar_usuario.php" method="post">
        <input type="text" name="username" id="username-register" placeholder="Username"><br>
        <input type="email" name="email" id="email-register" placeholder="Email"><br>
        <input type="password" name="password" id="password-register" placeholder="Password"><br>
        <input type="password" name="password-repeat" id="password-repeat-register" placeholder="Repeat your Password"><br>

        <button type="submit" name="register-submit" id="submit-register">Create New User</button>
    </form>
</div>

<div class="container">
    <h2>Login</h2>
    <form class="login-form" action="autenticar_usuario.php" method="post">
        <input type="text" name="username" id="username-login" placeholder="Username"><br>
        <input type="password" name="password" id="password-login" placeholder="Password"><br>

        <button type="submit" name="login-submit" id="submit-login">Login</button>
    </form>
</div>

{include file='_rodape.tpl'}

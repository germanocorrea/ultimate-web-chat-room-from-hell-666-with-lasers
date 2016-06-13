{include file='_cabecalho.tpl'}

<div class="container inf">
    <h2>The year is 1981. It's the future.</h2>
</div>

<div class="container">
    <h2>Register Now!</h2>
    <form class="register-form" action="gravar_usuario.php" method="post">
        <input type="text" name="username" id="username-register" placeholder="Username" class="input-tosco" required><br>
        <input type="email" name="email" id="email-register" placeholder="Email" class="input-tosco" required><br>
        <input type="password" name="password" id="password-register" placeholder="Password" class="input-tosco" required><br>
        <input type="password" name="password-repeat" id="password-repeat-register" placeholder="Repeat your Password" class="input-tosco" required><br>

        <button type="submit" name="register-submit" id="submit-register" class="botao-tosco">Create New User</button>
    </form>
</div>

<div class="container">
    <h2>Login</h2>
    <form class="login-form" action="autenticar_usuario.php" method="post">
        <input type="text" name="username" id="username-login" placeholder="Username" class="input-tosco" required><br>
        <input type="password" name="password" id="password-login" placeholder="Password" class="input-tosco" required><br>

        <button type="submit" name="login-submit" id="submit-login" class="botao-tosco">Login</button>
    </form>
</div>

{include file='_rodape.tpl'}

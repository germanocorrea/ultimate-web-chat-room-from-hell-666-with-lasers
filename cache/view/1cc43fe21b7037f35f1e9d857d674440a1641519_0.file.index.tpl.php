<?php
/* Smarty version 3.1.29, created on 2016-06-11 01:03:47
  from "/home/sculy/public_html/aula/bate-papo/View/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575b8da30290d3_55743801',
  'file_dependency' => 
  array (
    '1cc43fe21b7037f35f1e9d857d674440a1641519' => 
    array (
      0 => '/home/sculy/public_html/aula/bate-papo/View/index.tpl',
      1 => 1465617823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_cabecalho.tpl' => 1,
    'file:_rodape.tpl' => 1,
  ),
),false)) {
function content_575b8da30290d3_55743801 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_cabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <h2>Register Now!</h2>
    <form class="register-form" action="gravar_usuario.php" method="post">
        <input type="text" name="username" id="username-register" placeholder="Username" class="input-tosco"><br>
        <input type="email" name="email" id="email-register" placeholder="Email" class="input-tosco"><br>
        <input type="password" name="password" id="password-register" placeholder="Password" class="input-tosco"><br>
        <input type="password" name="password-repeat" id="password-repeat-register" placeholder="Repeat your Password" class="input-tosco"><br>

        <button type="submit" name="register-submit" id="submit-register" class="botao-tosco">Create New User</button>
    </form>
</div>

<div class="container">
    <h2>Login</h2>
    <form class="login-form" action="autenticar_usuario.php" method="post">
        <input type="text" name="username" id="username-login" placeholder="Username" class="input-tosco"><br>
        <input type="password" name="password" id="password-login" placeholder="Password" class="input-tosco"><br>

        <button type="submit" name="login-submit" id="submit-login" class="botao-tosco">Login</button>
    </form>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_rodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

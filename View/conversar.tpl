{include file='_cabecalho.tpl'}

<div class="chat-container">
    <form action="autenticar_usuario.php" method="post">
        <input type="submit" value="Logout" name="end-session"  class="botao-tosco logout">
    </form>
    <div class="chatinfos">The high speed ultra technology does not allow instant visualization of new and incoming messages. Please, reload the page to visualize new information.</div>
    <div class="msg-history">
        {$html_msg_log}
        <span id="scrollthis"></span>
    </div>
    <div class="input-field">
        <form class="input-form" action="gravar_texto.php" method="post">
            <input class="input-tosco" name="msg" type="text" placeholder="Message">
            <button class="botao-tosco" type="submit" name="button">Enviar</button>
        </form>
    </div>
</div>
<img class="catinho" src="assets/img/cute-kitty.png">
<script>
    scroll();
</script>
<script src="assets/js/kitty.js"></script>
{include file='_rodape.tpl'}

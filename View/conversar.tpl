{include file='_cabecalho.tpl'}

<div class="chat-container">
    <div class="msg-history">
        <div class="user-msg">
            <span class="chat-username">Username: </span>
            <span class="chat-usermsg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</span>
        </div>
        <div class="user-msg">
            <span class="chat-username">Username: </span>
            <span class="chat-usermsg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</span>
        </div>
    </div>
    <div class="input-field">
        <form class="input-form" action="gravar_texto.php" method="post">
            <textarea name="msg" rows="2" cols="40"></textarea>
            <button type="button" name="button">Enviar</button>
        </form>
    </div>
</div>

{include file='_rodape.tpl'}

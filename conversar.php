<?php
session_start();
require 'includes.php';
$smarty = new Smarty();

$user = new Usuario();
if (!$user->autenticado()) {

    $user->setNome($_SESSION['usuario']);

    $smarty->assign('usuario', $_SESSION['usuario']);

    header('Location: index.php');
}

$talk = new Conversa();
$html_msg_log_json = $talk->listar();
$html_msg_log = '';
foreach ($html_msg_log_json as $msg => $msg_info) {
    $html_msg_log = $html_msg_log . '<div class="user-msg">
            <span class="chat-username">' . $msg_info['username'] . ': </span>
            <span class="chat-usermsg">' . $msg_info['texto'] . '</span>
        </div>';
}

$smarty->assign('html_msg_log', $html_msg_log);

$smarty->display('conversar.tpl');

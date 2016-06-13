<?php
session_start();
require 'includes.php';
if (isset($_POST['msg'])) {
    $user = new Usuario();
    $user->setNome($_SESSION['usuario']);

    $talk = new Conversa();
    $talk->adicionar($user, $_POST['msg']);
    header('Location: conversar.php');
}
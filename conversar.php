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

$smarty->display('conversar.tpl');

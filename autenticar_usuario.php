<?php
session_start();
require 'includes.php';
if (isset($_POST['username'])) {
    
    $user = new Usuario();
    $_POST['userObj'] = $user;
    if ($user->autenticar($_POST['username'], $_POST['password'])) header('Location: conversar.php');
    else header('Location: index.php?log=error');
}
elseif (isset($_POST['end-session'])) {
    unset($_SESSION);
    session_unset();
    header('Location: index.php');
}
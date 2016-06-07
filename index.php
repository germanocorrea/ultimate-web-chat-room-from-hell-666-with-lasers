<?php
session_start();
require 'includes.php';
$smarty = new Smarty();

$user = new Usuario();
if ($user->autenticado()) header('Location: conversar.php');

$smarty->display('index.tpl');

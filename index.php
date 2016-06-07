<?php
session_start();
require 'includes.php';
$smarty = new Smarty();

$smarty->display('index.tpl');

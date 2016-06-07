<?php
require 'includes.php';
if (isset($_POST['username'])) {

    $user = new Usuario();

    if ($user->criar($_POST['username'], $_POST['password'], $_POST['email'])) {
        header('Location: index.php?reg=true');
    }
    else {
        header('Location: index.php?reg=false');
    }
}

<?php
require_once 'conexao.php';

if (!$conected->isLoggedIn())
{
header('Location: form-verifica.php');
}
?>
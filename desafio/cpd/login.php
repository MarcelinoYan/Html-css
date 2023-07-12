<?php
session_start();

$validUsers = array(
    'cpd151' => 'cpd@2023',
    'adm' => 'adm',
    'usuario3' => 'senha3'
);

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($validUsers[$username]) && $validUsers[$username] === $password) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
    exit;
} else {
    header('Location: index.html?error=1');
    exit;
}
?>
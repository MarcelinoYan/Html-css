<?php
session_start();

$validUsers = array(
    'cpd151' => 'cpd@2023',
    'usuario2' => 'senha2',
    'usuario3' => 'senha3'
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!isset($validUsers[$username])) {
        $validUsers[$username] = $password;
        $_SESSION['registration_success'] = true;
        header('Location: index.html');
        exit;
    } else {
        $_SESSION['registration_error'] = true;
        header('Location: register.html');
        exit;
    }
} else {
    header('Location: register.html');
    exit;
}
?>

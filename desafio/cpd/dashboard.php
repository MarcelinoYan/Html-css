<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.html');
    exit;
}

// Verifica se o nome de usuário está definido na sessão
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = 'Usuário Desconhecido';
}

// Função para realizar o logoff
function logoff() {
    session_unset();
    session_destroy();
    header('Location: index.html');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo ao Dashboard, <?php echo $username; ?></h1>
    <p>Apenas usuários autenticados podem ver esta página.</p>
    
    <a href="#" onclick="logoff()">Logoff</a>
    
    <script>
        function logoff() {
            if (confirm("Deseja realmente fazer logoff?")) {
                window.location.href = "logoff.php";
            }
        }
    </script>
</body>
</html>
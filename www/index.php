<?php
$host = 'db';
$user = 'usuario';
$pass = 'senha';
$db = 'meu_banco';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida ao banco de dados!";
?>

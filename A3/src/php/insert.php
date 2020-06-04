<?php

echo "<h2>insert.php</h2>";

$servidor = "localhost:3306";
$usuario = "root";
$senha = "";
$dbname = "atividade3";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "<p>Conectado com o banco de dados!</p>";
}

$userName = $_POST["userName"];
$userCpf = $_POST["userCpf"];
$userGender = $_POST["userGender"];
$userPic = $_POST["userPic"];
$userMilitary = $_POST["userMilitary"];
$userEmail = $_POST["userEmail"];
$userPass = $_POST["userPass"];


$insert = "INSERT INTO 
    Pessoa (nome, cpf, sexo, linkimage, nreservista, email, senha, data_cadastro, hora_cadastro) 
    VALUES
    ('$userName', $userCpf, '$userGender', '$userPic', $userMilitary, '$userEmail', '$userPass', CURDATE(), CURRENT_TIME())";

echo "<br/>Operação: $insert";

$result = mysqli_query($conn, $insert);

echo "<h1>Resposta do lado do servidor:</h1>";

if ($result) {
    echo "<br/>Inseriu!";
} else {
    echo "<br/>Não inseriu!";
    echo "<br/>Aqui está o erro: " . $result . mysqli_error($conn);
}

echo "<br/><a href='../../form.php'>Voltar para o formulário</a>";

mysqli_close($conn);

?>
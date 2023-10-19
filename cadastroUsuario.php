<?php
header("Content-Type: application/json");

$servername = "192.168.0.79";
$username = "sammy";
$password = "C4r3Plu$";
$database = "ilhago";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "erro de conexao";
}

//if ($_SERVER["REQUEST_METHOD"] === "POST") {
// Endpoint para cadastrar um novo usuário


      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = $_POST["senha"];
      $tipo = $_POST["tipo"];
      var_dump($_POST);  // Verifique se os dados estão corretos

    $sql = "INSERT INTO usuario (nome, email, senha, tipo) VALUES ('$nome', '$email', '$senha', '$tipo')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("message" => "Usuário cadastrado com sucesso."));
    } else {
        echo json_encode(array("error" => "Erro ao cadastrar o usuário: " . $conn->error));
    }
//}

$conn->close();
?>

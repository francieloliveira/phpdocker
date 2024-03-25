<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once "pdo_conexao.php";

//para debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ----------------------

$conexao = db_connect();

// Check if the POST request method is used
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the name, email, and password from the POST request
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Insert the user into the Usuario table
    if (insertUser($conexao, $nome, $email, $senha)) {
        echo "Usuário inserido com sucesso!";
    } else {
        echo "Erro ao inserir usuário.";
    }
}

// Insert the user into the Usuario table
function insertUser($conexao, $nome, $email, $senha)
{
    // Define the SQL statement
    $sql = "INSERT INTO Usuario (nome, email, senha) VALUES (:nome, :email, :senha)";

    // Prepare the SQL statement
    $stmt = $conexao->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        $conexao = null;
        exit();
    }
}

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Senha</th>
</tr>";

// Usando uma declaração preparada para buscar todos os usuários
$stmt = $conexao->prepare("SELECT * FROM Usuario");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['senha'] . "</td>";
echo "</tr>";
}
echo "</table>";

echo "<a href='index.php'>Voltar a página inicial</a>";

db_disconnect($conexao);

?>

</body>
</html>
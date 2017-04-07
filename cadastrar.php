<html>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "agenda";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";

// Fazer query:
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$dataNascimento = $_POST['dataNascimento'];


$query = "INSERT INTO contatos VALUES (NULL,'".$nome."','".$email."','".$endereco."','".$dataNascimento."');";

if ($conn->query($query) === TRUE) {
    echo "Cadastro efetuado!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<br>
<a href="contatos.php">Voltar para Lista de Contatos</a>

</body>
</html> 

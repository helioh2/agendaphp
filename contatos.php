<html>
<head>
<title>Agenda de contatos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<?php
//Conexão e consulta ao Mysql
session_start();

if ( $_SESSION["logado"] != "sim") {
	echo "Não Logado.<br>";
	echo "<a href='login.html'>Fazer Login</a>";
} else {

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
	echo "Connected successfully";

	// Fazer query:
	$query = "select nome, email, endereco from contatos;";

	$result = $conn->query($query);

	if ($result->num_rows > 0) {
	    echo "<table class='table-bordered'><th>Nome</th><th>email</th><th>endereco</th>";
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["nome"]."</td><td>".$row["email"]."</td><td>".$row["endereco"]."</td></td></tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}
	$conn->close();
}
?>

<br>
<a href="cadastroform.html">Cadastrar novo</a>

</body>

</html>

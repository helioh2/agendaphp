<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <script type="text/javascript">
        function redirect(url) {
            window.setTimeout(function() {
                        window.location.replace(url);
                         }, 5000);
        }

    </script>

</head>
<body>
<?php

$usuario = $_REQUEST["usuario"];
$senha = $_REQUEST["senha"];

if ($usuario=="helio" && $senha == "ufpr"){
    if (session_status() == PHP_SESSION_NONE or session_Id == ''){
            session_start();
            echo session_id();

            $_SESSION["logado"] = "sim";
            $_SESSION["usuario"] = "helio";
    }


    echo "Conectado. Sessão iniciada para  ".$_SESSION["usuario"];
    echo "Redirecionando para página de contatos em 5 segundos.";
    $redirect = "contatos.php";
    echo "<script> redirect('".$redirect."'); </script>";

} else {
    echo "Usuário e senha inválidos. Redirecionando para página de login em 5 segundos.";
    $redirect = "login.html";
    echo "<script> redirect('".$redirect."'); </script>";

}

?>



</body>
</html>



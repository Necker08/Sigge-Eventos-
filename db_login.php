<?php
session_start();

require_once("db_conexao.php");

if (isset($_POST['btn_login'])) {
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Email ou senha incorretos!');
        window.location.href = 'login.php';
        </script>";
        die();
    } else {
        $row = mysqli_fetch_assoc($result);

        $_SESSION["nome"] = $row['NOME'];
        $_SESSION["id_usuario"] = $row['ID_USUARIO'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["tipo_usuario"] = $row['TIPO_USUARIO'];

        $arrayUsuario = [
            "email" => $row['email'],
            "tipo_usuario" => $row['TIPO_USUARIO']
        ];

        $_SESSION["usuario"] = json_encode($arrayUsuario);

        if ($row['TIPO_USUARIO'] === 'admin') {
            
            header("Location: CadastroEvento.php"); // Redireciona para CadastroEvento.php se o usuário for do tipo admin
            exit();
        } else { 
            header("Location: login.php"); // Redireciona para login.php se o usuário não for do tipo admin
            exit();
        }
        if ($row['TIPO_USUARIO'] === 'palestrante') {
            header("Location: index.php"); // Redireciona para CadastroEvento.php se o usuário for do tipo admin
            exit();
        }
    }
        
}
?>

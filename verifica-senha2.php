<?php

require_once("db_conexao.php");
$cachorro = $_POST['cachorro1'];

if(isset($_POST['enviar'])){


}

$email = $_POST ['email1'];







$sql = "SELECT senha,email,cachorro FROM usuario where email ='$email'  AND cachorro = '$cachorro'";
$resultado = mysqli_query($conexao,$sql);

$dados = mysqli_fetch_array($resultado);

if (mysqli_num_rows($resultado) > 0) {


$row = mysqli_fetch_assoc($resultado);

/* $chaves = array_keys($row); */

   

    if ($dados['email'] == $email && $dados['cachorro'] == $cachorro) {
       

        $senha = $dados['senha'];
        
        
        echo '<script language="javascript" type="text/javascript">';
            echo 'alert( "'.$senha.'")';


       echo ' </script>';
       

        exit();

        }
        
    }

   
?>


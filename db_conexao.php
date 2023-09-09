<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistemafinal";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

mysqli_set_charset($conexao, "utf8");

if(mysqli_connect_error()){
    echo "Erro conexao: ". mysqli_connect_error();
}else{
    //echo "Conexao realizada com sucesso! ";
}


?>
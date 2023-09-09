<?php
require_once("db_conexao.php");
session_start();

if (isset($_POST['btn_cadastrar'])) {

    //Dados Usuários
    $idUsuario = mysqli_escape_string($conexao, $_POST['id_usuario']);
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $data_nasc = mysqli_escape_string($conexao, $_POST['data_nasc']);
    $cpf = mysqli_escape_string($conexao, $_POST['cpf']);
    $rg = mysqli_escape_string($conexao, $_POST['rg']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $cachorro = mysqli_escape_string($conexao, $_POST['cachorro']);
    $senha = trim(mysqli_escape_string($conexao, $_POST['senha']));
    $tipoUsuario = mysqli_escape_string($conexao, $_POST['tipo_usuario']);

    //Dados endereço
    $idEndereco = mysqli_escape_string($conexao, $_POST['id_endereco']);
    $rua = mysqli_escape_string($conexao, $_POST['rua']);
    $bairro = mysqli_escape_string($conexao, $_POST['bairro']);
    $complemento = mysqli_escape_string($conexao, $_POST['complemento']);
    $cep = mysqli_escape_string($conexao, $_POST['cep']);
    $cidade = mysqli_escape_string($conexao, $_POST['cidade']);
    $estado = mysqli_escape_string($conexao, $_POST['estado']);

    if (isset($array) && $array['id_usuario']) {
        echo "Esse usuário ja existe";
    } else {
        $sqlUsuario = "INSERT INTO usuario(nome,data_nasc,cpf,rg,email,cachorro,senha,tipo_usuario) VALUES(?,?,?,?,?,?,?,?)";
        $sqlEndereco = "INSERT INTO endereco(rua,bairro,complemento,cep,cidade,estado) VALUES(?,?,?,?,?,?)";
        $tiposUsuario = "ssssssss";
        $tiposEndereco = "ssssss";
        $parametrosUsuario = array($nome, $data_nasc, $cpf, $rg, $email, $cachorro, $senha, $tipoUsuario);
        $parametrosEndereco = array($rua, $bairro, $complemento, $cep, $cidade, $estado);

        $stmtUsuario = mysqli_prepare($conexao, $sqlUsuario);
        $stmtEndereco = mysqli_prepare($conexao, $sqlEndereco);

        if (!$stmtUsuario || !$stmtEndereco) {
            echo "Verifique os campos! " . mysqli_error($conexao);
        }

        mysqli_stmt_bind_param($stmtUsuario, $tiposUsuario, ...$parametrosUsuario);
        mysqli_stmt_execute($stmtUsuario);


        mysqli_stmt_bind_param($stmtEndereco, $tiposEndereco, ...$parametrosEndereco);
        mysqli_stmt_execute($stmtEndereco);

        if (mysqli_stmt_error($stmtUsuario) || mysqli_stmt_error($stmtEndereco)) {
            header('location: usuario-novo.php?erro');
        }
        if ($codigo > 0) {
            header('location: usuario-novo.php?update');
        } else {
            header('location: usuario-novo.php?sucesso');
        }

        mysqli_stmt_close($stmtUsuario);
        mysqli_stmt_close($stmtEndereco);
    }
}

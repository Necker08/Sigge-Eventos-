<?php
require_once("db_conexao.php");
session_start();

if (isset($_POST['btn_cadastrar'])) {
    //Dados endereço
    $idEndereco = mysqli_escape_string($conexao, $_POST['id_endereco']);
    $rua = mysqli_escape_string($conexao, $_POST['rua']);
    $bairro = mysqli_escape_string($conexao, $_POST['bairro']);
    $complemento = mysqli_escape_string($conexao, $_POST['complemento']);
    $cep = mysqli_escape_string($conexao, $_POST['cep']);
    $cidade = mysqli_escape_string($conexao, $_POST['cidade']);
    $estado = mysqli_escape_string($conexao, $_POST['estado']);



    if (isset($array) && $array['id_endereco']) {
        echo "Esse endereço ja existe";
    } else {
        $sqlEndereco = "INSERT INTO endereco(rua,bairro,complemento,cep,cidade,estado) VALUES(?,?,?,?,?,?)";
        $tiposEndereco = "ssssss";
        $parametrosEndereco = array($rua, $bairro, $complemento, $cep, $cidade, $estado);
        $stmtEndereco = mysqli_prepare($conexao, $sqlEndereco);


        if (!$stmtEndereco) {
            echo "Verifique os campos! " . mysqli_error($conexao);
        }

        mysqli_stmt_bind_param($stmtEndereco, $tiposEndereco, ...$parametrosEndereco);
        mysqli_stmt_execute($stmtEndereco);

        if (mysqli_stmt_error($stmtEndereco)) {
            header('location: usuario-novo.php?erro');
        }
        if ($codigo > 0) {
            header('location: usuario-novo.php?update');
        } else {
            header('location: usuario-novo.php?sucesso');
        }

        mysqli_stmt_close($stmtEndereco);
    }
    $sqlID = "SELECT id_endereco FROM endereco order by id_endereco desc limit 1";
    $stmtIdEndereco = mysqli_query($conexao, $sqlID);
    $result = mysqli_fetch_assoc($stmtIdEndereco);

    //Dados Usuários
    $idUsuario = mysqli_escape_string($conexao, $_POST['id_usuario']);
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $data_nasc = mysqli_escape_string($conexao, $_POST['data_nasc']);
    $cpf = mysqli_escape_string($conexao, $_POST['cpf']);
    $rg = mysqli_escape_string($conexao, $_POST['rg']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $senha = trim(mysqli_escape_string($conexao, $_POST['senha']));
    $tipoUsuario = mysqli_escape_string($conexao, $_POST['tipo_usuario']);

    if (isset($array) && $array['id_usuario']) {
        echo "Esse usuário ja existe";
    } else {
        $sqlUsuario = "INSERT INTO usuario(nome,data_nasc,cpf,rg,email,senha,tipo_usuario,id_endereco) VALUES(?,?,?,?,?,?,?,?)";
        $tiposUsuario = "sssssssi";
        $parametrosUsuario = array($nome, $data_nasc, $cpf, $rg, $email, $senha, $tipoUsuario, $result['id_endereco']);
        $stmtUsuario = mysqli_prepare($conexao, $sqlUsuario);

        if (!$stmtUsuario) {
            echo "Verifique os campos! " . mysqli_error($conexao);
        }

        mysqli_stmt_bind_param($stmtUsuario, $tiposUsuario, ...$parametrosUsuario);
        mysqli_stmt_execute($stmtUsuario);

        if (mysqli_stmt_error($stmtUsuario)) {
            header('location: usuario-novo.php?erro');
        }
        if ($codigo > 0) {
            header('location: usuario-novo.php?update');
        } else {
            header('location: usuario-novo.php?sucesso');
        }

        mysqli_stmt_close($stmtUsuario);
    }
}


<?php
require_once("db_Conexao.php");
session_start();

if (isset($_POST['btn_cadastrar'])) {
    //Dados endereço
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $cnpj = isset($_POST['cnpj']) ? mysqli_escape_string($conexao, $_POST['cnpj']) : '';
    $insc_estad = isset($_POST['insc_estad']) ? mysqli_escape_string($conexao, $_POST['insc_estad']) : '';
    $tel = isset($_POST['tel']) ? mysqli_escape_string($conexao, $_POST['tel']) : '';
    $rua = isset($_POST['id_endereco']) ? mysqli_escape_string($conexao, $_POST['id_endereco']) : '';
    $diretor = mysqli_escape_string($conexao, $_POST['diretor']);


    if (isset($array)) {
        echo "Essa Instituicao já existe";
    } else {
        $sqlinstituicao = "INSERT INTO instituicao(nome_instituicao,email,cnpj,inscricao_estadual,telefone,diretor,id_endereco) VALUES(?,?,?,?,?,?,?)";
        $tiposinstituicao = "sssssss";
        $parametrosinstituicao = array($nome, $email, $cnpj, $insc_estad, $tel, $diretor, $id_endereco);
        $stmtinstituicao = mysqli_prepare($conexao, $sqlinstituicao);


        if (!$stmtinstituicao) {
            echo "Verifique os campos! " . mysqli_error($conexao);
        }

        mysqli_stmt_bind_param($stmtinstituicao, $tiposinstituicao, ...$parametrosinstituicao);
        mysqli_stmt_execute($stmtinstituicao);

        if (mysqli_stmt_error($stmtinstituicao)) {
            header('location: CadastroInstituto.php?erro');
        }
        if ($codigo > 0) {
            header('location: CadastroInstituto.php?update');
        } else {
            header('location: CadastroInstituto.php?sucesso');
        }

        mysqli_stmt_close($stmtinstituicao);
        
    }
}



?>





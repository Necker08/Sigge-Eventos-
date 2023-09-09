
<?php
require_once("db_conexao.php");
session_start();


if (isset($_POST['btn_cadastrar'])) {
    $id_evento = mysqli_escape_string($conexao, $_POST['id_evento']);
    $nome_evento = mysqli_escape_string($conexao, $_POST['nome_evento']);
    $descricao_evento = mysqli_escape_string($conexao, $_POST['descricao_evento']);
    $dia = mysqli_escape_string($conexao, $_POST['dia']);
    $id_instituicao = mysqli_escape_string($conexao,$_POST['id_instituicao']);
    $id_usuario = mysqli_escape_string($conexao,$_POST['id_usuario']);


    
    if (isset($array) && $array['id_evento']) {
        echo "Esse evento ja existe";
    } else {

        $sqlEvento = "INSERT INTO evento(nome_Evento,descricao_evento,dia, id_instituicao, id_usuario) VALUES(?,?,?,?,?)";
        $tiposEvento = "sssii";
        $parametrosEvento = array($nome_evento, $descricao_evento, $dia, $id_instituicao, $id_usuario);

        $stmtEvento = mysqli_prepare($conexao, $sqlEvento);

        if (!$stmtEvento) {
            echo "Verifique os campos! " . mysqli_error($conexao);
        }

        mysqli_stmt_bind_param($stmtEvento, $tiposEvento, ...$parametrosEvento);
        mysqli_stmt_execute($stmtEvento);

        if (mysqli_stmt_error($stmtEvento)) {
            header('location: CadastroEvento.php?erro');
        }
        if ($codigo > 0) {
            header('location: CadastroEvento.php?update');
        } else {
            header('location: CadastroEvento.php?sucesso');
        }

        mysqli_stmt_close($stmtEvento);
        
    }
      
}
?>



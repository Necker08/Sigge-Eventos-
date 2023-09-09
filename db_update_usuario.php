

<?php
session_start();

require_once("db_conexao.php");

$var_id_usuario = $_SESSION['id_usuario'];
$var_id_endereco = $_SESSION['id_endereco'];


if (isset($_POST['bnt_alterar'])) {

    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $data_nasc = mysqli_escape_string($conexao, $_POST['data_nasc']);
    $cpf = mysqli_escape_string($conexao, $_POST['cpf']);
    $rg = mysqli_escape_string($conexao, $_POST['rg']);
    $imagem = mysqli_escape_string($conexao, $_POST['imagem']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $senha = trim(mysqli_escape_string($conexao, $_POST['senha']));
    $tipoUsuario = mysqli_escape_string($conexao, $_POST['tipo_usuario']);
    $rua = mysqli_escape_string($conexao, $_POST['rua']);
    $bairro = mysqli_escape_string($conexao, $_POST['bairro']);
    $complemento = mysqli_escape_string($conexao, $_POST['complemento']);
    $cep = mysqli_escape_string($conexao, $_POST['cep']);
    $cidade = mysqli_escape_string($conexao, $_POST['cidade']);
    $estado = mysqli_escape_string($conexao, $_POST['estado']);

    $sql = "UPDATE usuario INNER JOIN endereco ON (usuario.id_endereco = endereco.id_endereco) 
            SET usuario.nome= '$nome', usuario.data_nasc= '$data_nasc', usuario.cpf= '$cpf', usuario.rg= '$rg', usuario.email= '$email', usuario.senha= '$senha',
                endereco.rua= '$rua', endereco.bairro= '$bairro', endereco.complemento= '$complemento', endereco.cep= '$cep', endereco.cidade= '$cidade', endereco.estado= '$estado'  
            WHERE id_usuario = '$var_id_usuario'";

    $result = mysqli_query($conexao, $sql);

    if ($result) {
        // atualizando o nome do usuario logado
        $_SESSION['nome'] = $nome;

        // verificando erros na imagem enviada
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            $imagem = file_get_contents($_FILES['imagem']['tmp_name']);
            $imagem = $conexao->real_escape_string($imagem);

            $sql = "UPDATE usuario set imagem = '$imagem' WHERE id_usuario = '$var_id_usuario'";
            $resul = mysqli_query($conexao, $sql);
        } else {
            echo "Erro ao enviar a imagem.";
        }

        // Atualização bem-sucedida, redireciona para a página de perfil
        header("Location: perfil_usuario.php");
        exit();
    } else {
        // Erro na atualização, exibe mensagem de erro
        echo "Erro na atualização do usuário: " . mysqli_error($conexao);
    }
} else {
    echo "erro";
}
?>
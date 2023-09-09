<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verificar se todos os campos foram preenchidos
    if (isset($_POST["evento"]) && isset($_POST["nome"]) && isset($_POST["email"])) {
        // Obter os valores dos campos do formulário
        $id_evento = $_POST["evento"];
        $nome_participante = $_POST["nome"];
        $email_participante = $_POST["email"];

        // Conexão com o banco de dados
        include_once "db_conexao.php";

        // Query para inserir os dados na tabela
        $sql_inserir = "INSERT INTO inscricoes (id_evento, nome_participante, email_participante, data_inscricao) VALUES ('$id_evento', '$nome_participante', '$email_participante', NOW())";

        // Executar a query de inserção
        if (mysqli_query($conexao, $sql_inserir)) {
            // Exibir mensagem de sucesso
            echo "<script>alert('Cadastro realizado com sucesso!');</script>";
            // Redirecionar para a página index.php após 3 segundos
            header("refresh:3;url=index.php");
            exit();
        } else {
            // Exibir mensagem de erro
            echo "<script>alert('Erro tente novamente!');</script>";
            // Redirecionar para a página index.php após 3 segundos
            header("refresh:3;url=index.php");
            exit();
        } 
    }
}
?>

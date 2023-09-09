
<?php
require_once("db_Conexao.php");
session_start();

if (isset($_POST['btn_enviar'])) {
    //Dados endereço
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $mensagem =  mysqli_escape_string($conexao, $_POST['mensagem']);
   


    if (isset($array)) {
        echo "Sua mensagem ja foi enviada";
    } else {
        $sqlajuda = "INSERT INTO ajuda(nome,email,mensagem) VALUES(?,?,?)";
        $tiposajuda = "sss";
        $parametrosajuda = array($nome, $email, $mensagem);
        $stmtajuda = mysqli_prepare($conexao, $sqlajuda);


        if (!$stmtajuda) {
            echo "Verifique os campos! " . mysqli_error($conexao);
        }

        mysqli_stmt_bind_param($stmtajuda, $tiposajuda, ...$parametrosajuda);
        mysqli_stmt_execute($stmtajuda);

        
 /*
        ini_set("SMTPSecure", "tls");
        ini_set("Port", 587);


       if (mysqli_stmt_error($stmtajuda)) {
            header('location: Ajuda.php?erro');
        } else {
            // Construir o corpo do email com os dados
            $assunto = "Solicitação de ajuda";
            $corpo = "Nome: " . $nome . "\n";
            $corpo .= "Email: " . $email . "\n";
            $corpo .= "Mensagem: " . $mensagem;

            // Enviar o email
            $to = "testes.alexandre08@gmail.com";
            $headers = "From: testes.alexandre08@gmail.com" . "\r\n" .
                "Reply-To: testes.alexandre08@gmail.com" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

            mail($to, $assunto, $corpo, $headers);
*/
        

        mysqli_stmt_close($stmtajuda);
        
    }
}



?>




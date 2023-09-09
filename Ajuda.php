<?php
// Configurações do banco de dados
$host = "localhost";
$db = "sistemafinal";
$usuario = "root";
$senha = "";

// Conexão com o banco de dados
$conexao = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $senha);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];

  // Insere os dados no banco de dados
  $query = $conexao->prepare("INSERT INTO mensagens (nome, email, mensagem) VALUES (:nome, :email, :mensagem)");
  $query->bindParam(":nome", $nome);
  $query->bindParam(":email", $email);
  $query->bindParam(":mensagem", $mensagem);
  $query->execute();
	// Redirecionar o usuário para a página de exibição de mensagens
header("Location: mensagens.php?id=" . $mensagemId);
exit();

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tela de Ajuda</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(600deg, #ffffff, #000000);
      color: #ffffff;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.8);
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      margin-bottom: 20px;
      text-align: center;
      color: #3498db;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .menu-button {
      text-align: center;
      margin-top: 20px;
    }

    .btn-primary {
      background-color: #3498db;
      border-color: #3498db;
    }

    .btn-secondary {
      background-color: #3498db;
      border-color: #3498db;
    }

    #dialog {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.8);
      color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      z-index: 9999;
    }
    .rodape{
       
        top: 10vh;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Tela de Ajuda</h1>

    <p>Se você precisa de ajuda com nosso site de eventos, por favor, preencha o formulário abaixo:</p>
    <form id="ajuda-form" method="post">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="mensagem">Mensagem:</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </form>
    
    <div class="menu-button">
      <a href="index.php" class="btn btn-secondary">Ir para a Página Inicial</a> 
    </div>
  </div>

  <div id="dialog">
    <h5>Enviado com sucesso!</h5>
    <p>Obrigado por entrar em contato.</p>
    <button id="dialog-close-btn" class="btn btn-secondary">Fechar</button>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#ajuda-form').submit(function(event) {
        event.preventDefault();

        // Simulando o envio do formulário
        $.ajax({
          url: $(this).attr("action"),
          type: $(this).attr("method"),
          data: $(this).serialize(),
          success: function(response) {
            exibirMensagem();
          },
          error: function(error) {
            console.log(error);
            // Lidar com erros, se necessário
          }
        });
      });

      $('#dialog-close-btn').click(function() {
        $('#dialog').hide();
      });

      function exibirMensagem() {
        $('#dialog').show();

        // Limpar os campos do formulário
        $('#nome').val('');
        $('#email').val('');
        $('#mensagem').val('');
      }
    });
  </script>


</body>
<div class="rodape">
<?php
include_once "rodape.php";
?> 
</html>

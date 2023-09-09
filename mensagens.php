<?php
// Configurações do banco de dados
$host = "localhost";
$db = "sistemafinal";
$usuario = "root";
$senha = "";

// Conexão com o banco de dados
$conexao = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $senha);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verifica se há uma requisição para marcar uma mensagem como lida
if (isset($_GET['id'])) {
  $idMensagemLida = $_GET['id'];
  $atualizarQuery = $conexao->prepare("UPDATE mensagens SET lida = 1 WHERE id = :id");
  $atualizarQuery->bindParam(':id', $idMensagemLida);
  $atualizarQuery->execute();
}

// Busca as mensagens do banco de dados novamente (após a atualização)
$query = $conexao->query("SELECT * FROM mensagens");
$mensagens = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Administração de Mensagens</title>
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

    .mensagem {
      margin-bottom: 20px;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 5px;
    }

    .mensagem-lida {
      display: none;
    }
  </style>
  <script>
    function marcarComoLida(idMensagem) {
      var mensagem = document.getElementById('mensagem-' + idMensagem);
      mensagem.classList.add('mensagem-lida');
      mensagem.style.display = 'none';
      alert('Mensagem marcada como lida!');
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Mensagens Recebidas</h1>

    <?php foreach ($mensagens as $mensagem) : ?>
      <div class="mensagem <?php echo ($mensagem['lida'] == 1) ? 'mensagem-lida' : ''; ?>" id="mensagem-<?php echo $mensagem['id']; ?>">
        <p><strong>Nome:</strong> <?php echo $mensagem['nome']; ?></p>
        <p><strong>Email:</strong> <?php echo $mensagem['email']; ?></p>
        <p><strong>Mensagem:</strong> <?php echo $mensagem['mensagem']; ?></p>
        <?php if ($mensagem['lida'] == 0) : ?>
          <p><a href="?id=<?php echo $mensagem['id']; ?>" onclick="marcarComoLida(<?php echo $mensagem['id']; ?>);">Marcar como lida</a></p>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>

    <div class="menu-button">
      <a href="index.php" class="btn btn-secondary">Ir para a Página Inicial</a> 
    </div>
  </div>
</body>
</html>

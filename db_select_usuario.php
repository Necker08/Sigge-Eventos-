<?php
require_once("db_conexao.php");

$idUsuario = 1; // Defina o ID do usuário desejado

$sql = "SELECT usuario.id_usuario, usuario.nome, usuario.cpf, usuario.email, usuario.rg, usuario.data_nasc, usuario.tipo_usuario, usuario.senha, usuario.id_endereco, 
endereco.id_endereco, endereco.rua, endereco.cidade, endereco.complemento, endereco.bairro, endereco.cep, endereco.estado 
FROM usuario 
INNER JOIN endereco 
ON usuario.id_endereco = endereco.id_endereco 
WHERE usuario.id_usuario = $idUsuario";

$result = mysqli_query($conexao, $sql);

if (!$result) {
  echo "Erro na consulta: " . mysqli_error($conexao);
  exit;
}

if (mysqli_num_rows($result) > 0) {
  // Recupere os dados do conjunto de resultados, por exemplo, usando um loop
  while ($row = mysqli_fetch_assoc($result)) {
    // Processar cada linha de dados
    $nome = $row['nome'];
    $cpf = $row['cpf'];
    $email = $row['email'];
    $rg = $row['rg'];
    $data_nasc = $row['data_nasc'];
    $tipo_usuario = $row['tipo_usuario'];
    $senha = $row['senha'];
    $id_endereco = $row['id_endereco'];
    $rua = $row['rua'];
    $cidade = $row['cidade'];
    $complemento = $row['complemento'];
    $bairro = $row['bairro'];
    $cep = $row['cep'];

    if (!isset($row['IMAGEM']) || empty($row['IMAGEM'])) {
      $row['IMAGEM'] = file_get_contents('imagens/user/default.jpg');
    }

    $linha = $row;
  }
  mysqli_close($conexao);
} else {
  echo "Nenhum usuário encontrado.";
}
?>

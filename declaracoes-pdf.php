<style>
  .logo-container {
    display: flex;
    justify-content: center;
   
  }

  .logo {
    max-width: 100px; /* Defina o tamanho desejado em pixels */
    height: 50px;
  }
</style>

<?php
  session_start();
          
  include("mpdf60/mpdf.php");

  include_once "db_conexao.php";
  // Consulta para obter o nome e a descrição do evento
  $consulta = "SELECT nome_evento, descricao_evento FROM evento";
  $resultado = mysqli_query($conexao, $consulta);

  // Verificar se a consulta retornou resultados
  if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $nomeEvento = $row['nome_evento'];
    $descricaoEvento = $row['descricao_evento'];
  } else {
    $nomeEvento = "Nome do Evento";
    $descricaoEvento = "Descrição do Evento";
  }

  // Fechar a conexão com o banco de dados
  mysqli_close($conexao);

  $html = "
    <div class='certificado'>
      <div class='titulo'>
        <h1>CERTIFICADO</h1>
      </div>
      <div class='conteudo'>
        <h2>Declaração</h2>
        <p>Declaramos que o aluno(a) <b>" . $_SESSION['nome'] . "</b> concluiu, com êxito, nesta data, a oficina de <b>" . $nomeEvento . "</b>. Com a carga horária de <b>" . $_SESSION['carga_horaria'] . " 40 Hr</b>, oferecida pelo Projeto de Programação e Software de Aplicativos I.</p>
      </div>
      <div class='assinatura'>
        <p id='palmas'>Palmas, " . $_SESSION['data_oficina'] . "</p>
        <p><b>Leticia Mariano</b></p>
        <p>Coordenadora do Projeto</p>
      </div>
    </div>

    <div class='logo-container'>
          <img src='imagens/logo/logo.jpeg' alt='' class='logo' style='width: 20%; height: auto; float: right;  margin-right: 80px; '>
        </div>
  ";

  // Instanciando 
  $mpdf = new mPDF('c', 'A4-L'); 
  // Definindo o tamanho de exibição
  $mpdf->SetDisplayMode('fullpage');
  // Carregando o CSS para o objeto $mpdf
  $css = file_get_contents("css/estilo.css");
  $mpdf->WriteHTML($css, 1);
  // Carregando o conteúdo no objeto $mpdf
  $mpdf->WriteHTML($html);
  // Limpando o buffer
  ob_clean();
  // Método para exibir no navegador
  $mpdf->Output();

  exit;
?>

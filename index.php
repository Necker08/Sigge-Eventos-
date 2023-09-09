<?php
session_start();
?>




<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Sigge Eventos</title>
  <link href="css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/footer-with-button-logo.css">
  <link rel="stylesheet" type="text/css" href="css/product.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>




  <style>
    .body {
      overflow-y: scroll;
      /* Força a exibição da barra de rolagem vertical */
    }

    ::-webkit-scrollbar {
      width: 5px;
      /* Largura da barra de rolagem */
      background-color: #F5F5F5;
      /* Cor de fundo da barra de rolagem */
    }

    ::-webkit-scrollbar-thumb {
      background-color: #000000;
      /* Cor da alça da barra de rolagem */
      width: 3px;
      /* Largura da alça da barra de rolagem */
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: #555555;
      /* Cor da alça da barra de rolagem ao passar o mouse */
    }


    .evento-tabela {
      border-collapse: collapse;
    }

    .evento-tabela th,
    .evento-tabela td {
      padding: 5px;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .container {
      width: 200px;
    }
  </style>
</head>

<body>
  <?php
  include_once "menu.php";
  include_once "db_conexao.php";


  
  $sql_evento = "SELECT nome_evento, descricao_evento, dia FROM evento";
  $sql_resultado_evento = mysqli_query($conexao, $sql_evento);

  $cod_evento = 0;

  ?>



  <?php

  include_once "db_conexao.php";

  // ... configurações do banco de dados ...

  // Verificar se há novas mensagens não lidas
  $query = $conexao->query("SELECT COUNT(*) AS count FROM mensagens WHERE lida = 0");
  $resultado = $query->fetch_assoc();
  $mensagensNaoLidas = $resultado['count'];

  ?>

  <?php if ($mensagensNaoLidas > 0) : ?>
    <div class="notification">
      <a href="mensagens.php">Você tem <?php echo $mensagensNaoLidas; ?> nova(s) mensagem(ns) não lida(s) do suporte</a>
    </div>
  <?php endif; ?>



  <?php if (isset($_GET['admin'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Somente os Administradores do portal tem acesso a essa página!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php } ?>

  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: 30px">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="bd-placeholder-img" style="margin-left: 100px;" width="85%px" height="300px" src="imagens/banner/campus-palmas.jpg">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1></h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" style="margin-left: 95px;" width="85%px" height="300px" src="imagens/banner/topo-pdi.png">
          </svg>
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" style="margin-left: 100px;" width="85%px" height="300px" src="imagens/banner/IFPR Eventos.jpg">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1></h1>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
    </div>


    <main>

      <div class="album py-5 bg-body-tertiary">
        <div class="container">
          <div>
            <div>
              <div>
                <?php
                // Verificar se a consulta retornou resultados
                if (mysqli_num_rows($sql_resultado_evento) > 0) {
                  echo '<table class="table table-dark table-striped">';
                  echo '<tr>';
                  echo '<th>Nome</th>';
                  echo '<th>Descrição</th>';
                  echo '<th>Data</th>';
                  // Adicione mais colunas conforme necessário
                  echo '</tr>';

                  // Loop para percorrer os resultados
                  while ($dados = mysqli_fetch_array($sql_resultado_evento)) {
                    echo '<tr>';
                    echo '<td>' . $dados['nome_evento'] . '</td>';
                    echo '<td>' . $dados['descricao_evento'] . '</td>';
                    echo '<td>' . $dados['dia'] . '</td>';
                    // Adicione mais colunas conforme necessário
                    echo '</tr>';
                  }

                  echo '</table>';

                  // Incluir as bibliotecas do FullCalendar
                  echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />';
                  echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
                  echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>';
                  echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>';
                  echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/pt-br.js"></script>';


                  // Inicializar o calendário e adicionar os eventos
                  echo '<div id="calendario"></div>';
                  echo '<script>';
                  echo '$(document).ready(function() {';
                  echo '  $("#calendario").fullCalendar({';
                  echo '    events: [';

                  mysqli_data_seek($sql_resultado_evento, 0); // Reiniciar o ponteiro dos resultados para o início

                  while ($dados = mysqli_fetch_array($sql_resultado_evento)) {
                    echo '      {';
                    echo '        title: "' . $dados['nome_evento'] . '",';
                    echo '        start: "' . $dados['dia'] . '"';
                    // Adicione mais propriedades do evento conforme necessário
                    echo '      },';
                  }

                  echo '    ]';
                  echo '  });';
                  echo '});';
                  echo '</script>';
                } else {
                  echo 'Nenhum evento encontrado.';
                }
                ?>

              </div>
              <small class="">



    </main>



  </div>
  <?php
  include_once "rodape.php";
  ?>
</body>

</html>
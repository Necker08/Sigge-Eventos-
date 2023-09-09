<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title> Pagina Principal </title>
  <link href="css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/footer-with-button-logo.css">
  <link rel="stylesheet" type="text/css" href="css/product.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<body>
  <div class="container" style="margin-left: 10px;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Siggue Eventos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Institutos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Calendario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Mais</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Eventos</a></li>
                <li><a class="dropdown-item" href="CadastroEvento.php">Cadastrar Eventos</a></li>
                <li><a class="dropdown-item" href="#">Contato</a></li>
                <li><a class="dropdown-item" href="#">Ajuda</a></li>
              </ul>
            </li>
          </ul>
          <form role="search">
            <input class="form-control " type="search" placeholder="Pesquisar" aria-label="Search" style="width: 380px;">
          </form>
          </ul>



          <ul class=" dropdown" style="margin-left: 250px; ">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="login.php">Login</a></li>
              <li><a class="dropdown-item" href="Usario-novo.php">Cadastrar-se</a></li>
              <li><a class="dropdown-item" href="#">Minha conta</a></li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </ul>



        </div>
      </div>
    </nav>

    <style>
      .form-control {
        margin-left: 100px;
        position: static;
        text-align: right;
        margin-top: -20;

      }
    </style>


</body>

</head>

</html>
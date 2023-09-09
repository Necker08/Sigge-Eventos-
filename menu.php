
<link href="css/styles.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="css/footer-with-button-logo.css">
<link rel="stylesheet" type="text/css" href="css/product.css">
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<nav class="navbar navbar-dark bg-faded" style="background-color: black; border-color: black; color: black">
  <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Eleventh navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="imagens/logo/Sigga.png" alt="" style="width: 20%; height: auto;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <style>
        @media (min-width: 768px) {
          .collapse {
            font-size: 1.5rem;
          }
        }
      </style>

      <div class="collapse navbar-collapse justify-content-between" id="navbarsExample09">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="CadastroInstituto.php">Institutos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calendario.php">Calendario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Eventos.php">Eventos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Mais</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="login.php">Cadastrar Eventos</a></li>
              <li><a class="dropdown-item" href="https://api.whatsapp.com/send/?phone=%2B5546988295918&text&type=phone_number&app_absent=0">Contato</a></li>
              <li><a class="dropdown-item" href="Ajuda.php">Ajuda</a></li>
              <li><a class="dropdown-item" href="sobre.php">Sobre</a></li>
              <li><a class="dropdown-item" href="InscritoEvento.php">Inscritos em Eventos</a></li>
              <li><a class="dropdown-item" href="declaracoes-pdf.php">Certificados</a></li>
            </ul>
          </li>
        </ul>

        <form class="d-flex" action="processar_pesquisa.php" method="GET">
  <input class="form-control me-2" type="search" name="pesquisa" placeholder="Pesquisar" aria-label="Search" style="width: 350px; border-radius: 10px; margin-left:15px">
  
</form>


        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" style="margin-left:220px;" aria-expanded="false"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" style="margin-left: 175px;">
              <li><a class="dropdown-item" href="login.php">Login</a></li>
              <li><a class="dropdown-item" href="Usario-novo.php">Cadastrar-se</a></li>
              <li><a class="dropdown-item" href="perfil_usuario.php">Minha conta</a></li>
              <li><a class="dropdown-item" href="sair.php">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</nav>

<!--

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-left: 180px; margin-top: 50px;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%px" height="300px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="300px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="300px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
-->
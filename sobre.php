<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eventos</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/footer-with-button-logo.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: white;
            height: 100vh;
            position: relative;
            padding-bottom: 80px;
        }

        .container {
            padding: 2rem;
        }

        .slider-wrapper {
            position: relative;
            max-width: 48rem;
            margin: 0 auto;
            height: 500px; /* Adjust the height as needed */
            overflow: hidden;
            box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
            border-radius: 0.5rem;
        }

        .slider {
            display: flex;
            width: 300%;
            transition: transform 0.9s ease;
        }

        .slide {
            flex: 0 0 33.333%;
            position: relative;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .slide-content h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .slide-content p {
            font-size: 18px;
        }

        .slider-nav {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        .slider-nav a {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: black;
            opacity: 0.75;
            transition: opacity 250ms;
            margin: 0 0.5rem;
            cursor: pointer;
        }

        .slider-nav a.active {
            opacity: 1;
        }

        .retrato{
            position: absolute;
            top: 3%;
            left: 3%;
            border-radius: 20%;
            max-width: 105px;
            max-height: 100px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.slider');
            const slides = slider.querySelectorAll('.slide');
            const nav = document.querySelector('.slider-nav');
            const navLinks = nav.querySelectorAll('a');
            let currentSlide = 0;

            // Function to handle slide change
            const changeSlide = (slideIndex) => {
                slider.style.transform = `translateX(-${slideIndex * 33.333}%)`;
                navLinks.forEach(link => link.classList.remove('active'));
                navLinks[slideIndex].classList.add('active');
                currentSlide = slideIndex;
            };

            // Add event listeners to navigation links
            navLinks.forEach((link, index) => {
                link.addEventListener('click', () => changeSlide(index));
            });

            // Automatic slide change every 3 seconds
            setInterval(() => {
                currentSlide = (currentSlide + 1) % slides.length;
                changeSlide(currentSlide);
            }, 12000);
        });
    </script>
</head>
<body>
    <?php include_once "menu.php"; ?>
    <section  class="container">
        <div class="slider-wrapper">
            <div class="slider">
                <div class="slide">
                <img src="imagens/sobre/Alexandre.jpeg" alt="" class="retrato">
                <img src="imagens/sobre/matrix.jpg" alt="" />
                
                    <div class="slide-content">
                        <h2>Alexandre Necher Donner</h2>
                        <p style="font-family: Didot; font-size: 20px;">23 anos, discente do 5° período de Sistemas de Informação, IFPR - CAMPUS, PALMAS - PR.
Desenvolvedor do website, quanto front-end quanto back-end utilizando a linguagem PHP/CSS/HTML/JAVA SCRIPT.
Também participante do gerenciamento de equipe, Análise do Sistema e do Banco de Dados.
Linkedin:<a href="https://www.linkedin.com/in/alexandre-necher-3338bb22a">
  <i class="fa fa-linkedin-square" aria-hidden="true"></i>
</a>
GitHub: <a href="https://github.com/Necker08" class="fa fa-github" aria-hidden="true"></a></p>
                    </div>
                </div>

                <div class="slide">
                <img src="imagens/sobre/Ancini.jpeg" alt="" class="retrato">
                <img src="imagens/sobre/matrix.jpg" alt="" />

                    <div class="slide-content">
                        <h2>Gabriel Eduardo Ancini</h2>
                        <p>22 anos, discente do 5° período de Sistemas de Informação, IFPR - CAMPUS, PALMAS - PR.
Responsável pela documentação, análise, gerenciamento de equipe do website.
Desenvolvedor do Banco de dados. 
Também participante do desenvolvimento do website quanto front-end quanto back-end utilizando a linguagem PHP/CSS/HTML/JAVA SCRIPT.
Linkedin: <a href=" https://br.linkedin.com/in/gabriel-ancini-644b901a6">
  <i class="fa fa-linkedin-square" aria-hidden="true"></i>
</a></p>
                    </div>
                </div>
                <div class="slide">
                    <img src="imagens/sobre/Lucas.jpeg" alt="" class="retrato" />
                    <img src="imagens/sobre/matrix.jpg" alt="" />
                    <div class="slide-content">
                        <h2>Lucas Cardoso</h2>
                        <p>28 anos, discente do 7° período de Sistemas de Informação, IFPR - CAMPUS, PALMAS - PR.
Desenvolvedor do website, quanto front-end quanto Back-end utilizando a linguagem PHP/CSS/HTML/JAVA SCRIPT.
Também participante na Análise do Sistema e do Banco de Dados. GitHub: <a href="https://github.com/lucas87P" class="fa fa-github" aria-hidden="true"></a></p>
                    </div>
                </div>
                <div class="slide">
                <img src="imagens/sobre/Matheus.jpeg" alt="" class="retrato" />
                    <img src="imagens/sobre/matrix.jpg" alt="" />
                                        <div class="slide-content">
                        <h2>Matheus Guedes</h2>
                        <p>22 anos, discente do 5° período de Sistemas de Informação, IFPR - CAMPUS, PALMAS - PR.
Responsável pela documentação do Banco de Dados.
Desenvolvedor do Banco de dados e diagramas. 
Também participante do desenvolvimento do website quanto front-end quanto back-end utilizando a linguagem PHP/CSS/HTML/JAVA SCRIPT. <br> GitHub: <a href="https://github.com/Kt1304" class="fa fa-github" aria-hidden="true"></a></p>
                    </div>
                </div>
                <div class="slide">
                <img src="imagens/sobre/Maria.jpeg" alt="" class="retrato" />
                    <img src="imagens/sobre/matrix.jpg"  alt="" width="1" height="1" />
                    <div class="slide-content">
                        <h2>Maria Helena </h2>
                        <p>23 anos, discente do 5° período de Sistemas de Informação, IFPR - CAMPUS, PALMAS - PR.
Desenvolvedora do website, quanto front-end quanto Back-end utilizando a linguagem PHP/CSS/HTML/JAVA SCRIPT/SQL.
Também participante na Análise do Sistema e do Banco de Dados. Linkedin:<a href=" https://www.linkedin.com/in/maria-helena-rocha-551634146/">
  <i class="fa fa-linkedin-square" aria-hidden="true"></i>
</a>
GitHub: <a href="https://github.com/mHelenaR" class="fa fa-github" aria-hidden="true"></a></p>
                    </div>
                </div>

                <div class="slide">
                <img src="imagens/sobre/ProfLeticia.jpg" alt="" class="retrato" />
                    <img src="imagens/sobre/matrix.jpg" alt="" />
                                        <div class="slide-content">
                        <h2>Leticia Mariano de Almeida</h2>
                        <p>Docente do Curso de Sistemas de Informação, responsável pela disciplina de Oficina de Desenvolvimento Web 06/2023.
Coordenadora e Orientadora do projeto.
Responsável pelas entregas parciais do projeto, avaliando a eficiência e dinâmica do website. Participante de todas as etapas do projeto. Linkedin: <a href=" https://br.linkedin.com/in/le97">
  <i class="fa fa-linkedin-square" aria-hidden="true"></i>
</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-nav">
            <a href="#" class="active"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </div>
       
    </section>

   


    <?php include_once "rodape.php"; ?>
</body>
</html>

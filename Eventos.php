

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
    <style>
        body {
            margin-top: 150px;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(600deg, white, black);
            height: 650px;
            
        }

        h2 {
            color: #333;
            margin-left: 50px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            
        }

        

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;

            
        }

        p.error-message {
            color: red;
        }
        .rodape{
            margin-top: 480px;
        }
        .form {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 30px;
        }
        .titulo{
            transform: translate(+38%, +50%);
            color: white; 
            margin-right: 25px;
        }
        .button{
        background-color: dodgerblue;
        border: none;
        padding: 8px;
        width: 50%;
        border-radius: 5px;
        color: white;
        font-size: 15px;   
        margin-left: 25%;        
    }
    label{
        color: white;
        
    }
    @media screen and (max-width: 768px) {
            body {
                margin-top: 50px;
                margin-left: 20px;
            }
        }
    
    </style>
</head>
<body>

<?php
include_once "menu.php";
?>


    <?php
    // Verificar se houve um erro ao realizar a inscrição
    if (isset($_GET["erro"])) {
        echo "<p class='error-message'>Erro ao realizar a inscrição. Por favor, tente novamente.</p>";
    }
    ?>

    <h2 class="titulo">Inscrição em Evento</h2>

    <form class="form" method="POST" action="inscrever.php">
        <label for="evento">Evento:</label>
        <select name="evento" id="evento">
            <?php
            // Conexão com o banco de dados
            include_once "db_conexao.php";

            // Consulta para buscar os eventos
            $sql_evento = "SELECT  nome_evento FROM evento";
            $resultado_evento = mysqli_query($conexao, $sql_evento);

            // Verificar se a consulta retornou resultados
            if (mysqli_num_rows($resultado_evento) > 0) {
                while ($evento = mysqli_fetch_assoc($resultado_evento)) {
                    echo '<option value="' . $evento['nome_evento'] . '">' . $evento['nome_evento'] . '</option>';
                }
            } else {
                echo '<option value="">Nenhum evento encontrado</option>';
            }
            ?>
        </select>
        <br><br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <input class="button" type="submit" value="Inscrever">
    </form>
    <div class="rodape">
<?php
include_once "rodape.php";
?>
  
</body>

</html>

</div>

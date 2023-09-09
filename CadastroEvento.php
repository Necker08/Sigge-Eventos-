
<?php
$nomeEvento = "";
$descricaoEvento = "";
$dia = "";
$id_evento = "";

include_once "db_conexao.php";

$sql_instituicao = "SELECT id_instituicao,nome_instituicao FROM instituicao";
$sql_resultado_instituicao = mysqli_query($conexao, $sql_instituicao);
$sql_palestrante = "SELECT id_usuario, nome FROM usuario WHERE tipo_usuario = 'PALESTRANTE'";
$sql_palestrante = mysqli_query($conexao, $sql_palestrante);

$cod_instituicao = 0;
$cod_palestrante = 0;

?>
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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <?php
    include_once "menu.php";
    
    
    ?>

    <style>
        .formulario {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            left: 70%;
            margin-left: 50px;
        }

        .form {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 15px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(600deg, white, black);
            height: 908px;
        }

        input {
            padding: 20px;
            border: none;
            outline: none;
            font-size: 15px;
            color: white;
            background: transparent;


        }

        label {
            color: white;

        }

        button {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            margin-left: 25%;
        }

        @media (max-width: 768px) {
            .form {
                padding: 20%;
            }
        }

        @media (max-width: 567px) {
            .form {
                padding: 25%;
            }
        }

        .rodape{
        position: relative;
        top: 100vh;
    }
    </style>

    <script>
        function exibirMensagem() {
            alert("Evento cadastrado com sucesso!"); // Mensagem de sucesso ao cadastrar
        }
    </script>


</head>

<body>

<h2 style="text-align: center; position: relative; top: 50px; color: white;">Cadastrar Eventos</h2>
    <div class="container-fluid">
    <div class="">
        <form class="formulario" action="db_cad_evento.php" method="post">
            <input type="hidden" name="id_evento" value="<?= $id_evento ?>">

            <div class="form">


                <input type="text" name="nome_evento" id="nome_evento" placeholder="Nome" value="<?php echo $nomeEvento ?>" style="width: 300px;">
                <label for="nome">Nome do Evento</label>

                <input type="text" name="descricao_evento" id="descricao_evento" placeholder="descricao" value="<?php echo $descricaoEvento ?>" style="width: 300px;">
                <label for="nome">Descrição do Evento</label>


                <input type="date" name="dia" id="dia" placeholder="data" value="<?php echo $dia ?>" style="width: 300px;">
                <label for="floatingInput">Data do Evento </label>
                <br>


                <div class="form-group">
                    <label class="small mb-1" for="formato">Selecione o Palestrante </label>
                    <select id="id_usuario" name="id_usuario" required class="form-control select-usuario">
                        <option selected disabled>Selecione...</option>
                        <?php
                        while ($dados = mysqli_fetch_array($sql_palestrante)) {

                            if ($cod_palestrante == $dados['id_usuario']) {

                                $seleciona = 'selected="selected"';
                            } else {
                                $seleciona = '';
                            }
                            echo '<option value="' . $dados['id_usuario'] . '" ' . $seleciona . '>' . $dados['nome'] . '</option>';
                        }
                        ?>
                    </select>
                    <div class="form-group">
                        <label class="small mb-1" for="formato">Selecione o Instituto </label>
                        <select id="id_instituicao" name="id_instituicao" required class="form-control select-instituicao">
                            <option selected disabled>Selecione...</option>
                            <?php
                            while ($dados = mysqli_fetch_array($sql_resultado_instituicao)) {

                                if ($cod_instituicao == $dados['id_instituicao']) {

                                    $seleciona = 'selected="selected"';
                                } else {
                                    $seleciona = '';
                                }
                                echo '<option value="' . $dados['id_instituicao'] . '" ' . $seleciona . '>' . $dados['nome_instituicao'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>


                    <button type="submit" name="btn_cadastrar" id="btn_cadastrar" onclick="exibirMensagem()">Cadastrar</button>

                </div>
                
                
        </form>
        </div>

        
        <div class="rodape">
<?php
include_once "rodape.php";
?> 
</body>

</html>

<?php
$nome = "";
$data_nasc = "";
$id_usuartio = "";
$id_endereco = "";
$cpf = "";
$rg = "";
$email = "";
$cachorro ="";
$rua = "";
$bairro = "";
$tipo_usuario = "";
?>



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

    <title>Tela de cadastro</title>
    <?php
    include_once "menu.php";

    ?>

    <style>
        .formulario {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            left: 50%;
            
        }

        .form {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 15px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(600deg, white, black);
            height: 1200px;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            color: white;
            background: transparent;


        }

        label {
            color: white;

        }

        .rodape{
        position: relative;
        top: 90%;
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

        @media (max-width: 1080px) {
            .form {
                padding: 20%;
            }
        }

        @media (max-width: 1080px) {
            .form {
                padding: 25%;
            }
        }
    </style>

<script>
        function exibirMensagem() {
            alert("Usuário cadastrado com sucesso!"); // Mensagem de sucesso ao cadastrar
        }
    </script>

<script>
        function validarFormulario() {
            var nome = document.getElementById("nome").value;
            var dataNasc = document.getElementById("data_nasc").value;
            var cpf = document.getElementById("cpf").value;
            // ... Adicione as outras variáveis para os campos restantes

            if (nome === "" || dataNasc === "" || cpf === "") {
                alert("Por favor, preencha todos os campos obrigatórios."); // Mensagem de erro
                return false; // Impede o envio do formulário
            }
        }
    </script>


<body>
    

    <div class="">
        <form action="db_cad_endereco.php" method="post" onsubmit="return validarFormulario()">
            <input type="hidden" name="id_usuario" value="">
            <input type="hidden" name="id_endereco" value="">

            <div class="form">
                <input type="text" name="nome" id="nome" placeholder="Nome" style="width: 300px;">
                <label for="nome">Nome</label>


                <input type="date" name="data_nasc" id="data_nasc" style="width: 300px;">
                <label for="floatingInput">Data de nascimento</label>

                <input type="text" name="cpf" id="cpf"  style="width: 300px;">
                <label for="floatingInput">CPF</label>

                <input type="text" name="rg" id="rg" style="width: 300px;">
                <label for="floatingInput">RG</label>


                <input type="text" name="email" id="email" style="width: 300px;">
                <label for="floatingInput">E-mail</label>

                <input type="text" name="rua" id="rua"  style="width: 300px;">
                <label for="floatingInput">Rua</label>

                <input type="text" name="bairro" id="bairro"  style="width: 300px;">
                <label for="floatingInput">Bairro</label>

                <input type="text" name="cep" id="cep" style="width: 300px;">
                <label for="floatingInput">CEP</label>

                <input type="text" name="complemento" id="complemento"  style="width: 300px;">
                <label for="floatingInput">Complemento</label>

                <input type="text" name="cidade" id="cidade"  style="width: 300px;">
                <label for="floatingInput">Cidade</label>

                <input type="text" name="estado" id="estado"  style="width: 300px;">
                <label for="floatingInput">Estado</label>

                <label for="floatingInput">Qual nome você queria dar para seu primeiro animal de estimação?</label>
                <input type="text" name="cachorro" id="cachorro"  style="width: 300px;">
                

                <input type="text" name="senha" id="senha"  style="width: 300px;">
                <label for="floatingPassword">Senha</label>


                <input type="text" name="confirmar" id="confirmar" placeholder="Confirmar Senha" style="width: 300px;">
                <label for="floatingPassword">Confirme a senha</label>
                <br>

                

                <select name="tipo_usuario">
                    <option value="admin">ADMINISTRADOR</option>
                    <option value="aluno" selected>ALUNO</option>
                    <option value="professor">PROFESSOR</option>
                    <option value="palestrante">PALESTRANTE</option>
                </select>

                <br>
                <br><br>
               
                <button type="submit" name="btn_cadastrar" id="btn_cadastrar" onclick="exibirMensagem()">Cadastrar-se</button>

            </div>
        </form>
    </div>

    <div class="rodape">
<?php
include_once "rodape.php";
?> 
    </div>
</body>
</head>

</html>
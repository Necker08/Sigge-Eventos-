

<?php
 $nome = "";
 $email = "";
 $cnpj = "";
 $diretor = "";
 $insc_estad = "";
 $tel = "";
 $rua = "";
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
    .formulario{
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        left: 40%;
    }
    
    .form{
        background-color: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 70%;
        left: 40%;
        transform: translate(-55%,-50%);
        padding: 50px;
        border-radius: 15px;
        margin-left: 180px;
    }
   
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(600deg, white, black);
        height: 960px;
    }
    
    input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
        color: white;
        background: transparent;
        
        
    }
    .rodape{
        position: relative;
        top: 89%;
    }
    
    label{
        color: white;
        
    }
    
    button{
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
</style>

<script>
        function exibirMensagem() {
            alert("Instituto cadastrado com sucesso!"); // Mensagem de sucesso ao cadastrar
        }
    </script>


</head>
<body>
<div class="">
    <form class="formulario" action="db_cad_instituto.php" method="post">
    <input type="hidden" name="id_instituicao" value="">
    <div class="form">
    
    
    <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome?>" style="width: 300px;">
    <label for="nome">Nome do Instituto</label>
    
    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $email?>" style="width: 300px;">
    <label for="email">Email</label>
   
    
    <input type="text"  id="cnpj" placeholder="CNPJ" value="<?php echo $cnpj?>" style="width: 300px;">
    <label for="cnpj">CNPJ </label>

    <input type="text" name="insc_estad" id="insc_estad" placeholder="Inscrição Estadual" value="<?php echo $insc_estad?>" style="width: 300px;">
    <label for="insc_estad">Inscrição Estadual</label>

    <input type="text"  id="tel" placeholder="Telefone" value="<?php echo $tel?>" style="width: 300px;">
    <label for="tel">Telefone</label>

    <input type="text"  id="rua" placeholder="Rua" value="<?php echo $rua?>" style="width: 300px;">
    <label for="rua">Rua</label>


    <input type="text" name="diretor" id="diretor" placeholder="Diretor" value="<?php echo $diretor?>" style="width: 300px;">
    <label for="nome">Diretor</label>

        <br><br>
        <button type="submit" name="btn_cadastrar" id="btn_cadastrar"  onclick="exibirMensagem()">Cadastrar</button> 

    </div>
    </form>
    </div>
    

    <div class="rodape">
<?php
include_once "rodape.php";
?>

</body>
</head>

</html>
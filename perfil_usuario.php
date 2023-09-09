<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php?logar");
    exit(); // Certifique-se de que o script seja encerrado após o redirecionamento
}

// Resto do seu código aqui
?>


<!DOCTYPE html>
<html lang="pt-br">
    

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <mete name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> <?php echo $_SESSION['nome']; ?></title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer-with-button-logo.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <style>
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

        .nome_usuario {
            margin-top: 20px;
            color: white;
            position: absolute;
            width: 200px;
        }

        .user {

            text-align: center;
            position: relative;
        }

        .profile {
            margin-top: 50px;
            height: 200px;
            width: 200px;
            border: 3px solid #03A62C;
            border-radius: 50%;


        }

        .profile img {
            height: 190px;
            width: 190px;
            margin-top: 2px;

        }

        label {
            font-family: 'Roboto Slab', serif;
            color: #fff;
        }

        body {
            background-color: #7C7C7C;
            /* Cor de fundo da página */


            background-repeat: no-repeat;
            min-height: 100vh;
            height: auto;


        }

        .card-divider {
            height: 1px;
            background-color: #ddd;
            margin: 10px 0;
        }


        .form-control.input-custom {

            background-color: transparent;
            border: 1px solid rgba(128, 128, 128, 0.6);
            color: #fff;
        }

        .form-control.input-custom:focus {
            border-color: white;
            outline-color: white;
        }

        .form-control.input-custom::placeholder {
            color: gray;
        }

        .card-title.title-style {
            color: white;

        }

        .btn.botao-style {
            color: white;
            background-color: rgba(43, 44, 50, 0.6);
            
        }

        .container-rounded {
            border-radius: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #000000BE;
            margin-top: 50px;
            height: 350px;
            width: 350px;
        }
    </style>



</head>

<body class="sb-nav-fixed" style="background-color: #6868681C;">

    <?php
    include_once("menu.php");

    include 'db_select_usuario.php';
    $usuario = $linha;

    ?>

    <main>
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                    <div class="container-rounded d-flex justify-content-center">
                        <div class="user text-center">

                            <div class="profile">
                                <label for="validatedCustomFile">
                                    <?php
                                    echo '<img id="profile-image" src="data:image/jpeg;base64,' . base64_encode($usuario['IMAGEM']) . '" class="rounded-circle" title="Clique para editar a foto"/>';
                                    ?>
                                </label>
                                <h3 class="nome_usuario"><?php  ?></h3>
                                <input type="hidden" name="imagem" value="<?php echo base64_encode($usuario['IMAGEM']); ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-8">
                    <ol class="breadcrumb mb-2 mt-5" style="border: 1px solid #ccc;; background-color: #000000BE;">
                        <li class="breadcrumb-item"><a href="index.php" style="color: #ddd;">Home</a></li>
                        <li class="breadcrumb-item active" style="color: white">Usuário</li>
                    </ol>
                    <div class="card mb-4" style="background-color: rgba(63, 64, 77, 0.6);">
                        <div class="card-header" style="background-color: #000000BE; color: white">
                            <i class="fa fa-user mr-1"></i>
                            Dados Pessoais
                        </div>
                        <div class="card-body" style="background-color: #00000091;">
                            <form action="db_update_usuario.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" style="display: none" name="imagem">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="nome">Nome Completo</label>
                                                <input class="form-control input-custom " name="nome" required id="nome" type="text" value="<?php echo $nome; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="small mb-1" for="cpf">CPF</label>
                                                <input class="form-control input-custom " name="cpf" required id="cpf" type="text" value="<?php echo $cpf; ?>"  maxlength="14" minlength="14" onkeydown="javascript: fMasc( this, mCPF );" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="small mb-1" for="rg">RG</label>
                                                <input class="form-control input-custom " name="rg" required id="rg" type="text" value="<?php echo $rg; ?>"  maxlength="14" minlength="14" onkeydown="javascript: fMasc( this, mCPF );" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="small mb-1" for="data_nasc">Data de Nascimento</label>
                                                <input class="form-control input-custom " name="data_nasc" required id="data_nasc" type="date" value="<?php echo $data_nasc; ?>" minlength="6" />
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="small mb-1" for="tipo_usuario">Tipo de Usuário</label>
                                                <select class="form-control input-custom " id="inputState" id="tipo_usuario" name="tipo_usuario">
                                                    <option selected>Tipo de Usuário...</option>
                                                    <option value="admin" <?php echo ($usuario['tipo_usuario'] == 'admin') ? 'selected' : ''; ?>>ADMINISTRADOR</option>
                                                    <option value="aluno" <?php echo ($usuario['tipo_usuario'] == 'aluno') ? 'selected' : ''; ?>>ALUNO</option>
                                                    <option value="professor" <?php echo ($usuario['tipo_usuario'] == 'professor') ? 'selected' : ''; ?>>PROFESSOR</option>
                                                    <option value="palestrante" <?php echo ($usuario['tipo_usuario'] == 'palestrante') ? 'selected' : ''; ?>>PALESTRANTE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="email">E-mail</label>
                                                <input class="form-control input-custom " name="email" required id="email" type="email" value="<?php echo $email; ?>" aria-describedby="emailHelp"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="senha">Senha</label>
                                                <input class="form-control input-custom " name="senha" required id="senha" type="password" value="<?php echo $senha; ?>"  minlength="6" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                <h5 class="card-title title-style mt-4 mb-4">Endereço</h5>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="bairro">Bairro</label>
                                                <input class="form-control input-custom cpf-mask" name="bairro" required id="bairro" type="text" value="<?php echo $bairro; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="rua">Rua</label>
                                                <input class="form-control input-custom " name="rua" required id="rua" type="text" value="<?php echo $rua; ?>"  />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="complemento">Complemento</label>
                                                <input class="form-control input-custom " name="complemento" required id="complemento" type="text" value="<?php echo $complemento; ?>"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="cidade">Cidade</label>
                                                <input class="form-control input-custom cpf-mask" name="cidade" required id="cidade" type="text" value="<?php echo $cidade; ?>"  />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="estado">Estado</label>
                                                <select id="estado" id="inputState" class="form-control input-custom" name="estado">
                                                    <option value="<?php echo $usuario['estado']; ?>">Selecione um Estado...</option>
                                                    <option value="AC" <?php echo ($usuario['estado'] == 'AC') ? 'selected' : ''; ?>>Acre</option>
                                                    <option value="AL" <?php echo ($usuario['estado'] == 'AL') ? 'selected' : ''; ?>>Alagoas</option>
                                                    <option value="AP" <?php echo ($usuario['estado'] == 'AP') ? 'selected' : ''; ?>>Amapá</option>
                                                    <option value="AM" <?php echo ($usuario['estado'] == 'AM') ? 'selected' : ''; ?>>Amazonas</option>
                                                    <option value="BA" <?php echo ($usuario['estado'] == 'BA') ? 'selected' : ''; ?>>Bahia</option>
                                                    <option value="CE" <?php echo ($usuario['estado'] == 'CE') ? 'selected' : ''; ?>>Ceará</option>
                                                    <option value="DF" <?php echo ($usuario['estado'] == 'DF') ? 'selected' : ''; ?>>Distrito Federal</option>
                                                    <option value="ES" <?php echo ($usuario['estado'] == 'ES') ? 'selected' : ''; ?>>Espírito Santo</option>
                                                    <option value="GO" <?php echo ($usuario['estado'] == 'GO') ? 'selected' : ''; ?>>Goiás</option>
                                                    <option value="MA" <?php echo ($usuario['estado'] == 'MA') ? 'selected' : ''; ?>>Maranhão</option>
                                                    <option value="MT" <?php echo ($usuario['estado'] == 'MT') ? 'selected' : ''; ?>>Mato Grosso</option>
                                                    <option value="MS" <?php echo ($usuario['estado'] == 'MS') ? 'selected' : ''; ?>>Mato Grosso do Sul</option>
                                                    <option value="MG" <?php echo ($usuario['estado'] == 'MG') ? 'selected' : ''; ?>>Minas Gerais</option>
                                                    <option value="PA" <?php echo ($usuario['estado'] == 'PA') ? 'selected' : ''; ?>>Pará</option>
                                                    <option value="PB" <?php echo ($usuario['estado'] == 'PB') ? 'selected' : ''; ?>>Paraíba</option>
                                                    <option value="PR" <?php echo ($usuario['estado'] == 'PR') ? 'selected' : ''; ?>>Paraná</option>
                                                    <option value="PE" <?php echo ($usuario['estado'] == 'PE') ? 'selected' : ''; ?>>Pernambuco</option>
                                                    <option value="PI" <?php echo ($usuario['estado'] == 'PI') ? 'selected' : ''; ?>>Piauí</option>
                                                    <option value="RJ" <?php echo ($usuario['estado'] == 'RJ') ? 'selected' : ''; ?>>Rio de Janeiro</option>
                                                    <option value="RN" <?php echo ($usuario['estado'] == 'RN') ? 'selected' : ''; ?>>Rio Grande do Norte</option>
                                                    <option value="RS" <?php echo ($usuario['estado'] == 'RS') ? 'selected' : ''; ?>>Rio Grande do Sul</option>
                                                    <option value="RO" <?php echo ($usuario['estado'] == 'RO') ? 'selected' : ''; ?>>Rondônia</option>
                                                    <option value="RR" <?php echo ($usuario['estado'] == 'RR') ? 'selected' : ''; ?>>Roraima</option>
                                                    <option value="SC" <?php echo ($usuario['estado'] == 'SC') ? 'selected' : ''; ?>>Santa Catarina</option>
                                                    <option value="SP" <?php echo ($usuario['estado'] == 'SP') ? 'selected' : ''; ?>>São Paulo</option>
                                                    <option value="SE" <?php echo ($usuario['estado'] == 'SE') ? 'selected' : ''; ?>>Sergipe</option>
                                                    <option value="TO" <?php echo ($usuario['estado'] == 'TO') ? 'selected' : ''; ?>>Tocantins</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="cep">CEP</label>
                                                <input class="form-control input-custom " name="cep" required id="cep" type="text" value="<?php echo $cep; ?>"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mt-5 mb-0">
                                        <button type="submit" name="bnt_alterar" id="bnt_alterar" class="btn botao-style btn-outline-secondary btn-block">Salvar Alterações</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        // Captura o evento de mudança do input de arquivo e muda a imagem
        document.getElementById('validatedCustomFile').addEventListener('change', function() {
            setTimeout(function() {
                var input = document.getElementById('validatedCustomFile');
                var file = input.files[0];
                var reader = new FileReader();

                reader.onloadend = function() {
                    var base64String = reader.result.replace('data:', '').replace(/^.+,/, '');
                    document.getElementById('profile-image').src = 'data:image/jpeg;base64,' + base64String;
                }

                if (file) {
                    reader.readAsDataURL(file);
                }
            }, 100);
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="checkout.js"></script>


</body>

</html>
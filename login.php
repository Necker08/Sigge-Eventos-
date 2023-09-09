
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>


    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(600deg, white, black);
        }

        div {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;

        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;

        }

        button {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            margin-top: 10px;


        }

        button:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: white;
        }

        h1 {
            text-align: center;
            color: white;
        }

        input[type="text"],
        input[type="password"] {
            width: 375px;
            height: 100%;
            border-radius: 15px;
        }
    </style>
</head>

<body>
echo "<script>alert('Você precisa ser do tipo administrador para acessar esta página.');</script>";
    <div>
        <h1>Login</h1>
        <form action="db_login.php" method="post">
            <input type="text" name="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <button type="submit" name="btn_login">Entrar</button>
            <br><br>

          
        </form>
        <button> <a href="index.php" text-decoretion> Retornar ao menu principal</button> </a>

        <button> <a href="Esqueci-senha.php" text-decoretion> Esqueci minha Senha</button> </a>
    </div>
</body>

</html>
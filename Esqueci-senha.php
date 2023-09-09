




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
            color: #fff;
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
            height: 100%;
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
        }

        input[type="text"] {
            width: 90%;
            height: 100%;
            border-radius: 15px;
            text-align: center;
        }
    </style>
</head>

<body>


    <div>
        <h1>Digite a resposta pessoal que foi solicitada sobre seu cachorro</h1>
        <input type="text" placeholder="">
        <button onclick="funcao_Enviar()">Enviar</button>
        
        <br><br>

        <button> <a href="index.php" text-decoretion> Retornar ao menu principal</button> </a>


        <script>
              function funcao_Enviar(){
                alert("Foi encaminhado um link para seu e-mail para poder recuperar a senha! verifique sua caixa de entrada ou tente novamente");
            }
        </script>

    </div>
</body>

</html>
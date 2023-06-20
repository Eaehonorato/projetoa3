<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body {
            background-image: url('https://imagens.ebc.com.br/FcR-0vnXBSmgqnmonK_LAOTgaeo=/754x0/smart/https://agenciabrasil.ebc.com.br/sites/default/files/thumbnails/image/messi_beija_taca_do_tri_mundial_catar_2022.jpg?itok=HFZNctSa');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        #login {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
        }

        #login input[type="text"],
        #login input[type="password"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        #login input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #login input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <div id="login">
            <h1>LOGIN</h1>
            <form action="logado.php" method="POST">
                Login: <input type="text" name="login" required><br>
                Senha: <input type="password" name="senha" required><br><br>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </center>
</body>
</html>
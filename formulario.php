<?php

    if (isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['telefone']);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Cmpatible" content="IE=edge">
    <meta name="vierport" content="widht=device-widht, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,56,71));
        }
        .box{
            color: white;
            position:absolute;
            top: 45%;
            left: 45%;
            transform: translate(-45%,-45%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 20px;
            width: 25%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align:center;
            background-color: dodgerblue;
            border-radius: 6px;
        }
        .inputBox{
            position:relative;
        }
        .inputUser{
            background: none;
            border:none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing:2px;
        }
        #data_nascimento{
            border:none;
            padding: 4px;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php"> method="POST">
        <fieldset>
            <legend><b>Formul??rio de Clientes</b></legend>
            <br>
            <div class="InputBox">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="InputUser" required>
            </div>
            <br>
            <div class="InputBox">
                <label for="nome" class>Email:</label>
                <input type="email" name="email" id="email" class="InputUser" required>
            </div>
            <br>
            <div class="InputBox">
                <label for="nome">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" class="InputUser" required>
            </div>
            <p>Sexo:</p>
            <input type="radio" id="feminino" name="genero" value="femenino" required>
            <label for ="femenino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="femenino" required>
            <label for ="femenino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="femenino" required>
            <label for ="femenino">Outro</label>
            <br></br>
            <label for="data_nascimento"> <b>Data de nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br></br>
            <div class="InputBox">
                <input type="password" name="password" id="senha" class="InputUser" required>
                <label for="senha">Senha</label>
            </div>
            <br>
            <div class="InputBox">
                <input type="text" name="estado" id="estado" class="InputUser" required>
                <label for="estado">Estado</label>
            </div>
            <br>
            <div class="InputBox">
                <input type="text" name="endereco" id="endereco" class="InputUser" required>
                <label for="endereco">Endere??o</label>
            </div>
            <br>
            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>
    </div>
</body>
</html>
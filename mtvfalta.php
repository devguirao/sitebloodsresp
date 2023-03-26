<?php
include_once ('verificarAcesso.php');
if (isset($_POST['submit'])){
    
    include_once('conexaoFT.php');

    $nome = $_POST['nome'];
    $ausencia = $_POST['ausencia'];
    $datasaida = $_POST['datasaida'];
    $datavolta = $_POST['datavolta'];

    $conexao->query(
        "INSERT INTO falta(nome,ausencia,datasaida,datavolta) VALUE ('$nome','$ausencia','$datasaida','$datavolta');");

}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motivo | Ausência</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, black, red);

        }

        .box {
            box-shadow:10px 5px 5px black;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-bottom: 15px;
            width: 20%;
            border-radius: 15px;
            font-family: 'Times New Roman', Times, serif;
        }

        fieldset {
            border: 3px solid red;
        }

        legend {
            border: 1px solid red;
            padding: 10px;
            text-align: center;
            background-color: red;
            border-radius: 8px;
            color: white;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 17px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelinput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;
        }

        .inputUser:focus~.labelinput,
        .inputUser:valid~.labelinput {
            top: -13px;
            font-size: 12px;
            color: rgba(166, 24, 24, 0.745);
        }

        #submit {
            background-color: darkred;
            color: white;
            width: 100%;
            border: none;
            padding: 15px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 20px;
        }

        #submit:hover {
            background-color: deepskyblue;
        }

        .vtr {
            font-family: arial;
            text-decoration: none;
            color: white;
            border: 3px solid red;
            border-radius: 60px;
            padding: 4px;
            background-color: red;
            margin: 10px;
            position: absolute;
            font-size: 13px;

        }
       
    </style>
</head>

<body>
    <a href="selecione.php" class="vtr">VOLTAR</a>
    <div class="box">
        <form action="#" method="POST">
            <fieldset>
                <legend><b>Ausência</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="ausencia" id="ausencia" class="inputUser" required>
                    <label for="ausencia" class="labelinput">Motivo Ausência</label>
                </div>

                <br>

                <input type="Date" name="datasaida" id="datasaida" required>
                <label for="datasaida"><B>Data saida</B></label>

                <br><br>

                <input type="Date" name="datavolta" id="datavolta" required>
                <label for="datavolta"><B>Data volta</B></label>
                <br><br>

                <input type="submit" name="submit" id="submit" value="Enviar">
                <br>
    </div>
    
</body>

</html>
<?php
 require_once ('verificarAcesso.php');
 if(isset($_POST['submit'])){


    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'usbw';
    $dbName = 'adc';

    $conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    $adicione = $_POST['adicione'];
    $tirou = $_POST['tirou'];
    $pano = $_POST['pano'];
    $linha = $_POST['linha'];
    $kelvar = $_POST['kelvar'];
    $data = $_POST['data'];

    $conexao->query(
        "INSERT INTO bau(adicione,tirou,pano,linha,kelvar,data) VALUE ('$adicione','$tirou',$pano,$linha,$kelvar,'$data')"
    );

 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Área de adicional</title>
    <style>
    body{   
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, black, red);

    }

    .box{
            color:white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-bottom:15px;
            width: 20%;
            border-radius: 15px;
            font-family: 'Times New Roman', Times, serif;
        }

        fieldset{
         border: 3px solid red;

        }
    
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 10px;
        }

        legend{
            border: 2px solid red;
            padding: 10px;
            text-align: center;
            background-color: red;
            border-radius:8px;
            color:white;
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 50%;
            letter-spacing: 2px;
        }

        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;
        }

        .inputUser:focus ~ .labelinput, .inputUser:valid ~ .labelinput{
            top: -13px;
            font-size: 12px;
            color: rgba(166, 24, 24, 0.745);
        }

        #submit{
            background-color: darkred;
            color: white;
            width: 100%;
            border: none;
            padding: 20px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 20px;
            
            
        }

        #submit:hover{
            background-color: deepskyblue;
        }
        img{
            position: absolute;
            top: -67%;
            left: 5%;
            width: 85%;
        } 
        #data{
            border:none;
            padding:8px;
            border-radius:10px;
            outline:none;
            font-size:15px;
        }
        .vtr{            
            text-decoration: none;
            color: white;
            border: 3px solid red;
            border-radius: 60px;
            padding:4px;
            background-color:red;
            margin:10px;
            position:absolute;
            font-size:13px;
            
        }
        .rgs{
            color:red;
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
        }
        p{
            font-size: 20px;
        }
        .wpp{
            position: fixed;
            top: 825px;
            left: 1000px;
            width: 90px;
            right: 40px;
            bottom: 40px;
        }
</style>

</head>
<body>
 <a href="selecione.php" class="vtr">VOLTAR</a>    
    <div class="box">   
        <form action="#" method="POST">
            <fieldset>
            <legend><b>PAINEL</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="adicione" id="adicione" class="inputUser" required>
                <label for="adicione" class="labelinput">Adicionou</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="tirou" id="tirou" class="inputUser" required>
                <label for="tirou" class="labelinput">Tirou</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="number" name="pano" id="pano" class="inputUser" required>
                <label for="pano" class="labelinput">Pano</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="number" name="linha" id="linha" class="inputUser" required>
                <label for="linha" class="labelinput">Linha</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="number" name="kelvar" id="kevlar" class="inputUser" required>
                <label for="kevlar" class="labelinput">Kelvar</label>
            </div>  
            <br>
            <input type="Date" name="data" id="data" required>
            <label for="data"><B>Data</B></label>
            <br><br>
            <input type="submit" name="submit" id="submit" value="Enviar">
            <br>
            <img src="fundoremovido.png" alt="" class="container">
            <br>
            <div class="regras">
                <fieldset>
                <h2 class="rgs">
                        REGRAS
                </h2>

                <p>
                    Nº1 - Se não for colocar nada no "adicionou" ou 'Tirou'
                    coloque "nd", para sabermos que não adicionou nada !                                         
                </p> 
                <br>
                <p>
                    Nº2 - "Pano", "Linha", "Kelva" só aceitam números e não letras, 
                    estão adicionados no banco como int entao não tente colocar letras nem caracteres !
                </p>



                </fieldset>
            </div>
          
            
                <a href="https://chat.whatsapp.com/L693KBuZZm98C2FUrFf6sa" class="wpp">
                    <img src="whatsapp-logo-png-2261.png" alt="">
                </a>
           
</body>
</html>
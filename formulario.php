<?php

 if(isset($_POST['submit'])){

   include_once('conexaoBD.php');

    $nome = $_POST['nome'];
    $nickname = $_POST['nickname'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $telljogo = $_POST['telefonejg'];
    $id = $_POST['id'];

    $conexao->query(
        "INSERT INTO usuarios(nome,nickname,senha,telefone,telejogo,idgame) VALUES ('$nome','$nickname','$senha','$telefone','$telljogo',$id);");
        //"INSERT INTO usuarios (nome,nickname,senha,telefone,telejogo,idgame) VALUES ('$nome','$nickname''$senha,'$telefone','$telljogo',$id)");
     
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=\">
    <title>Formulário | bloods </title>
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
        legend{
            border: 1px solid red;
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
            width: 100%;
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
            padding: 15px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 20px;
        }
        #submit:hover{
            background-color: deepskyblue;
        }
        .vtr{
            font-family:arial;
            text-decoration: none;
            color: white;
            border: 3px solid red;
            border-radius: 60px;
            padding: 4px;
            background-color:red;
            margin:10px;
            position: absolute;
            font-size:13px;
            
        }         
        .table{
            background: rgba(0, 0, 0, 0,0.6);
        }                                 
    </style>
    
</head>
<body> 
    <a href="home.php" class="vtr">VOLTAR</a>
    <div class="box">
        <form action="#" method="POST">
            <fieldset>
            <legend><b>Formulário blood</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelinput">Nome completo</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="nickname" id="nickname" class="inputUser" required>
                <label for="nickname" class="labelinput">Nickname</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelinput">Senha</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelinput">Telefone</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="tel" name="telefonejg" id="telejogo" class="inputUser" required>
                <label for="telefone" class="labelinput">Telefone Jogo</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="number" name="id" id="id" class="inputUser" required>
                <label for="id" class="labelinput">Id</label>
            </div>
            <br>
            <input type="submit" name="submit" id="submit" value="Enviar"> 
            </fieldset>
        </form>
       
</body>
</html>
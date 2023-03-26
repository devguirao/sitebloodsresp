<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela | login</title>
    <style>      
        body{
            font-family: 'Times New Roman', Times, serif;
            background-image: linear-gradient(45deg, black, red);
        }
        div{
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: darkred;
            border: none;
            padding: 15px;
            width: 100px;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
        }
       
        .imgblods{
            width: 80px;
            position: absolute;
            top: 33%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 15px;
            
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
        
    </style>
</head>
<body>
    <a href="home.php" class="vtr">VOLTAR</a>
    <form action="loginAction.php" method="POST">
    <div >
        <h1>LOGIN</h1>      
        <input type="text" name="nick" placeholder="nickname" required>
        <br><br>          
        <input type="password" name="senha" placeholder="senha" required>
        <br><br>
        <input class="inputSubmit" type="submit" value="Enviar"> 
    </div>
    </form>
    <img src="Fotos/bloods.png" alt="imagembloods" class="imgblods">
    
</body>
</html>
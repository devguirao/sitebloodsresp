<?php 
include_once ('verificarAcesso.php'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecione | Local</title>
<style>
    body{
        background-image: linear-gradient(45deg, black, red);   
    }
    .caixas1{
        position: absolute;
        top: 50%;
        left: 40%;
        transform: translate (-50%, -50%);
        border: 3px solid red;
        border-radius: 10px;
        padding: 40px;
        background-color:black;
        font-size:30px;     
        box-shadow: 10px 5px 5px black;
    }
    .caixas2{
        position: absolute;
        top: 50%;
        left: 52%;
        transform: translate (-50%, -50%);
        border: 3px solid red;
        border-radius: 10px;
        padding: 40px;
        background-color:black;
        font-size:30px;    
        box-shadow: 10px 5px 5px black;
    }
    a{
        text-decoration:none;
        color: white;
        font-family:Stencil Std, fantasy;
    }
    .caixas2:hover{
     background-color: deepskyblue;
    }
    .caixas1:hover{
     background-color: deepskyblue;
    }
    audio{
        position:absolute;
		left:77%;
		top:83%;
        
		
    }
    img{
        width:10%;
        position:absolute;
        left:45.5%;
        top:25%;
    }
    .caixas3{
        position: absolute;
        top: 50%;
        left: 52%;
        transform: translate (-50%, -50%);
        border: 3px solid red;
        border-radius: 10px;
        padding: 40px;
        background-color:black;
        font-size:30px;    
        box-shadow: 10px 5px 5px black; 
    }
    .caixas3:hover{
        background-color:deepskyblue;
    }
    .lista{
        box-shadow:10px 5px 5px black;
        color:white;
            position: absolute;
            top: 57%;
            left: 85%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-bottom:15px;
            width: 20%;
            border-radius: 15px;
            font-family: 'Times New Roman', Times, serif;
    }
    .flt{
        border: 5px solid red;
    }
    p{
        font-size: 16px;
    }
    .btnLg{
        text-decoration: none;
        display: flex;
        background-color: red;
        justify-content: center;
        border-radius: 15px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: white;
        background: linear-gradient(270deg, #ff0000, #000000);
    background-size: 400% 400%;
    -webkit-animation: AnimationName 30s ease infinite;
    -moz-animation: AnimationName 30s ease infinite;
    -o-animation: AnimationName 30s ease infinite;
    animation: AnimationName 30s ease infinite;
    cursor: pointer;

    }
    @-webkit-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-o-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

</style>

</head>
<body>
        
    <div class="caixas1" >
    <a href="adicional.php" class="vtr">Adicional</a>
    </div>

    <div class="caixas3">
        <a href="mtvfalta.php" class="btr">Ausência</a>
    </div>

<audio controls loop>
    <source src="Musica/X2Download.app - Sangue Blood - Dalí (NEXUS RP) (128 kbps).wav" type="audio/x.wav"> 
    <source src="Musica/X2Download.app - Sangue Blood - Dalí (NEXUS RP) (128 kbps).mp3" type="audio/mp3"> 
    Seu navegador não suporta este recurso !
</audio>  
<a href="https://chat.whatsapp.com/L693KBuZZm98C2FUrFf6sa">
<img src="Fotos/bloods.png" alt="Img/wpp" >
</a>

<div class="lista">
    
    <h1>Bem-vindo aos Bloods</h1>
    <p>Funcionamento do site, na aba "Adicional" é a areá do bau, onde você entrara e colocara 
    se adicionou algo, tirou, pano, linha, kelva e a data do dia, tudo é obrigatório então não tente
    enviar sem nada !    
    </p>
    
    <br>

    <p>
        Na aba Ausência, funciona igual ao discord, você faltou entre aqui no site e vá em 'Ausência', vai faltar por
        algum motivo, venha e adicione aqui o motivo !
    </p>
    <br>
    <p>
        Por favor, não compartilhe seu login com ninguém.
    </p>
</div>
    <div>
        <form action="LogoutAction.php" method="POST">
        <button name="btnLogout" class="btnLg">
            <i>Logout</i>
        </button>
        </form>
    </div>

   
</body>
</html>
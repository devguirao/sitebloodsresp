<?php
session_start();
$nick = $_POST['nick'];
$senha = $_POST['senha'];
    require_once 'conexaoBD.php';
    $sql = "SELECT * FROM usuarios WHERE nickname = '".$nick."';";
    $resultado = $conexao->query($sql);

    $linha = mysqli_fetch_array($resultado);
    if($linha != null)
    {
        if($linha['senha'] == $senha){
            echo '<h1 class="sbv">Seja Bem-vindo '.$nick.'</h1>;
            <a href="selecione.php" class="certo"><p>Clique aqui para acessar</p><a>';
            $_SESSION['logado'] = $nick;
        }
        else 
        {
            echo '<a href="formulario.php" class="errado"><h1>Formulario</h1></a>';
        }
    }
    else
    {
        echo '<a href="formulario.php" class="errado"><h1>Formulario</h1></a>'; 
        
        
    }
    $conexao->close();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
       .errado{
        text-decoration: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color:white;
        text-decoration: none;
        width: 190%;
        font-size: 30px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border: 1px solid;
        border-radius: 15px;
        font-family: cursive;
        max-width: 350px;
        max-height: 90%;
        box-shadow:10px 5px 5px black;
       }
       .sbv
    {
        text-align: center;
        border: 3px solid white;
        color: white;
        font-size: 60px;
        border-radius: 15px;
    }
    .certo
    {         
        position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
        text-align: center;
        color:white;
        text-decoration: none;
        width: 190%;
        font-size: 30px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border: 1px solid;
        border-radius: 15px;
        font-family: cursive;
        max-width: 190px;
        max-height: 190%;
        box-shadow:10px 5px 5px black;
     }
     
.certo:hover{
    color: red;
}
        * {
    background: linear-gradient(327deg, #ff0000, #00ffdb, #000000);
    background-size: 600% 600%;
    -webkit-animation: AnimationName 29s ease infinite;
    -moz-animation: AnimationName 29s ease infinite;
    animation: AnimationName 29s ease infinite;

}

@-webkit-keyframes AnimationName 
{
    0%{background-position:0% 7%};
    50%{background-position:100% 94%};
    100%{background-position:0% 7%};
}
@-moz-keyframes AnimationName 
{
    0%{background-position:0% 7%};
    50%{background-position:100% 94%};
    100%{background-position:0% 7%};
}
@keyframes AnimationName 
{
    0%{background-position:0% 7%};
    50%{background-position:100% 94%};
    100%{background-position:0% 7%};
}
    </style>
</head>
<body>

</body>
</html>

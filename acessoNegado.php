<?php
echo '<a href="tela-de-login.php">
<h1> Acesso negado </h1>
<br>
<h2> È necessario a Realização do Login inválido</h2>
</a>';
?>
<style>
    h1,h2{
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